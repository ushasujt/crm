<?php

namespace App\Repositories;

use App\Jobs\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;


class EmailRepository {

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
     public function __counstruct(){
        
       
     }
    
     public static function sendEmail($emailContent){
        
         Mail::send($emailContent['template'],['emailContent' => $emailContent], function($message) use ($emailContent){
            
            $message->from('no-reply@workbank.com', 'Workbank')
                    ->to($emailContent['email'], 'Workbank')->subject($emailContent['subject']);

             if(isset($emailContent['cc'])){
                 $message->cc($emailContent['cc']);
             }
         });
    }
    
     public static function sendCandidateWelcomeMail($emailContent, $immediate = false, $inbox = false){

        $emailContent['template'] = 'emails.candidate-welcome-mail';
        $emailContent['subject']  = $emailContent['name'].', your Workbank account has been created!' ;
        
        if(!$immediate){
            dispatch(new SendEmail($emailContent));
         }else{
             self::sendEmail($emailContent);
         }

    }
    
    
    
}
