<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Session;
use Illuminate\Http\Request;
use App\Services\Common;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }

     public function login(Request $oRequest)
    {
        $aRequest = $oRequest->all();
        $app = isset($aRequest['app']) ? $aRequest['app'] : false;
        if($app)
            $app = 1;
        else
            $app = 0;
        $red_auth_url = isset($aRequest['red_auth_url']) ? $aRequest['red_auth_url'] : false;

        if ($user = Auth::user()) {
            if ($app) {
                $red_url = $aRequest['red_auth_url'] . '?token=' . $user->wba_token;
                return redirect($red_url);
            }
            return redirect('home');
        }
        if($red_auth_url==false){
           $red_auth_url=Session::get('loginredirect');
           Session::forget('loginredirect');
        }
        return view('login-page', ['app' => $app, 'red_auth_url' => $red_auth_url, 'bIsAdminPage' => true]);
    }

    public function authenticate(Request $oRequest)
    { 
        $counter = session()->get('login_counter');
        $aRequest = $oRequest->all();
        if($counter > 4){
            $validation = Validator::make($aRequest, [
                'email' => 'required|email',
                'password' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ]);
        }else{
            $validation = Validator::make($aRequest, [
                'email' => 'required|email',
                'password' => 'required'
            ]);
        
        }
        $userId = null;
        if ($validation->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => Common::prepareValidationErrorMsg($validation->errors()),
                'data' => $validation->errors()
            ], 400);
        }
        $emailId = trim($aRequest['email']);
        $password = trim($aRequest['password']);


        $aCredentials = array('email' => $emailId, 'password' => $password, 'status' => 1);
        $aCredentials2 = array('email' => $emailId, 'password' => $password, 'status' => 1);


        if (Auth::attempt($aCredentials) || Auth::attempt($aCredentials2)) {

            $user = Auth::user();
            $userId = $user->user_id;
            session()->put('login_counter',0);
            /** ADDED FOR APP AUTH **/
            $red_url = false;
            if (isset($aRequest['app']) && $aRequest['app']){
                $red_url = $aRequest['red_auth_url'] . '?token=' . $token;
            }else{
                $red_url=$aRequest['red_auth_url'];
            }
            /** -------------- **/
            return response()->json([
                'status' => 'success',
                'red_url' => $red_url,
                'message' => 'Logged in successfully'
            ]);
        } else {
            if($counter >=0){
                $counter++;
                session()->put('login_counter',$counter);
                $counter=session()->get('login_counter');
            }else{
               $counter = session()->put('login_counter',0);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Incorrect username or password ! Please try again.'
            ], 404);
        }
        
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
      
    public function homePage($days=1)
    {       
        return view('dashboard',
                [     
                ]
        );
    }
    
    public function accessDenied()
    {
        return view('access-denied');
    }


   

}