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
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

use View;
use Request;

class EmployeeUpdateController extends Controller
{

      public function employeeUpdate()
    {
                $input =  Request::input();
                //return $input;
       $employee = Employee::where("id", '=', $input['id'])->first();
       if($input['formID'] == 0)
       {
          $industries = [];



          if(isset($input['Industrial']))
          {
            array_push($industries, $input['Industrial']);
          }

          if(isset($input['Clerical']))
          {
            array_push($industries, $input['Clerical']);
          }

          if(isset($input['Professional']))
          {
            array_push($industries, $input['Professional']);
          }

          if(isset($input['Engineering']))
          {
            array_push($industries, $input['Engineering']);
          }

          if(isset($input['Health']))
          {
            array_push($industries, $input['Health']);
          }

                $messages = [
                    'tags.required' => 'At Least one tag is required',
                    'comments.required' => 'Comments on employee is required',
                    'phone.required' => 'Phone number is required',
                    'email.required' => 'Email is required',
                ];
                $validator = Validator::make($input, [
                    'tags' => ['required'],
                    'comments' => ['required'],
                    'phone' => ['required'],
                    'email' => ['required'],
                ],  $messages);
                if ($validator->fails()){
                    return response()->json(['errors' => $validator->errors()], 400);
                }

          $employee->industries =  json_encode($industries);
          $employee->title = $input['tags'];
          $employee->comments = $input['comments'];

          $employee->phone = $input['phone'];
          $employee->email = $input['email'];
       }
       if($input['formID'] == 1)
       {
                        $messages = [
                    'rate.required' => 'Hourly Rate is required',
                    'fee.required' => 'Agency Fee is required',
                    'tax.required' => 'State Tax is required',
                    'weekend_rate.required' => 'Weekend Rate is required',
                ];
                $validator = Validator::make($input, [
                    'rate' => ['required'],
                    'fee' => ['required'],
                    'tax' => ['required'],
                    'weekend_rate' => ['required'],
                ],  $messages);
                if ($validator->fails()){
                    return response()->json(['errors' => $validator->errors()], 400);
                }
       $employee->rates = $input['rate'];
       $employee->agency_fee = $input['fee'];
       $employee->tax = $input['tax'];
       $employee->weekend_rate = $input['weekend_rate'];
       }
      if($input['formID'] == 2)
       {

                        $messages = [
                    'add1.required' => 'Address Line 1 is required',
                    'country.required' => 'Country is required',
                    'state.required' => 'City/State is required',
                    'zip.required' => 'Zip Code is required',
                    'zip.regex' => 'ZipCode must be a valid Zip Code (12345, 12345-6789)',
                    'range.required' => "Range willing to travel is required"
                ];
                $validator = Validator::make($input, [
                    'add1' => ['required'],
                    'country' => ['required'],
                    'state' => ['required'],
                    'zip' => ['required','regex:/^\d{5}(?:[-\s]\d{4})?$/'],
                    'range' => ['required']
                ],  $messages);
                if ($validator->fails()){
                    return response()->json(['errors' => $validator->errors()], 400);
                }

          $address = array($input['add1'],$input["add2"],$input['country'],$input["state"],$input["zip"]);
       $employee->travel_range = $input['range'];

         $employee->address = json_encode($address);
       }
     if($input['formID'] == 3)
       {


                        $messages = [
                    'years.required' => 'Total Workplace Experience is required',
                    'bg.required' => 'Bakground Experience is required',
                    'skills.required' => 'At least one Skill is required',
                ];
                $validator = Validator::make($input, [
                    'years' => ['required'],
                    'bg' => ['required'],
                    'skills' => ['required'],
                ],  $messages);
                if ($validator->fails()){
                    return response()->json(['errors' => $validator->errors()], 400);
                }
  $flairs = [];
  $newShedule = [];
$attr = [];
  
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


for($x=1;$x<=10;$x++)
{
  if(isset($input['A'.$x]))
  {
     array_push($attr, $input['A'.$x]);
  }
}

for($x=1;$x<=20;$x++)
{
  if(isset($input['B'.$x]))
  {
     array_push($attr, $input['B'.$x]);
  }
}

for($x=1;$x<=20;$x++)
{
  if(isset($input['C'.$x]))
  {
     array_push($attr, $input['C'.$x]);
  }
}

for($x=1;$x<=20;$x++)
{
  if(isset($input['D'.$x]))
  {
     array_push($attr, $input['D'.$x]);
  }
}

for($x=1;$x<=20;$x++)
{
  if(isset($input['E'.$x]))
  {
     array_push($attr, $input['E'.$x]);
  }
}

for($x=1;$x<=20;$x++)
{
  if(isset($input['F'.$x]))
  {
     array_push($attr, $input['F'.$x]);
  }
}

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

       $exp = array($input['emp_1'],$input["emp_1_pos"],$input['emp_2'],$input["emp_2_pos"],$input["emp_3"],$input["emp_3_pos"]);
     $employee->bg = $input['bg'];

       $employee->flair = json_encode($flairs);

$employee->schedule = json_encode($newShedule);
$employee->attributes =  json_encode($attr);
 

       $employee->exp_years = $input['years'];

       $employee->experience = json_encode($exp);


       $employee->skills = $input['skills'];
       }
 
       //eployment history
 



       $employee->save();

                        $rows[] = array("success" => '1',"data" => $input);

        return \Response::json($rows);
 
    }



}