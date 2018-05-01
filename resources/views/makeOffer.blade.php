@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel loginBG">
                <h4 class="panel-heading tblack"> MakeOffer</h4>
                <div class="panel-body tblack">
                <div class="col-lg-6">
                	
                  
                   <h1>@php echo substr($employee->user->firstName,0,1) @endphp .  {{ $employee->user->lastName }}</h1>
                   <br>
                 

         
     
                            <div class="col-lg-12">
                                <b>Professional Title:</b>
                               
                                    {{$employee->title}}
                            </div>

                            <div class="col-lg-12">
                                <b>Email:</b>
                                    {{$employee->email}}
                            </div>

                            <div class="col-lg-12">
                                <label  for="phone">Phone:</label>
                                     {{$employee->phone}}
                            </div>


                            <div class="col-lg-12">
                                <label  for="phone">Miles willing to travel:</label>
                                  {{$employee->travel_range}}
                            </div>




                            <?php $address = json_decode($employee->address)?>
                 
                            <div class="col-lg-12">
                                <b>Country:</b>
                                    {{$address[2] }},{{$address[3] }},{{$address[4] }}
                            </div>
           

                            <div class="col-lg-12">
                               <b>About:</b>
                                   {{$employee->about}}
                            </div>

                            <div class="col-lg-12">
                               <b>Background Experience:</b>
                                 {{$employee->bg}}
                            </div>

                            <div class="col-lg-12">
                               <b>Skills:</b>
                                    {{$employee->skills}}
                            </div>

</div>
@if(!Auth::guest())
@if($connected == true)
<div class="col-lg-6">
 <form id="offerForm" class="form-horizontal settingsForm" data-type="employee"  method="post">
                {{ csrf_field() }}
         
 <h4>Schedule</h4>
        <div class="col-md-6">

  <div class=""><input type="checkbox" id="morning" name="morning" value="morning"  @if(isset($morning)) checked="true" @endif><label for="washer">Day: 8am - 5pm</label></div> 
  <div class=""><input type="checkbox" id="evening" name="evening" value="evening"  @if(isset($evening)) checked="true" @endif><label for="washer">Mid: 5pm - 12pm</label></div>
  <div class=""><input type="checkbox" id="night" name="night" value="night"  @if(isset($night)) checked="true" @endif><label for="washer">Night: 12am - 8am</label></div>

</div>

        <div class="col-md-6">

  <div class=""><input type="checkbox" id="holidays" name="holidays" value="holidays"  @if(isset($holidays)) checked="true" @endif><label for="washer">Holidays</label></div>
  <div class=""><input type="checkbox" id="weekends" name="weekends" value="weekends"  @if(isset($weekends)) checked="true" @endif><label for="washer">Weekends</label></div>
  <div class=""><input type="checkbox" id="sameDay" name="sameDay" value="sameDay"  @if(isset($sameDay)) checked="true" @endif><label for="washer">Same-Day Start</label></div>

</div>
                                    <div class="form-group">
                                <b>Start Date:</b>
                                <div >
                                      <input type="date" name="start_date" value="{{$startDate}}">

                                </div>
                            </div>      


                           <div class="form-group">
                                <b>End Date:</b>
                                <div >
                                      <input type="date" name="end_date" value="{{$endDate}}">

                                </div>
                            </div>      

                           <div class="form-group">
                                <b>Job Details:</b>
                                <div >
                                    <textarea class="reqF autoExpand" required="required" id="details" name="details" data-limit='600' placeholder="About your company..."></textarea>
                                </div>
                            </div>      <!--

        'status', 'user_id' , 'employee_id','schedule','duration','details','about','status','comments','agency_id','wage'

      -->

                <div class="ctr">
                   <button id="agencySubmit" type="submit" class="btn btn-sm btn-info">Create</button>
                </div>
            </form>

 </div>

 @else
 Connect to agency
  @endif
@endif
               </div>
            </div>
    </div>
</div>
@endsection
