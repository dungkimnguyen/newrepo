<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

use View;
use Illuminate\Http\Request;
use Redirect;

use App\Client;
use Mail;
use App\UserPortfolio;
use App\UserInvite;
use App\Connection;
use App\Employee;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

  public function register(Request $request)
    {
        $input =  \Request::input();
       
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        if(isset($input['invite']))
                              return view('verified');  
        else
            return Redirect::route('auth.success');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:20|unique:users',
            'firstName' => 'required|max:20',
            'lastName' => 'required|max:20',

            'email' => 'required|email|max:191|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {


        if(isset($data['invite']))
        {
            if($data['type'] == "employee")
            {

             $invite = UserInvite::where("token", '=', $data['invite'])->first();


            //return $data;
             if($invite->new_email == 'true')
             {
               
                $inUse = User::where("email", '=', $data['email'])->first();
                if($inUse)
                {

                  $rows[] = array("success" => '1',"msg" => "Email is InUse");
                return \Response::json($rows);       
                }
                else
                {
                             $user = User::create([
                'name' => $data['name'],
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'token' => "",
                'active' => 1,
                'role_id' => 3,
                     ]);
                }
  
             }
             else
             {
                $user = User::where('email','=', $invite->email)->first();
             }



              if($invite)
              {

                $invite->status = "accepted";
                $invite->user_id = $user->id;

                $invite->token = null;
                $invite->save();

                $employee = Employee::create([
                'user_id' => $user->id,
                'agency_id' => $invite->agency_id,
                'email' => $invite->email,
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'industries' => [null],
                'schedule' => [null],
                    ]);

  return view('verified');  


                  $rows[] = array("success" => '1',"msg" => "Sucessfully Registered Please Complete Profile on login");
                return \Response::json($rows);       
                }

                 return "error";
            }
            else if($data['type'] == "client")
            {
            //return $data;


             $invite = UserInvite::where("token", '=', $data['invite'])->first();

             if($invite->new_email == 'true')
             {
                                $inUse = User::where("email", '=', $data['email'])->first();
                if($inUse)
                {

                  $rows[] = array("success" => '1',"msg" => "Email is InUse");
                return \Response::json($rows);       
                }
                else
                {
                               $user = User::create([
                'name' => $data['name'],
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'token' => "",
                'active' => 1,
                'role_id' => 4,
                     ]);
                }
             }
             else
             {
                $user = User::where('email','=', $invite->email)->first();
             }

          if($invite){

            $invite->status = "accepted";
            $invite->user_id = $user->id;

            $invite->token = null;
            $invite->save();

            $client = Client::create([
            'user_id' => $user->id,
                ]);

                $connection = new Connection();
                $connection->client_id = $client->id;
                $connection->agency_id = $invite->agency_id;
                $connection->save();

   return view('verified');  


                  $rows[] = array("success" => '1',"msg" => "Sucessfully Registered Please Complete Profile on login");
                return \Response::json($rows);       
          }

                 return "error";
            }
        }

        if($data['type'] == "client")
            {
                $role_id = 4;
            }
        if($data['type'] == "agency")
            {
                $role_id = 2;
            }
         $confirmation_code = str_random(40);
        $user = User::create([
            'name' => $data['name'],
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'activationToken' => $confirmation_code,
            'active' => 0,
            'role_id' => $role_id,
        ]);

        $namez = $data['firstName'] ." ". $data['lastName'];
        $emailz = $data['email'];
                  $send = Mail::send('emails.verify',['confirmation_code' => $confirmation_code , 'email' => $emailz , 'name' => $namez], function($message) 
                    use ($emailz, $namez)
                     {
                            $message->to($emailz,$namez)
                                ->subject('Verify your email address');
                        });

        
        if($data['type'] == "client")
            {
                $client = Client::create([
            'user_id' => $user->id,
                ]);

            }

   return redirect(route('auth.success')); // Change this route to your needs    


                  $rows[] = array("success" => '1',"msg" => "Sucessfully Registered Please Complete Activation by checking email");
                return \Response::json($rows);       
    }


    public function newConfirmToken()
    {


                    $input =  \Request::input();

            $user = User::where('email', '=', $input['email'])->first();

            if($user == null)
            {

                $rows[] = array("error" => '1',"msg" => "that email is not in our records");
                return \Response::json($rows);          
                  }

                 $confirmation_code = str_random(40);
                    $namez = $user->firstName +" "+ $user->lastName;
                    $emailz = $user->email;

                   $send = Mail::send('emails.verify',['confirmation_code' => $confirmation_code , 'email' => $emailz , 'name' => $namez], function($message) 
                    use ($emailz, $namez)
                     {
                            $message->to($emailz,$namez)
                                ->subject('Verify your email address');
                        });

                   $user->activationToken = $confirmation_code;
                   $user->save();

        $rows[] = array("success" => '1',"user" => $user);
            return \Response::json($rows);

  

    }

     public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

//        $user = User::whereConfirmationCode($confirmation_code)->first();
        $user = User::where('activationToken', '=', $confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->active = 1;
        $user->activationToken = null;
        $user->save();

return view('verified');
        //Flash::message('You have successfully verified your account.');

       // return Redirect::route('login');
    }

       public function success()
    {
        return view('registered');
    }
}
