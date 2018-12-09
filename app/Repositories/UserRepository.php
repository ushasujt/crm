<?php

namespace App\Repositories;

use App\Models\Users;
use Session;
use DB;

class UserRepository
{
    protected $userTable;
    
    public function __construct()
    {
        $this->userTable = new Users();
    }
    
    public function getAllUsers(){
        try {
            $data = Users::all();
            return $data->toArray();
        } catch (\Exception $ex) {
            ErrorLog::log($e->getMessage(),'error',__METHOD__);
            return false;
        }
    }
    
    public function getUserDetails($userId){
        try {
            $res = Users::find($userId);
            $res = isset($res->id) ? $res : null;
            return $res;
        } catch (\Exception $ex) {
            ErrorLog::log($ex->getMessage(),'error',__METHOD__);
            return false;
        }
    }
     
    public function saveUserData($postData){
        try {
            
            
            
        } catch (\Exception $ex) {
            ErrorLog::log($e->getMessage(),'error',__METHOD__);
            return false;
        }
    }
   
}