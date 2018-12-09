<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Session;
use Illuminate\Http\Request;
use App\Services\RegexService;
use App\Services\Common;
use App\Repositories\UserRepository;

class UserManagementController extends Controller
{
    
    protected $userRepo;
    
    public function getUserRepo()
    {
        if(!$this->userRepo){
            $this->userRepo = new UserRepository();
        }
        return $this->userRepo;
    }
    
    public function index()
    {       
        $userDetails = $this->getUserRepo()->getAllUsers();
        return view('UserManagement.users-list',[     
                    'userDetails' => $userDetails,
                ]
        );
    }
    
    public function addEdit($user_id, Request $request)
    {
        $requestMethod = $request->getMethod();
        $aRequest = $request->all();
        $loggedUser = Auth::user();
        $loggedUserId = $loggedUser->id;
        if($requestMethod == 'GET') {  
            $userDetails = $this->getUserRepo()->getUserDetails($user_id);
           
            return view('UserManagement.users-addedit', [
                'userDetails'             => $userDetails,
            ]);
        }
        else if($requestMethod == 'POST') {
            try {
                $aRules   = [
                    'email_id' => 'required|email',
                    'fname'    => 'required|max:50|min:2|regex:'.RegexService::LETTERS_AND_SPACE_ONLY,
                    'lname'    => 'required|max:50|regex:'.RegexService::LETTERS_AND_SPACE_ONLY,

                ];
                
                $validation = Validator::make($aRequest, $aRules);
                if($validation->fails()) {
                    return response()->json([
                        'status' => false,
                        'msg'    => Common::prepareValidationErrorMsg($validation->errors())
                    ]);
                }
                $res = $this->userRepo->updateUser($loggedUserId, $request->all(), $user_id);

                return response()->json([
                    'status' => true,
                    'msg'    => 'User details updated successfully'
                ]);
            }
            catch(Exception $e) {
                    return response()->json([
                        'status' => false,
                        'msg'    => $e->getMessage(),
                    ]);
            }

        }




    }
    
        
    public function saveUserData(Request $request)
    {       
         try {
            $rules = [
                'email' => 'required|email',
                'fname' => 'required|max:50|min:2|regex:'.RegexService::LETTERS_AND_SPACE_ONLY,
                'lname' => 'required|max:50|min:2|regex:'.RegexService::LETTERS_AND_SPACE_ONLY,
                'mobile' => 'required|regex:'.RegexService::PHONE_NUMBER,
            ];
            
            $postData = $request->all();
            $v = Validator::make($postData, $rules);
            
            if ($v->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => Common::prepareValidationErrorMsg($v->errors())
                ], 200);
            }
            
            $res = $this->getUserRepo()->saveUserData($postData);
            
            if ($res) {
                return Response::json([
                    'status' => true,
                    'message' => 'Candidate removed successfully',
                ], 200);
            }else{
                return Response::json([
                    'status' => false,
                    'message' => 'Technical Error. Please Try again',
                ], 200);
            }
            
         } catch (Exception $e) {
            return Response::json([
                'status' => false,
                'message' => 'Technical error. Please Try again'
            ], 200);
        }        
    }
}
