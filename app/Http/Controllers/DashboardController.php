<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Carbon\Carbon;
use App\Agency;
use App\AgencyInfo;
use App\Client;
use App\Connection;

use App\User;
use App\UserInvite;
use Mail;
use App\Employee;
use App\Schedule;
use App\Offer;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if($user->role_id == 1)
        {
        return view('dashboard/admin')->with(compact('user'));
        }
        else if($user->role_id == 2)
        {


        $user = Auth::user();
        $agency = Agency::where('user_id', '=', $user->id)->first();
        if($agency != null)
        {
        $agencyInfo = AgencyInfo::where('agency_id','=',$agency->id)->first();

        $invites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "employee" )->get();
        $clientInvites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "client" )->get();

        $employees = Employee::with("user")->where("agency_id", "=" , $agency->id)->get();

        //return $employees;
        return view('dashboard/agency')->with( compact("agencyInfo" , "user", "employees", "agency" , "invites",'clientInvites') );
        }
        else
        {
                return view('dashboard/settings/agency')->with(compact("client" , "user", "agencyInfo" , "agency"));


        }


        }
        if($user->role_id == 3)
        {

        $schedule = Schedule::where('employee_id','=',$user->employee->id)->first();
      

        return view('dashboard/employee')->with(compact('user','schedule'));
        }
        else if($user->role_id == 4)
        {

        return view('dashboard/client')->with(compact('user'));
        }    
    }


    public function settings()
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


 public function add()
    {
        $user = Auth::user();

        if($user->role_id == 1)
        {
        return view('dashboard/add')->with(compact('user'));
        }
        else if($user->role_id == 2)
        {


        $user = Auth::user();
        $agency = Agency::where('user_id', '=', $user->id)->first();
        if($agency != null)
        {
        $agencyInfo = AgencyInfo::where('agency_id','=',$agency->id)->first();

        $invites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "employee" )->get();
        $clientInvites = UserInvite::where("agency_id", '=', $agency->id )->where("type", '=', "client" )->get();

        $employees = Employee::with("user")->where("agency_id", "=" , $agency->id)->get();

        //return $employees;
        return view('/dashboard/add')->with( compact("agencyInfo" , "user", "employees", "agency" , "invites",'clientInvites') );
        }
        else
        {
         return view('dashboard/settings/agency')->with(compact("client" , "user", "agencyInfo" , "agency"));

        }


        }
        else if($user->role_id == 4)
        {

        return view('dashboard/add')->with(compact('user'));
        }    
    }


 public function offers()
    {
             $user = Auth::user();
          return view('dashboard/offers')->with(compact('user'));

       // return view('dashboard/client')->with(compact('user'));
       
    }


 public function offerSearch()
    {

        $input =  \Request::input();

        $user = Auth::user();

      if($user->role_id == 2)
        {

        $agency = Agency::where('user_id', '=', $user->id)->first();

       //offer where agencu id == this agency id plus search query
  $search = $input['search'];
$variables = [$agency,$search];
          

       $employees = Employee::with("user")->where('agency_id', '=', $variables[0]->id)->where(function ($query) use ($variables)  {
       $query->where("firstName", 'LIKE', "%{$variables[1]}%")->orWhere("lastName", 'LIKE', "%{$variables[1]}%");
    })->get();


    $ids = [];

    foreach ($employees as $key => $employee) {
        array_push($ids, $employee->id);
    }

        $offerss = collect([]);

    $emp_offers = Offer::whereIn("employee_id",$ids)->get();

foreach ($emp_offers as $key => $offer) {
       
           $offerss->push($offer);
        }


 $ids2 = [];

    foreach ($agency->connections as $key => $client) {
        array_push($ids2, $client->client_id);
    }

        $clients = Client::where("name", 'LIKE', "%{$variables[1]}%")->whereIn("id",$ids2)->get();

 $ids3 = [];

    foreach ($clients as $key => $client) {
        array_push($ids3, $client->id);
    }


       $clientOffers = Offer::where('agency_id', '=', $variables[0]->id)->whereIn("client_id",$ids3)->get();

foreach ($clientOffers as $key => $offer) {
       
           $offerss->push($offer);
        }


$offers = $offerss->unique('id');

        return view('/dashboard/offersExt')->with( compact("offers" , "user" ) );



        }
        else if($user->role_id == 3)
        {

       //offer where $user->employee->id == this employee id plus search query

        //return $employees;
        return view('/dashboard/offersExt')->with( compact("user", "offers" ) );
        }  
                else if($user->role_id == 4)
        {

       //offer where $user->client->id == this client id plus search query

        //return $employees;
        return view('/dashboard/offersExt')->with( compact("user", "offers" ) );
        }     
    }



    public function profile()
    {
        $user = Auth::user();
 return view('/dashboard/my-profile')->with(compact("user")); 
    }

    public function employeeSearch()
    {
        $user = Auth::user();
         
$input =  \Request::input();
//where('name','LIKE',"%{$search}%")

 if(isset($input["refresh"]))  
 {
  $search = $input['search'];
$variables = [$user,$search];
          

       $employees = Employee::with("user")->where('agency_id', '=', $variables[0]->agency->id)->where(function ($query) use ($variables)  {
       $query->where("firstName", 'LIKE', "%{$variables[1]}%")->orWhere("lastName", 'LIKE', "%{$variables[1]}%");
    })->where(function ($query) use ($variables){
       $query->where("firstName", 'LIKE', "%{$variables[1]}%")->orWhere("lastName", 'LIKE', "%{$variables[1]}%");
    })->get();
             return view('dashboard.employeeSearch2')->with(compact('employees'));

 }
 else
 {

  if($user->agency!=null)
  {
        $agency = Agency::where('user_id', '=', $user->id)->first();
                $employees = Employee::with("user")->where("agency_id", "=" , $agency->id)->get();
  }



       return view('dashboard.employeeSearch')->with(compact('employees','user'));

 }



    }


}
