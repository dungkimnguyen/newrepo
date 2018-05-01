<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Agency;
use App\AgencyInfo;
use Auth;
use App\User;
use App\UserInvite;
use Mail;


use View;
use Request;

class EmployeeInviteController extends Controller
{




  

    public function employeeinvite()
    {
        $user = Auth::user();



         $agency = Agency::where('user_id', '=', $user->id)->firstOrFail();

        $invites = UserInvite::where("agency_id", '=', $agency->id )->get();

        return view('employeeInvite')->with( compact("user","agency","invites") );
            
    }

    public function sendEmployeeInvite()
    {

              $user = Auth::user();
         $agency = Agency::where('user_id', '=', $user->id)->firstOrFail();

        $input = \Request::input();

       $inUse = User::where("email", '=', $input['email'])->first();
            $sentAlready = UserInvite::where("email", '=', $input['email'])->where("agency_id", '=', $agency->id)->first();
            $employeeCheck = UserInvite::where("email", '=', $input['email'])->where("type", '=', 'client')->first();


           if($sentAlready)
            {
             $rows[] = array("error" => '1',"msg" => "You have already ivited this user to be a employee (if need to resend hit resend button)." );
             return \Response::json($rows);
           }
           if($employeeCheck)
           {
                         $rows[] = array("error" => '1',"msg" => "This user is Registered as a Client. Email is not eligible for employee account." );
             return \Response::json($rows);
           }
           if($inUse)
           {
            if($inUse->role_id != 3)
            {
                $rows[] = array("error" => '1',"msg" => "This user is Registered as a Non Employee type account. Email is not eligible for employee account." );
                return \Response::json($rows);
            }

           }
        $inviteToken = str_random(40);

           $invited = new UserInvite();
               $invited->user_id = 0;
                $invited->type = "employee";
                $invited->email = $input["email"];
                $invited->status = "sent";
                $invited->token = $inviteToken;
                $invited->agency_id = $agency->id;

            if($inUse)
            {
             $invited->new_email = 'false';
           }
           else
           {
             $invited->new_email = 'true';
           }

                $invited->save();

              

        $namez = $agency->name;
        $emailz = $input['email'];

       $send = Mail::send('emails.employeeInvite',['confirmation_code' => $inviteToken , 'email' => $emailz , 'name' => $namez], function($message) 
        use ($emailz, $namez)
     {
            $message->to($emailz,$namez)
                ->subject('Verify your email address');
        });

       // return "send token function create employee invite model";


   $invites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "employee" )->get();

                return view('/dashboard/addEmployee')->with( compact("invites" , "user", "agency" ) );
 

           
    }


    public function resendEmployeeInvite()
    {

              $user = Auth::user();
         $agency = Agency::where('user_id', '=', $user->id)->firstOrFail();

        $input = \Request::input();
        $userInvite = UserInvite::where('token', '=', $input['token'])->first();

            $inUse = User::where("email", '=', $input['email'])->first();
            $employeeCheck = UserInvite::where("email", '=', $input['email'])->where("type", '=', 'client')->first();

           if($employeeCheck)
           {
                         $rows[] = array("error" => '1',"msg" => "This user is Registered as a Client. Email is not eligible for employee account." );
             return \Response::json($rows);
           }
           if($inUse)
           {
            if($inUse->role_id != 3)
            {
                $rows[] = array("error" => '1',"msg" => "This user is Registered as a Non Employee type account. Email is not eligible for employee account." );
                return \Response::json($rows);
            }
           }
        $inviteToken = str_random(40);

        $userInvite->token = $inviteToken;

            if($inUse)
            {
             $invited->new_email = 'false';
           }
           else
           {
             $invited->new_email = 'true';
           }



        $userInvite->save();
           

        $namez = $agency->name;
        $emailz = $input['email'];

       $send = Mail::send('emails.employeeInvite',['confirmation_code' => $inviteToken , 'email' => $emailz , 'name' => $namez], function($message) 
        use ($emailz, $namez)
     {
            $message->to($emailz,$namez)
                ->subject('Verify your email address');
        });


            $rows[] = array("success" => '1',"email" => $input['email'] );
            return \Response::json($rows);
    }


    public function loadEmployeeInvite($token)
    {
          $invite = UserInvite::where("token", '=', $token)->first();

          if($invite){
             return view('auth.employeeRegister')->with( compact("invite") );
          }

        return "Error Loading Invite";
    }


  






}