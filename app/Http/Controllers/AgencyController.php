<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Agency;
use App\AgencyInfo;
use Auth;
use App\User;
use App\UserInvite;
use Mail;
use App\Employee;
use App\Connection;
use App\Client;


use View;
use Request;

class AgencyController extends Controller
{




  
        public function loadAgency($slug)
        {
                  $user = Auth::user();

            $input =  \Request::input();
           // if($input['openSchedule'] == "true" )
           // {
                $agency = AgencyInfo::where('slug' , '=' , $slug)->with('agency')->first();
           // }
               // return $agency;
        return view('agencyLoad')->with(compact('agency','user'));
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
      
 }
 else
 {
 }


       return view('searchEmployees')->with(compact('employees','user'));

    }

    public function employeeEdit($id)
    {
        $user = Auth::user();

       $employee = Employee::where("id", '=', $id)->first();

       return view('employeeEdit')->with(compact('employee','user'));

    }


      public function employeeUpdate()
    {
                $input =  Request::input();
return $input;
       $employee = Employee::where("id", '=', $input['id'])->first();

       $employee->about = $input['about'];
       $employee->bg = $input['bg'];
       $employee->phone = $input['phone'];
       $employee->email = $input['email'];
       $employee->travel_range = $input['range'];

       $employee->exp_years = $input['years'];


  $exp = array($input['emp_1'],$input["emp_1_pos"],$input['emp_2'],$input["emp_2_pos"],$input["emp_3"],$input["emp_3_pos"]);

       $employee->experience = json_encode($exp);

       $employee->rates = $input['rate'];
       $employee->agency_fee = $input['fee'];
       $employee->tax = $input['tax'];
       $employee->weekend_rate = $input['weekend_rate'];
       $employee->skills = $input['skills'];
              $employee->title = $input['tags'];


  $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);

       $employee->address = json_encode($address);



  $flairs = [];
  $newShedule = [];


if(isset($input['vSkills']))
{
 array_push($flairs, $input['vSkills']);

}
else
{
 array_push($flairs, null);
} 



if(isset($input['vRef']))
{
 array_push($flairs, $input['vRef']);

}
else
{
 array_push($flairs, null);
} 



    

if(isset($input['morning']))
{
 array_push($newShedule, $input['morning']);

}
else
{
 array_push($newShedule, null);
} 

    

if(isset($input["evening"]))
{
 array_push($newShedule, $input["evening"]);

}
else
{
 array_push($newShedule, null);
} 


if(isset($input["night"]))
{
 array_push($newShedule, $input["night"]);

}
else
{
 array_push($newShedule, null);
} 
    
if(isset($input['holidays']))
{
 array_push($newShedule, $input['holidays']);

}
else
{
 array_push($newShedule, null);
} 
    
if(isset($input["weekends"]))
{
 array_push($newShedule, $input["weekends"]);

}
else
{
 array_push($newShedule, null);
} 

    


if(isset($input["sameDay"]))
{
 array_push($newShedule, $input["sameDay"]);

}
else
{
 array_push($newShedule, null);
} 

       $employee->flair = json_encode($flairs);

$employee->schedule = json_encode($newShedule);







       $employee->save();

                        $rows[] = array("success" => '1',"data" => $input , "formID" => 0);

        return \Response::json($rows);
 
    }





                public function editConnection($id)
        {
            $input =  \Request::input();
            

                $connection = Connection::where("id", "=" , $id)->first();
                $connection->fee = $input['fee'];
                $connection->save();

                  $rows[] = array("success" => '1',"connection" => $connection);
            return \Response::json($rows);
            
        }



}