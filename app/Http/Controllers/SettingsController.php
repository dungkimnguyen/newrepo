<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Carbon\Carbon;
use App\Agency;
use App\AgencyInfo;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

use App\client;
use App\Employee;
use App\Schedule;
class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $user = Auth::user();

        if($user->role_id == 1)
        {
        return Redirect::route('admin');
        }
        else if($user->role_id == 2)
        {

           $user = Auth::user();
        $agency = Agency::where('user_id', '=', $user->id)->first();
        if($agency!=null)
        $agencyInfo = AgencyInfo::where('agency_id','=',$agency->id)->first();

       

                     //return $employees;

         return view('dashboard/settings/agency')->with(compact("client" , "user", "agencyInfo" , "agency"));
        }
        if($user->role_id == 3)
        {

         
         return view('dashboard/settings/employee')->with(compact('user'));
        }
        else if($user->role_id == 4)
        {
         return view('dashboard/settings/client')->with(compact('user'));
        }    
    }
    
    public function agencyUpdate()
    {

        $user = Auth::user();

        $input =  Request::input();

        if($input["new"] == "true")
        {

            $agency = new Agency();
            $agency->name = $input['name'];
            $agency->industry = $input['industry'];
            $agency->user_id = $user->id;
            $agency->save();

            $agencyInfo = new AgencyInfo();
            $agencyInfo-> agency_id = $agency->id;
            $agencyInfo->phone = $input['phone'];

                $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);


            $agencyInfo->address = json_encode($address);
            $agencyInfo->email = $input['email'];
            $agencyInfo->website = $input['url'];
            $agencyInfo->about = $input['about'];
            $agencyInfo->employees = 0;
            $agencyInfo->slug = str_random(4).$agency->id;
            $agencyInfo->save();

        }
        else
        {

            $agency = Agency::where('id','=', $input['id'])->first();
            $agency->name = $input['name'];
            $agency->user_id = $user->id;
            $agency->industry = $input['industry'];
            $agency->save();

            $agencyInfo = AgencyInfo::where('agency_id','=', $input['id'])->first();
            $agencyInfo-> agency_id = $agency->id;
            $agencyInfo->phone = $input['phone'];

                $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);

            $agencyInfo->address = json_encode($address);
            $agencyInfo->email = $input['email'];
            $agencyInfo->website = $input['url'];
            $agencyInfo->about = $input['about_me'];
            
            $agencyInfo->save();

        }


        $rows[] = array("success" => '1',"data" => $input);

        return \Response::json($rows);
        return $input;
        return "agency update";
    }

    public function employeeUpdate()
    {
        $user = Auth::user();

                $input =  Request::input();

                             $messages = [
                    'add1.required' => 'Address Line 1 is required',
                    'country.required' => 'Country is required',
                    'state.required' => 'City/State is required',
                    'zip.required' => 'Zip Code is required',
                    'zip.regex' => 'ZipCode must be a valid Zip Code (12345, 12345-6789)',
                    'phone.required' => "Phone number is required",
                    'email.required' => 'Email is required'
                ];
                $validator = Validator::make($input, [
                    'add1' => ['required'],
                    'country' => ['required'],
                    'state' => ['required'],
                    'zip' => ['required','regex:/^\d{5}(?:[-\s]\d{4})?$/'],
                    'phone' => ['required'],
                    'email' => ['required']
                ],  $messages);
                if ($validator->fails()){
                    return response()->json(['errors' => $validator->errors()], 400);
                }

          $employee = $user->employee;

                    $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);

         $employee->address = json_encode($address);
          $employee->phone = $input['phone'];
          $employee->email = $input['email'];
            $employee->save();

        $rows[] = array("success" => '1',"data" => $employee);

        return \Response::json($rows);

    }



    public function clientUpdate()
    {
                $input =  Request::input();
                 $user = Auth::user();



  if($input["new"] == "true")
        {



            $client = new Client();
            $client-> user_id = $user->id;
            $client->phone = $input['phone'];

            $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);

            $client->address = json_encode($address);

            $client->about = $input['about'];

            $client->save();

        }
        else
        {


            $client = Client::where('user_id','=', $user->id)->first();

            $client->phone = $input['phone'];

            $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);

            $client->address = json_encode($address);

            $client->about = $input['about'];

            $client->save();

        }




                        $rows[] = array("success" => '1',"data" => $input);

        return \Response::json($rows);
        return $input;
        return "client update";
    }


    public function userUpdate()
    {
                         $user = Auth::user();

                $input =  Request::input();

                $user->firstName = $input['firstName'];
                $user->lastName = $input['lastName'];
                 $user->email = $input['email'];


                 $user->save();
                                      $rows[] = array("success" => '1',"data" => $input);

        return \Response::json($rows);
        return $input;
        return "user update";
    }
}
