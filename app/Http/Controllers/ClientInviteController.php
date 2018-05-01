<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Agency;
use App\AgencyInfo;
use Auth;
use App\User;
use App\UserInvite;
use Mail;
use App\Client;
use App\Connection;


use View;
use Request;

class ClientInviteController extends Controller
{




  

    public function clientInvite()
    {
        $user = Auth::user();



         $agency = Agency::where('user_id', '=', $user->id)->first();

        $invites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "client" )->get();

        return view('ClientInvite')->with( compact("user","agency","invites") );
            
    }

    public function sendClientInvite()
    {

              $user = Auth::user();
         $agency = Agency::where('user_id', '=', $user->id)->first();

        $input = \Request::input();

            $inUse = User::where("email", '=', $input['email'])->first();
            $sentAlready = UserInvite::where("email", '=', $input['email'])->where("agency_id", '=', $agency->id)->first();
            $employeeCheck = UserInvite::where("email", '=', $input['email'])->where("type", '=', 'employee')->first();



           if($sentAlready)
            {
             $rows[] = array("error" => '1',"msg" => "You have aready Invited this User to join.(if need to resend invite hit resend button)" );
             return \Response::json($rows);
           }
           if($employeeCheck)
           {
                         $rows[] = array("error" => '1',"msg" => "This user is Registered as Employee. Email is not eligible for client account." );
             return \Response::json($rows);
           }
           if($inUse)
           {
            if($inUse->role_id != 3)
            {
                $rows[] = array("error" => '1',"msg" => "This user is Registered as a Non Employee type account. Email is not eligible for client account." );
                return \Response::json($rows);
            }
           }
        $inviteToken = str_random(40);

            $invited = new UserInvite();
               $invited->user_id = 0;
                $invited->type = "client";
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

       $send = Mail::send('emails.clientInvite',['confirmation_code' => $inviteToken , 'email' => $emailz , 'name' => $namez], function($message) 
        use ($emailz, $namez)
     {
            $message->to($emailz,$namez)
                ->subject('Verify your email address');
        });

       // return "send token function create Client invite model";
        $clientInvites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "client" )->get();

                return view('/dashboard/addClient')->with( compact("clientInvites" , "user", "agency" ) );
    }


    public function resendClientInvite($token)
    {

              $user = Auth::user();
         $agency = Agency::where('user_id', '=', $user->id)->firstOrFail();

        $input = \Request::input();

         $inUse = User::where("email", '=', $input['email'])->first();
            $sentAlready = UserInvite::where("email", '=', $input['email'])->where("agency_id", '=', $agency->id)->first();
            $employeeCheck = UserInvite::where("email", '=', $input['email'])->where("type", '=', 'employee')->first();



           if($sentAlready)
            {
             $rows[] = array("error" => '1',"msg" => "You have aready Invited this User to join." );
             return \Response::json($rows);
           }
           if($employeeCheck)
           {
                         $rows[] = array("error" => '1',"msg" => "This user is Registered as Employee. Email is not eligible for client account." );
             return \Response::json($rows);
           }
           if($inUse)
           {
            if($inUse->role_id != 3)
            {
                $rows[] = array("error" => '1',"msg" => "This user is Registered as a Non Employee type account. Email is not eligible for client account." );
                return \Response::json($rows);
            }
           }
        $userInvite = UserInvite::where('token', '=', $token)->firstOrFail();


        $inviteToken = str_random(40);

        $userInvite->token = $token;

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

       $send = Mail::send('emails.clientInvite',['confirmation_code' => $inviteToken , 'email' => $emailz , 'name' => $namez], function($message) 
        use ($emailz, $namez)
     {
            $message->to($emailz,$namez)
                ->subject('Verify your email address');
        });


            $rows[] = array("success" => '1',"email" => $input['email'] );
            return \Response::json($rows);
    }


    public function loadClientInvite($token)
    {
          $invite = UserInvite::where("token", '=', $token)->first();

          if($invite){
             return view('auth.clientRegister')->with( compact("invite") );
          }

        return "Error loading invite";
    }


    public function createConnection()
        {
            $input =  \Request::input();
            $user = Auth::user();

            if(isset($user->client))
            {
                return "is clients";
                $connection = new Connection();
                $connection->client_id = $user->client->id;
                $connection->agency_id = $input['id'];
                $connection->save();

                  $rows[] = array("success" => '1',"connection" => $connection);
            return \Response::json($rows);
            }
        }







}