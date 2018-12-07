<?php

namespace App\Http\Controllers\Auth;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Auth;
use Validator;
use Session;

class ForgotPasswordController extends Controller
{
    protected $userRepo;
    
    public function __construct()
    {

        $this->userRepo = new UserRepository();

    }


    public function forgotPassword()
    {
        if(Auth::user()) {
            return redirect('home');
        }
        return view('forget-password', [
            
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author jasmel
     */
    public function sendVerificationMail(Request $request){
        try{

            $aRules = [
                'email' => 'required|email'
            ];

            $v = Validator::make($request->all(), $aRules);

            if($v->fails()) {
                Session::flash('error', 'Validation error');
                return back();
            }


            if($this->userRepo->check_email_exists($request->get('email'),1) || $this->userRepo->check_email_exists($request->get('email'),2)){
                $this->userRepo->sendVerificationMailForForgotPassword($request->get('email'),'admin');

                Session::flash('success', 'If your account was located, an email will be sent with instructions for resetting your password.');

                return redirect('forgot-password');

            }else{

                Session::flash('success', 'If your account was located, an email will be sent with instructions for resetting your password.');

                return back();

            }
        }catch(Exception $e){
            Session::flash('error', 'Technical failure');

            return back();
        }

    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author jasmel
     */
    public function verifyEmail(Request $request){
        try{
           /* echo '<pre>';
            print_r($request->toArray());
            die;*/
            if($this->userRepo->verifyEmailForPassword($request->get('email'),$request->get('activation_token'))){
                return view('backend.system-admin.user-management.change-password')->with('data',$request->all());

            }
            else {
                Session::flash('error', 'Link expired');
                return redirect('/');
            }
        }catch(Exception $e){

        }
    }

    /**
     * @param Request $request
     * @author jasmel
     */
    public function setNewPassword(Request $request){
        try{
            
            $v = Validator::make($request->all(), [
                'password' => 'required|min:8|max:15|confirmed|wb_password',
                'activation_token' => 'required',
                'email'=>'required|email'
            ]);
            

            if ($v->fails())
            {
                Session::flash('error', 'validate failed');
                return back();
            }

            $aData = [];
            $aData['email']       = $request->get('email');
            $aData['password']     = $request->get('password');
            
            $user = User::where('email', $aData['email'])->first();
            $send_status=$this->userRepo->setNewPassword($aData);
            
            if($send_status) {
                
                $oUser = Auth::user();
                
                if($oUser){

                    $userId = isset($oUser->id) ? $oUser->id : null;
                    $this->wbAppTokenRepo->logOutFromToken($userId);
                    Auth::logout();
                }

                Auth::login($user);
                session()->put('login_counter',0);
                $token = $this->wbAppTokenRepo->generateToken($user);
                $red_url = 'home?token=' . $token;
                
                Session::flash('success', 'Success! Your password has been successfully reset.');
                return redirect($red_url);
            }


        }catch(Exception $e){
            Session::flash('error', 'Technical error');
            return back();
        }
    }




}
