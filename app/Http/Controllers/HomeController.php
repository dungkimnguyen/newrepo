<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Carbon\Carbon;
use App\Agency;
use App\AgencyInfo;
use App\User;
use App\UserInvite;
use Mail;
use App\Employee;
use App\Offer;
use Session;


class HomeController extends Controller
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

if(Auth::guest())
{
  $employees = Employee::orderBy('id', 'desc')->take(3)->get();

    return view('index')->with(compact('employees'));
}

else
{
  $user = Auth::user();

 if(isset($user->client))
 {
  $employees = Employee::orderBy('id', 'desc')->take(3)->get();

 }
 else{
  $employees = null;
 }


    return view('index')->with(compact('user',"employees"));
}

 if(isset($user->client))
 {
  $employees = Employee::orderBy('id', 'desc')->take(3)->get();

 }
 else{
  $employees = null;
 }
}

public function index2()
{

if(Auth::guest())
{
  $employees = Employee::orderBy('id', 'desc')->take(3)->get();

    return view('index2')->with(compact('employees'));
}

else
{
  $user = Auth::user();

 if(isset($user->client))
 {
  $employees = Employee::orderBy('id', 'desc')->take(3)->get();

 }
 else{
  $employees = null;
 }


    return view('index2')->with(compact('user',"employees"));
}

}

    public function verifyEmail()
        {
            $input =  \Request::input();

            $user = User::where('email', '=', $input['email'])->first();

            if($user == null)
            {

                $rows[] = array("error" => '1',"msg" => "that email is not in our records");
                return \Response::json($rows);          
                  }

        $rows[] = array("success" => '1',"user" => $user);
            return \Response::json($rows);
        }


        public function findAgency()
        {

        $user = Auth::user();
        $agencies = Agency::orderBy('id')->get();
        return $agencies;
        }

        public function findEmployees()
        {
            $input =  \Request::input();
            if($input != null )
            {


           $employees = Employee::with('agency')->where("title", 'LIKE', "%{$input['title']}%")->where("agency_zip", "=" , $input['zip'])->get();
$title = $input['title'];
$start = $input['start_date'];
$end = $input['end_date'];

 \Request::session()->forget('startDate');
 \Request::session()->forget('endDate');

                \Request::session()->put('startDate', $input['start_date']  );
                \Request::session()->put('endDate', $input['end_date']  );

           $ids = [];

           foreach($employees as $employee)
           {
            array_push($ids, $employee->id);
           }

           if($ids != null && count($ids) >=1)
           {
             $offers = Offer::whereIn("employee_id" , $ids)->where("start_date", ">=" , $input['start_date'])->where("end_date", "<=" , $input['end_date'])->get();
           }
           else
           {
            $offers = null;
           }

            if($offers != null)
            {
                 foreach($offers as $key => $offer)
                   {
                     
                     $employees->forget($key);
                   }
            }

            }
            else
            {
                $employees = null;
            }
            
        $user = Auth::user();

        return view('/city/new-york/index')->with(compact('employees','user','input'));
        }



 public function secondarySearch()
        {



            $input =  \Request::input();
            if($input != null )
            {

      //return $input;

           $employees = Employee::with('agency')->where("title", 'LIKE', "%{$input['title']}%")->where("agency_zip", "=" , $input['zip']);

if(isset($input['experience']))
{
  //$employees->where("experience", ">=" , $input['experience']);
}

if(isset($input['education']))
{
  $employees->where("edu", "=" , $input['education']);

}

if(isset($input['military']))
{
  $employees->where("military", "=" , $input['military']);

}

if(isset($input['skills']))
{
  $employees->where("skills", 'LIKE', "%{$input['skills']}%");

}

if(isset($input['contract']))
{
  $employees->where("employment", 'LIKE', "%{$input['contract']}%");

}

if(isset($input['temp']))
{
  $employees->where("employment", 'LIKE', "%{$input['temp']}%");

}



if(isset($input['temp_perm']))
{
  $employees->where("employment", 'LIKE', "%{$input['temp_perm']}%");

}

if(isset($input['fullTime']))
{
  $employees->where("employment", 'LIKE', "%{$input['fullTime']}%");

}

if(isset($input['partTime']))
{
  $employees->where("employment", 'LIKE', "%{$input['partTime']}%");

}


if(isset($input['vSkills']))
{
  $employees->where("flair", 'LIKE', "%{$input['vSkills']}%");

}


if(isset($input['vRef']))
{
  $employees->where("flair", 'LIKE', "%{$input['vRef']}%");

}

if(isset($input['morning']))
{
  $employees->where("schedule", 'LIKE', "%{$input['morning']}%");
 \Request::session()->forget('morning');

  \Request::session()->put('morning', $input['morning']  );
}

if(isset($input['evening']))
{
  $employees->where("schedule", 'LIKE', "%{$input['evening']}%");

 \Request::session()->forget('evening');
\Request::session()->put('evening', $input['evening']  );

}


if(isset($input['night']))
{
  $employees->where("schedule", 'LIKE', "%{$input['night']}%");
\Request::session()->forget('night');
 
\Request::session()->put('night', $input['night']  );
}


if(isset($input['holidays']))
{
  $employees->where("schedule", 'LIKE', "%{$input['holidays']}%");
\Request::session()->forget('holidays');

\Request::session()->put('holidays', $input['holidays']  );
           
}


if(isset($input['weekends']))
{
  $employees->where("schedule", 'LIKE', "%{$input['weekends']}%");
 \Request::session()->forget('weekends');
                      \Request::session()->put('weekends', $input['weekends']  );

}


if(isset($input['sameDay']))
{
  $employees->where("schedule", 'LIKE', "%{$input['sameDay']}%");
   \Request::session()->forget('sameDay');

                \Request::session()->put('sameDay', $input['sameDay']  );
}


$employees = $employees->get();


           $ids = [];

           foreach($employees as $employee)
           {


            array_push($ids, $employee->id);
           }




           if($ids != null && count($ids) >=1)
           {
             $offers = Offer::whereIn("employee_id" , $ids)->where("start_date", ">=" , $input['start_date'])->where("end_date", "<=" , $input['end_date'])->get();
           }
           else
           {
            $offers = null;
           }

            if($offers != null)
            {
                 foreach($offers as $offer)
                   {
                     $key = array_search($employees, $offer->employee_id);
                     $unset[$key];
                   }
            }
            else
            {
                $employees = null;
            }



 \Request::session()->forget('startDate');
 \Request::session()->forget('endDate');
 


                \Request::session()->put('startDate', $input['start_date']  );
                \Request::session()->put('endDate', $input['end_date']  );




        $user = Auth::user();


        return view('/city/new-york/results')->with(compact('employees','user','input'));
        }
      }

      
 public function offerPrice()
        {

            $input =  \Request::input();


$daysAWeek = 0;
  if(isset($input['sun']))
{   \Request::session()->put('sunday', $input['sun']  ); $daysAWeek+=1;
  }
    if(isset($input['mon']))
{   \Request::session()->put('monday', $input['mon']  );$daysAWeek+=1;
}
if(isset($input['tues']))
{   \Request::session()->put('tuesday', $input['tues']  );$daysAWeek+=1;
}
if(isset($input['wed']))
{   \Request::session()->put('wednesday', $input['wed']  );$daysAWeek+=1;
}
if(isset($input['thur']))
{   \Request::session()->put('thursday', $input['thur']  );$daysAWeek+=1;
}
if(isset($input['fri']))
{   \Request::session()->put('friday', $input['fri']  );$daysAWeek+=1;
}
if(isset($input['sat']))
{   \Request::session()->put('saturday', $input['sat']  );$daysAWeek+=1;
}


\Request::session()->put('daysAWeek', $daysAWeek  );

if(isset($input['paidLunch']))
      \Request::session()->put('paidLunch', $input['paidLunch']  );


if(isset($input['dayStart']))
      \Request::session()->put('dayStart', $input['dayStart']  );



if(isset($input['dayEnd']))
      \Request::session()->put('dayEnd', $input['dayEnd']  );


if(isset($input['lunchStart']))
      \Request::session()->put('lunchStart', $input['lunchStart']  );



if(isset($input['lunchEnd']))
      \Request::session()->put('lunchEnd', $input['lunchEnd']  );



              $rows[] = array("success" => '1',"msg" => $input );
            return \Response::json($rows);
          }

        public function makeOffer($id)
        {
             $employee = Employee::with("user")->where("id", "=" , $id)->first();
             $user = Auth::user();
            $connected=false;

                    $startDate =  \Request::session()->get('startDate');
                    $endDate =  \Request::session()->get('endDate');

                    $daysAWeek =  \Request::session()->get('daysAWeek');


                    $sameDay =  \Request::session()->get('sameDay');
                    $holidays =  \Request::session()->get('holidays');
                    $weekends =  \Request::session()->get('weekends');

                    $mon =  \Request::session()->get('monday');
                    $tues =  \Request::session()->get('tuesday');
                    $wen =  \Request::session()->get('wednesday');

                    $thur =  \Request::session()->get('thursday');
                    $fri =  \Request::session()->get('friday');
                    $sat =  \Request::session()->get('saturday');
                    $sun =  \Request::session()->get('sunday');
                    $dayStart =  \Request::session()->get('dayStart');
                    $dayEnd =  \Request::session()->get('dayEnd');
                    $lunchStart =  \Request::session()->get('lunchStart');
                    $lunchEnd =  \Request::session()->get('lunchEnd');
                    $paidLunch =  \Request::session()->get('paidLunch');


$d1=  strtotime($dayStart);
$d2=  strtotime($dayEnd);

$hoursADay=date("H",$d2-$d1);

//Print the difference in hours : minutes


 $date1 = Carbon::parse($startDate);
    $date2 = Carbon::parse($endDate);

    $diff = $date1->diffInDays($date2);

        if(!isset($user->client))
        {
            return view('properties/west-town-3rd-floor-dorm/index')->with(compact('diff','employee','user','connected','startDate','endDate',"sameDay","weekends","holidays"
              ,"mon","tues","wen","thur","fri","sat","sun","dayEnd","dayStart","lunchEnd","lunchStart","paidLunch","daysAWeek","hoursADay"));

        }

            $connected=false;
            foreach($user->client->connections as $connection)
            {
                if($connection->agency_id == $employee->agency_id)
                {
                    $connected = true;
                }
            }
            return view('properties/west-town-3rd-floor-dorm/index')->with(compact('diff','employee','user','connected','startDate','endDate',"sameDay","weekends","holidays","mon","tues","wen","thur","fri","sat","sun","dayEnd","dayStart","lunchEnd","lunchStart","paidLunch","daysAWeek","hoursADay"));


        }


        public function viewEmployee($id)
        {
             $employee = Employee::with("user")->where("id", "=" , $id)->first();
             $user = Auth::user();
            $connected=false;

                    $startDate =  \Request::session()->get('startDate');
                    $endDate =  \Request::session()->get('endDate');

                    $morning =  \Request::session()->get('morning');
                    $evening =  \Request::session()->get('evening');
                    $night =  \Request::session()->get('night');

                    $sameDay =  \Request::session()->get('sameDay');
                    $holidays =  \Request::session()->get('holidays');
                    $weekends =  \Request::session()->get('weekends');


 if(isset($user->client))
 {
  $employees = Employee::orderBy('id', 'desc')->take(3)->get();

 }
 else{
  $employees = null;
 }


 $date1 = Carbon::parse($startDate);
    $date2 = Carbon::parse($endDate);

    $diff = $date1->diffInDays($date2);
    $weeks = $date1->diffInWeeks($date2);

        if(!isset($user->client))
        {
            return view('/properties/2-bedrooms-condo/index')->with(compact('diff','employee','user','connected','startDate','endDate',"morning","evening","night","sameDay","weekends","holidays","weeks","employees"));

        }

            $connected=false;
            foreach($user->client->connections as $connection)
            {
                if($connection->agency_id == $employee->agency_id)
                {
                    $connected = true;
                }
            }
            return view('/properties/2-bedrooms-condo/index')->with(compact('diff','employee','user','connected','startDate','endDate',"morning","evening","night","sameDay","weekends","holidays","weeks","employees"));


        }



                public function postOffer($id)
        {
             $input =  \Request::input();
                     $user = Auth::user();
                    $employee = Employee::with('agency')->where("id", "=" , $id)->first();

    
                    $startDate =  \Request::session()->get('startDate');
                    $endDate =  \Request::session()->get('endDate');

                    $daysAWeek =  \Request::session()->get('daysAWeek');


                    $sameDay =  \Request::session()->get('sameDay');
                    $holidays =  \Request::session()->get('holidays');
                    $weekends =  \Request::session()->get('weekends');

                    $mon =  \Request::session()->get('monday');
                    $tues =  \Request::session()->get('tuesday');
                    $wen =  \Request::session()->get('wednesday');

                    $thur =  \Request::session()->get('thursday');
                    $fri =  \Request::session()->get('friday');
                    $sat =  \Request::session()->get('saturday');
                    $sun =  \Request::session()->get('sunday');

                    
                    $dayStart =  \Request::session()->get('dayStart');
                    $dayEnd =  \Request::session()->get('dayEnd');
                    $lunchStart =  \Request::session()->get('lunchStart');
                    $lunchEnd =  \Request::session()->get('lunchEnd');
                    $paidLunch =  \Request::session()->get('paidLunch');



 $date1 = Carbon::parse($startDate);
    $date2 = Carbon::parse($endDate);

    $diff = $date1->diffInDays($date2);
    $weeks = $date1->diffInWeeks($date2);


 
                   $offer =  new Offer();  

                   $offer-> client_id = $user->client->id;
                   $offer-> about = $user->client->about;
                   $offer-> schedule = json_encode([$sun,$mon,$tues,$wen,$thur,$fri,$sat]);
                   $offer-> agency_id = $employee->agency->id;
                   $offer-> employee_id = $employee->id;
                   $offer-> details = $input['details'];
                   $offer-> status = "sent";
                   $offer-> wage = $input['wage'];
                   $offer-> supervisor = $input['supervisor'];
                   $offer-> department = $input['department'];
                   $offer-> role = $input['position'];
                $address = array($input['add1'],$input["add2"],$input['city'],$input["state"],$input["zip"]);
                $offer-> address = json_encode($address);
                   $offer-> start_date = $startDate;
                   $offer-> end_date = $endDate;
                    $offer-> dayStart = $dayStart;
                     $offer-> dayEnd = $dayEnd;
                      $offer-> daysAWeek = $daysAWeek;
                   $offer-> extra1 = json_encode([$lunchStart,$lunchEnd,$paidLunch]);
                   $offer-> extra2 = json_encode([$sameDay,$holidays,$weekends]);
                   $offer-> extra3 = json_encode([$diff,$weeks]);
                   $offer-> weeklyTotal = $input['weeklyTotal'];
                   $offer-> termTotal = $input['termTotal'];
                   $offer->save();

              $rows[] = array("success" => '1',"data" => $offer , 'msg' => "Offer Created Successfully" );
            return \Response::json($rows);
        }




          public function updateOffer($id)
        {
             $input =  \Request::input();
                     $user = Auth::user();
             $newShedule = [];
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



                   
                    $offer = Offer::where("id", "=" , $id)->first();

                 
                   $offer->details = $input['details'];
                   $offer->status = "sent";
                   $offer->schedule = json_encode($newShedule);
                   $offer->save();

              $rows[] = array("success" => '1',"data" => $offer );
            return \Response::json($rows);
        }


        public function viewOffer($id)
        {
           
            $offer = Offer::where("id", "=" , $id)->first();
                     $user = Auth::user();

         if(isset($user->client))
        {
            if($offer->client_id != $user->client->id)
            {
                return "you cant view this";
            }
        }
         else if(isset($user->employee))
        {
            if($offer->employee_id != $user->employee->id)
            {
                return "you cant view this";
            }
        }
                 else if(isset($user->agency))
        {
            if($offer->employee->agency_id != $user->agency->id)
            {
                return "you cant view this";
            }
        }
                     return view('viewOffer')->with(compact('offer','user'));

        }


                public function offerAct()
        {
                        $input =  \Request::input();
$id = $input['offerID'];
            $offer = Offer::where("id", "=" , $id)->first();
                     $user = Auth::user();

         if(isset($user->client))
        {
            if($offer->client_id != $user->client->id)
            {
                $msg = "you cant edit this";
                      $rows[] = array("error" => '1',"msg" => $msg );
            return \Response::json($rows);
            }
        }
         else if(isset($user->employee))
        {
            if($offer->employee_id != $user->employee->id)
            {
                $msg =  "you cant edit this";

                      $rows[] = array("error" => '1',"msg" => $msg );
            return \Response::json($rows);
            }
        }

        if($input['act'] == "accept")
        {
          $offer->status = "accepted";
          $offer->save();
           $msg = "offer has been accepted";
        }
        else if($input['act'] == "deny")
        {
                    $offer->status = "denied";
              $offer->reason = $input['comment'];
          $offer->save();
           $msg = "offer has been denied";
                     $rows[] = array("success" => '3',"msg" => $msg );
            return \Response::json($rows);
        }
        else if($input['act'] == "delete")
        {
                    $offer->status = "deleted";
          $offer->save();
           $msg = "offer has been deleted";
        }
                else if($input['act'] == "warn")
        {
          if($input['comment'] == null)
            {
               $msg = "Please add a comment for the employee to see";

            }
            else
            {
              $msg = "offer has been Warned message sent to employee";
              $offer->comments = $input['comment'];
              $offer->save();
            }
        }
        else if($input['act'] == "showModal")
        {
              $rows[] = array("success" => '2',"id" => $id );
            return \Response::json($rows);
        }

              $rows[] = array("success" => '1',"msg" => $msg );
            return \Response::json($rows);
        }

}
