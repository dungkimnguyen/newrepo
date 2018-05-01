@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
       
                <div class="panel-heading"><h1>{{ $employee->user->firstName }} , {{ $employee->user->lastName }}</h1></div>

        <div class="dashboard-header">
            
<div class=" user_dashboard_panel_guide">
    <a href=""  id="ball_0" class="active ">Description </a>
    <a href="#" id="ball_1" class="disabled">Rate </a>
    <a href="#" id="ball_2" class="disabled">Location </a>
    <a href="#" id="ball_3" class="disabled">WorkProfile </a>
    <a href="#" id="ball_4" class="disabled">Flair </a>
</div>
        </div>



    <div class="row">
   
        <div class="col-md-12 ">
            <a href="/dashboard">Back</a>


                             <div id="emp_0"> 

            <form id="employeeForm0" class="form-horizontal employeeEditForm" data-type="employee"  method="POST">
            <input type="hidden" name="formID" value="0">
                            {{ csrf_field() }}



                             <input type="hidden" name="id" value="{{$employee->id}}">

                            <div class="form-group" id="Titles">
                                <label class="control-label col-sm-2 small" for="companyName">Tags:</label>
                                <div class="col-lg-8">
<input class="form-control input-md reqF reset_4 addr_f" type="tags" placeholder="add..." name="tags" id="tags" value="{{$employee->title}}" />
                                </div>
                            </div>
                            @php $industries = json_decode($employee->industries) @endphp


                            <div class="form-group" id="Titles">
                                <label class="control-label col-sm-2 small" for="companyName">Industries:</label>
                                <div class="col-lg-8">

                                    

  <div class=""><input type="checkbox" id="Industrial" name="Industrial" value="Industrial" @if(in_array("Industrial",$industries)) checked="true" @endif onchange="change_checkbox(this)"><label for="">Industrial </label></div>
  <div class=""><input type="checkbox" id="Clerical" name="Clerical" value="Clerical" @if(in_array("Clerical",$industries)) checked="true" @endif onchange="change_checkbox(this)"><label for="">Clerical</label></div>
  <div class=""><input type="checkbox" id="Professional" name="Professional" value="Professional" @if(in_array("Professional",$industries)) checked="true" @endif onchange="change_checkbox(this)"><label for="">Professional</label></div>
  <div class=""><input type="checkbox" id="Engineering" name="Engineering" value="Engineering" @if(in_array("Engineering",$industries)) checked="true" @endif onchange="change_checkbox(this)"><label for="">Engineering</label></div>
  <div class=""><input type="checkbox" id="Health" name="Health" value="Health" @if(in_array("Health",$industries)) checked="true" @endif onchange="change_checkbox(this)"><label for="">Health</label></div>

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="email">Email:</label>
                                <div class="col-lg-8">
                                     <input id="email" type="email" class="form-control" name="email" value="{{$employee->email}}" required>
                                </div>
                            </div>

                                                       <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Phone:</label>
                                <div class="col-lg-8">
                                      <input type="tel" class="form-control input-md reqF reset_5 phone_f" id="phone" placeholder="Phone Number" name="phone"   value="{{$employee->phone}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Comments:</label>
                                <div class="col-lg-8 txt3">

                                <textarea rows="4" id="comments" name="comments" class="advanced_select  form-control" placeholder="Comments on Employee..." style="margin: 0px -0.5px 15px 0px; height: 103px; width: 100%;resize:none">{{$employee->comments}}</textarea>
                                    
                                </div>
                            </div>
     <button id="empBtn0" type="submit" style="display: none;"  class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn " >Update</button>

</form>
</div>

                             <div id="emp_1" style="display: none"> 

 
            <form id="employeeForm1" class="form-horizontal employeeEditForm" data-type="employee"  method="POST">
            <input type="hidden" name="formID" value="1">
                            {{ csrf_field() }}



                             <input type="hidden" name="id" value="{{$employee->id}}">



                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Per hour Rate: $</label>
                                <div class="col-lg-8">
                                  <input class="form-control reqF" type="text" name="rate" id="rate" required='required'  pattern="^\d*(\.\d{2}$)?" placeholder=' Rate per Hour No commas or dollar signs. (Ex 10.00)' value="{{$employee->rates}}" />

                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Agency Fee $:</label>
                                <div class="col-lg-8">
                                  <input class="form-control reqF" type="text" name="fee" id="fee" required='required'  pattern="^\d*(\.\d{2}$)?" placeholder='Rate per Hour No commas or dollar signs. (Ex 10.00)' value="{{$employee->agency_fee}}" />

                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">State Tax Percentage: $</label>
                                <div class="col-lg-8">
                                  <input class="form-control reqF" type="text" name="tax" id="tax" required='required'  pattern="^\d*(\.\d{2}$)?" placeholder='Rate per Hour No commas or dollar signs. (Ex 10.00)' value="{{$employee->tax}}" />

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Weekend Rate: $</label>
                                <div class="col-lg-8">
                                  <input class="form-control reqF" type="text" name="weekend_rate" id="weekend_rate" required='required'  pattern="^\d*(\.\d{2}$)?" placeholder='Rate per Hour No commas or dollar signs. (Ex 10.00)' value="{{$employee->weekend_rate}}" />

                                </div>
                            </div>
     <button id="empBtn1" type="submit" style="display: none;"  class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn " >Update</button>
                            </form>
</div>

                             <div id="emp_2" style="display: none"> 


            <form id="employeeForm2" class="form-horizontal employeeEditForm" data-type="employee"  method="POST">
            <input type="hidden" name="formID" value="2">
                            {{ csrf_field() }}



                             <input type="hidden" name="id" value="{{$employee->id}}">

                            <?php $address = json_decode($employee->address)?>
                        <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add1">Address Line 1:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4 addr_f" id="add1" placeholder="Address line 1" name="add1"   value="{{$address[0] }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add2">Address Line 2:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reset_4" id="add2" placeholder="Address Line 2" name="add2" value="{{$address[1] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="city">City:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="country" placeholder="Country" name="country"   value="{{$address[2] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="state">State:</label>
                                <div class="col-lg-8">
<select name="state" id="{{$address[3]}}">
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District Of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="zip">Zip Code:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="zip" placeholder="Zip Code" name="zip"   value="{{$address[4] }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Miles willing to travel:</label>
                                <div class="col-lg-8">
                                  <input class="form-control"   placeholder="Miles willing to travel" type="number" name="range" id="range" value="{{$employee->travel_range}}" min="1">
                                </div>
                            </div>

     <button id="empBtn2" type="submit" style="display: none;"  class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn " >Update</button>

</form>

</div>



                             <div id="emp_3" style="display: none"> 


            <form id="employeeForm3" class="form-horizontal employeeEditForm" data-type="employee"  method="POST">
            <input type="hidden" name="formID" value="3">
                            {{ csrf_field() }}



                             <input type="hidden" name="id" value="{{$employee->id}}">

@php

if(isset($employee->experience))
{
$exp = json_decode($employee->experience);
}
@endphp


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Total Workplace Experience:</label>
                                <div class="col-lg-8">
                                  <input class="form-control"   placeholder="Workplace Experience" type="number" name="years" id="years" value="{{$employee->exp_years}}" min="1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Background Experience:</label>
                                <div class="col-lg-8 txt3">
                                    <textarea class="reqF autoExpand"  id="bg" name="bg" data-limit='600' placeholder="About your Experience...">{{$employee->bg}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Most recent Employer:</label>
                                <div class="col-lg-8 txt3">

                                    <input type="text" class="form-control input-md reset_4" id="emp_1" placeholder="Employer Name" name="emp_1" 
                                    @if(isset($exp) && $exp[0] != "null") value="{{$exp[0]}}"  @endif >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Position:</label>
                                <div class="col-lg-8 txt3">

                                    <input type="text" class="form-control input-md reset_4" id="emp_1_pos" placeholder="Position Held" name="emp_1_pos" 
                                    @if(isset($exp) && $exp[1] != null) value="{{$exp[1]}}"  @endif >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Second most recent Employer:</label>
                                <div class="col-lg-8 txt3">

                                    <input type="text" class="form-control input-md reset_4" id="emp_2" placeholder="Employer Name" name="emp_2" 
                                    @if(isset($exp) && $exp[2] != null) value="{{$exp[2]}}"  @endif >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Position:</label>
                                <div class="col-lg-8 txt3">

                                    <input type="text" class="form-control input-md reset_4" id="emp_2_pos" placeholder="Position Held" name="emp_2_pos" 
                                    @if(isset($exp) && $exp[3] != null) value="{{$exp[3]}}"  @endif >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Third most recent Employer:</label>
                                <div class="col-lg-8 txt3">

                                    <input type="text" class="form-control input-md reset_4" id="emp_3" placeholder="Employer Name" name="emp_3" 
                                    @if(isset($exp) && $exp[4] != null) value="{{$exp[4]}}"  @endif >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">Position:</label>
                                <div class="col-lg-8 txt3">

                                    <input type="text" class="form-control input-md reset_4" id="emp_3_pos" placeholder="Position Held" name="emp_3_pos" 
                                    @if(isset($exp) && $exp[5] != null) value="{{$exp[5]}}"  @endif >
                                </div>
                            </div>

                            <div class="form-group" id="Skills">
                                <label class="control-label col-sm-2 small" for="about">Skills:</label>
                                <div class="col-lg-8">
                                  <input class="form-control input-md reqF reset_4 " type="tags" placeholder="add skills..." name="skills" id="skills" value="{{$employee->skills}}" />
                                </div>
                            </div>

        <div class="col-md-12">


@php $schedule = json_decode($employee->schedule) @endphp
<h4>Schedule</h4>
        <div class="col-md-6">

  <div class=""><input type="checkbox" id="morning" name="morning" value="morning" @if(in_array("morning",$schedule)) checked="true" @endif  ><label for="washer">Day: 8am - 5pm</label></div> 
  <div class=""><input type="checkbox" id="evening" name="evening" value="evening" @if(in_array("evening",$schedule)) checked="true" @endif ><label for="washer">Mid: 5pm - 12pm</label></div>
  <div class=""><input type="checkbox" id="night" name="night" value="night" @if(in_array("night",$schedule)) checked="true" @endif ><label for="washer">Night: 12am - 8am</label></div>

</div>

        <div class="col-md-6">

  <div class=""><input type="checkbox" id="holidays" name="holidays" value="holidays" @if(in_array("holidays",$schedule)) checked="true" @endif><label for="washer">Holidays</label></div>
  <div class=""><input type="checkbox" id="weekends" name="weekends" value="weekends" @if(in_array("weekends",$schedule)) checked="true" @endif ><label for="washer">Weekends</label></div>
  <div class=""><input type="checkbox" id="sameDay" name="sameDay" value="sameDay" @if(in_array("sameDay",$schedule)) checked="true" @endif ><label for="washer">Same-Day Start</label></div>

</div>
</div>
        <div class="col-md-12">
<h4>Attributes</h4>


@php
$attributes = [];
 if($employee->attributes != null)
{
$attributes = json_decode($employee->attributes);     
}

  @endphp





<div class="col-md-4 attr"><h4>General</h4>

  <div class=""><input type="checkbox" id="A1" name="A1" value="A1" @if(in_array("A1",$attributes)) checked="true" @endif ><label for="">Communication Skills</label></div>


<div class=""><input type="checkbox" id="A2" name="A2" value="A2" @if(in_array("A2",$attributes)) checked="true" @endif><label for="">General Computer Usage</label></div>


<div class=""><input type="checkbox" id="A3" name="A3" value="A3" @if(in_array("A3",$attributes)) checked="true" @endif><label for="">Effective Learner</label></div>


<div class=""><input type="checkbox" id="A4" name="A4" value="A4" @if(in_array("A4",$attributes)) checked="true" @endif><label for="">Problem-Solving</label></div>


<div class=""><input type="checkbox" id="A5" name="A5" value="A5" @if(in_array("A5",$attributes)) checked="true" @endif><label for="">Teamwork</label></div>

<div class=""><input type="checkbox" id="A6" name="A6" value="A6" @if(in_array("A6",$attributes)) checked="true" @endif><label for="">Detail Oriented</label></div>

<div class=""><input type="checkbox" id="A7" name="A7" value="A7" @if(in_array("A7",$attributes)) checked="true" @endif><label for="">Listening</label></div>


<div class=""><input type="checkbox" id="A8" name="A8" value="A8" @if(in_array("A8",$attributes)) checked="true" @endif><label for="">Multitasking</label></div>


<div class=""><input type="checkbox" id="A9" name="A9" value="A9" @if(in_array("A9",$attributes)) checked="true" @endif><label for="">Maintaining an organized work area</label></div>


<div class=""><input type="checkbox" id="A10" name="A10" value="A10" @if(in_array("A10",$attributes)) checked="true" @endif><label for="">Punctuality</label></div>

</div>

                            

<div class="col-md-4 attr" id="Industrial_Div" @if(!in_array("Industrial", $industries)) style="display: none" @endif><h4>Industrial</h4>

<div class=""><input type="checkbox" id="B1" name="B1" value="B1" @if(in_array("B1",$attributes)) checked="true" @endif><label for="">Fabrication</label></div>


<div class=""><input type="checkbox" id="B2" name="B2" value="B2" @if(in_array("B2",$attributes)) checked="true" @endif><label for="">Modeling</label></div>


<div class=""><input type="checkbox" id="B3" name="B3" value="B3" @if(in_array("B3",$attributes)) checked="true" @endif><label for="">Inspection</label></div>


<div class=""><input type="checkbox" id="B4" name="B4" value="B4" @if(in_array("B4",$attributes)) checked="true" @endif><label for="">Quality Assurance</label></div>


<div class=""><input type="checkbox" id="B5" name="B5" value="B5" @if(in_array("B5",$attributes)) checked="true" @endif><label for="">Testing</label></div>


<div class=""><input type="checkbox" id="B6" name="B6" value="B6" @if(in_array("B6",$attributes)) checked="true" @endif><label for="">Dissembling Tools and Machinery</label></div>


<div class=""><input type="checkbox" id="B7" name="B7" value="B7" @if(in_array("B7",$attributes)) checked="true" @endif><label for="">Operating Power Tools</label></div>


<div class=""><input type="checkbox" id="B8" name="B8" value="B8" @if(in_array("B8",$attributes)) checked="true" @endif><label for="">Performing Routine Maintenance on Machines</label></div>


<div class=""><input type="checkbox" id="B9" name="B9" value="B9" @if(in_array("B9",$attributes)) checked="true" @endif><label for="">Reading and Comprehending Technical Manuals</label></div>


<div class=""><input type="checkbox" id="B10" name="B10" value="B10" @if(in_array("B10",$attributes)) checked="true" @endif><label for="">Physical Stamina</label></div>


<div class=""><input type="checkbox" id="B11" name="B11" value="B11" @if(in_array("B11",$attributes)) checked="true" @endif><label for="">Forklift Operator</label></div>


<div class=""><input type="checkbox" id="B12" name="B12" value="B12" @if(in_array("B12",$attributes)) checked="true" @endif><label for="">Machine Operator</label></div>



<div class=""><input type="checkbox" id="B13" name="B13" value="B13" @if(in_array("B13",$attributes)) checked="true" @endif><label for="">Prepare Designs and Estimates </label></div>


<div class=""><input type="checkbox" id="B14" name="B14" value="B14" @if(in_array("B14",$attributes)) checked="true" @endif><label for="">Troubleshooting</label></div>


<div class=""><input type="checkbox" id="B15" name="B15" value="B15" @if(in_array("B15",$attributes)) checked="true" @endif><label for="">Warehouse</label></div>


<div class=""><input type="checkbox" id="B16" name="B16" value="B16" @if(in_array("B16",$attributes)) checked="true" @endif><label for="">Commercial Drivers License</label></div>


<div class=""><input type="checkbox" id="B17" name="B17" value="B17" @if(in_array("B17",$attributes)) checked="true" @endif><label for="">Assembly</label></div>


<div class=""><input type="checkbox" id="B18" name="B18" value="B18" @if(in_array("B18",$attributes)) checked="true" @endif><label for="">Pick and Pack</label></div>


<div class=""><input type="checkbox" id="B19" name="B19" value="B19" @if(in_array("B19",$attributes)) checked="true" @endif><label for="">Plant Manager</label></div>


<div class=""><input type="checkbox" id="B20" name="B20" value="B20" @if(in_array("B20",$attributes)) checked="true" @endif><label for="">Logistics</label></div>

</div>



                            

<div class="col-md-4 attr" id="Clerical_Div" @if(!in_array("Clerical", $industries)) style="display: none" @endif><h4>Clerical</h4>


<div class=""><input type="checkbox" id="C1" name="C1" value="C1" @if(in_array("C1",$attributes)) checked="true" @endif><label for="">Answering Telephones</label></div>


<div class=""><input type="checkbox" id="C2" name="C2" value="C2" @if(in_array("C2",$attributes)) checked="true" @endif><label for="">Inbound and Outbound Phone Call</label></div>


<div class=""><input type="checkbox" id="C3" name="C3" value="C3" @if(in_array("C3",$attributes)) checked="true" @endif><label for="">Bookkeeping</label></div>


<div class=""><input type="checkbox" id="C4" name="C4" value="C4" @if(in_array("C4",$attributes)) checked="true" @endif><label for="">Computer</label></div>


<div class=""><input type="checkbox" id="C5" name="C5" value="C5" @if(in_array("C5",$attributes)) checked="true" @endif><label for="">Filing</label></div>


<div class=""><input type="checkbox" id="C6" name="C6" value="C6" @if(in_array("C6",$attributes)) checked="true" @endif><label for="">Inventory</label></div>


<div class=""><input type="checkbox" id="C7" name="C7" value="C7" @if(in_array("C7",$attributes)) checked="true" @endif><label for="">Making Appointments</label></div>


<div class=""><input type="checkbox" id="C8" name="C8" value="C8" @if(in_array("C8",$attributes)) checked="true" @endif><label for="">Call Center</label></div>



<div class=""><input type="checkbox" id="C9" name="C9" value="C9" @if(in_array("C9",$attributes)) checked="true" @endif><label for="">Effective Communication</label></div>


<div class=""><input type="checkbox" id="C10" name="C10" value="C10" @if(in_array("C10",$attributes)) checked="true" @endif><label for="">Receptionist</label></div>


<div class=""><input type="checkbox" id="C11" name="C11" value="C11" @if(in_array("C11",$attributes)) checked="true" @endif><label for="">Time & Billing</label></div>


<div class=""><input type="checkbox" id="C12" name="C12" value="C12" @if(in_array("C12",$attributes)) checked="true" @endif><label for="">Typing</label></div>


<div class=""><input type="checkbox" id="C13" name="C13" value="C13" @if(in_array("C13",$attributes)) checked="true" @endif><label for="">QuickBooks</label></div>


<div class=""><input type="checkbox" id="C14" name="C14" value="C14" @if(in_array("C14",$attributes)) checked="true" @endif><label for="">Social Media</label></div>


<div class=""><input type="checkbox" id="C15" name="C15" value="C15" @if(in_array("C15",$attributes)) checked="true" @endif><label for="">Blogging</label></div>

<div class=""><input type="checkbox" id="C16" name="C16" value="C16" @if(in_array("C16",$attributes)) checked="true" @endif><label for="">Customer Service</label></div>

<div class=""><input type="checkbox" id="C17" name="C17" value="C17" @if(in_array("C17",$attributes)) checked="true" @endif><label for="">Microsoft Excel</label></div>


<div class=""><input type="checkbox" id="C18" name="C18" value="C18" @if(in_array("C18",$attributes)) checked="true" @endif><label for="">Microsoft Outlook</label></div>


<div class=""><input type="checkbox" id="C19" name="C19" value="C19" @if(in_array("C19",$attributes)) checked="true" @endif><label for="">Microsoft Publisher</label></div>


<div class=""><input type="checkbox" id="C20" name="C20" value="C20" @if(in_array("C20",$attributes)) checked="true" @endif><label for="">Microsoft Word</label></div>
</div>


                            

<div class="col-md-4 attr" id="Professional_Div" @if(!in_array("Professional", $industries)) style="display: none" @endif><h4>Professional</h4>

<div class=""><input type="checkbox" id="D1" name="D1" value="D1" @if(in_array("D1",$attributes)) checked="true" @endif><label for="">Verbal Communication</label></div>


<div class=""><input type="checkbox" id="D2" name="D2" value="D2" @if(in_array("D2",$attributes)) checked="true" @endif><label for="">Administrative</label></div>


<div class=""><input type="checkbox" id="D3" name="D3" value="D3" @if(in_array("D3",$attributes)) checked="true" @endif><label for="">Team Manager</label></div>


<div class=""><input type="checkbox" id="D4" name="D4" value="D4" @if(in_array("D4",$attributes)) checked="true" @endif><label for="">Budget Management</label></div>


<div class=""><input type="checkbox" id="D5" name="D5" value="D5" @if(in_array("D5",$attributes)) checked="true" @endif><label for="">Business Management</label></div>


<div class=""><input type="checkbox" id="D6" name="D6" value="D6" @if(in_array("D6",$attributes)) checked="true" @endif><label for="">Collaboration</label></div>


<div class=""><input type="checkbox" id="D7" name="D7" value="D7" @if(in_array("D7",$attributes)) checked="true" @endif><label for="">Communication</label></div>


<div class=""><input type="checkbox" id="D8" name="D8" value="D8" @if(in_array("D8",$attributes)) checked="true" @endif><label for="">Sales</label></div>


<div class=""><input type="checkbox" id="D9" name="D9" value="D9" @if(in_array("D9",$attributes)) checked="true" @endif><label for="">Decision Making</label></div>


<div class=""><input type="checkbox" id="D10" name="D10" value="D10" @if(in_array("D10",$attributes)) checked="true" @endif><label for="">Project Management</label></div>


<div class=""><input type="checkbox" id="D11" name="D11" value="D11" @if(in_array("D11",$attributes)) checked="true" @endif><label for="">Strategic Planning</label></div>


<div class=""><input type="checkbox" id="D12" name="D12" value="D12" @if(in_array("D12",$attributes)) checked="true" @endif><label for="">Financial Management</label></div>


<div class=""><input type="checkbox" id="D13" name="D13" value="D13" @if(in_array("D13",$attributes)) checked="true" @endif><label for="">Hiring/Staffing</label></div>


<div class=""><input type="checkbox" id="D14" name="D14" value="D14" @if(in_array("D14",$attributes)) checked="true" @endif><label for="">Interpersonal Skills</label></div>


<div class=""><input type="checkbox" id="D15" name="D15" value="D15" @if(in_array("D15",$attributes)) checked="true" @endif><label for="">Leadership</label></div>


<div class=""><input type="checkbox" id="D16" name="D16" value="D16" @if(in_array("D16",$attributes)) checked="true" @endif><label for="">Legal</label></div>


<div class=""><input type="checkbox" id="D17" name="D17" value="D17" @if(in_array("D17",$attributes)) checked="true" @endif><label for="">Negotiating</label></div>


<div class=""><input type="checkbox" id="D18" name="D18" value="D18" @if(in_array("D18",$attributes)) checked="true" @endif><label for="">Networking</label></div>


<div class=""><input type="checkbox" id="D19" name="D19" value="D19" @if(in_array("D19",$attributes)) checked="true" @endif><label for="">Organizing</label></div>


<div class=""><input type="checkbox" id="D20" name="D20" value="D20" @if(in_array("D20",$attributes)) checked="true" @endif><label for="">Professionalism</label></div>

</div>

                            


<div class="col-md-4 attr" id="Engineering_Div" @if(!in_array("Engineering", $industries)) style="display: none" @endif><h4>Engineering</h4>

<div class=""><input type="checkbox" id="E1" name="E1" value="E1" @if(in_array("E1",$attributes)) checked="true" @endif><label for="">3D (Computer Aided Design) CAD</label></div>


<div class=""><input type="checkbox" id="E2" name="E2" value="E2" @if(in_array("E2",$attributes)) checked="true" @endif><label for="">Big Data</label></div>


<div class=""><input type="checkbox" id="E3" name="E3" value="E3" @if(in_array("E3",$attributes)) checked="true" @endif><label for="">Analysis</label></div>


<div class=""><input type="checkbox" id="E4" name="E4" value="E4" @if(in_array("E4",$attributes)) checked="true" @endif><label for="">Data Analytics</label></div>


<div class=""><input type="checkbox" id="E5" name="E5" value="E5" @if(in_array("E5",$attributes)) checked="true" @endif><label for="">Documentation</label></div>


<div class=""><input type="checkbox" id="E6" name="E6" value="E6" @if(in_array("E6",$attributes)) checked="true" @endif><label for="">Engineering</label></div>


<div class=""><input type="checkbox" id="E7" name="E7" value="E7" @if(in_array("E7",$attributes)) checked="true" @endif><label for="">Develop Project Scope and Timeline</label></div>


<div class=""><input type="checkbox" id="E8" name="E8" value="E8" @if(in_array("E8",$attributes)) checked="true" @endif><label for="">Test Building Materials</label></div>


<div class=""><input type="checkbox" id="E9" name="E9" value="E9" @if(in_array("E9",$attributes)) checked="true" @endif><label for="">Prepare Designs and Estimates</label></div>

<div class=""><input type="checkbox" id="E10" name="E10" value="E10" @if(in_array("E10",$attributes)) checked="true" @endif><label for="">Coding</label></div>



<div class=""><input type="checkbox" id="E11" name="E11" value="E11" @if(in_array("E11",$attributes)) checked="true" @endif><label for="">Virtualization</label></div>


<div class=""><input type="checkbox" id="E12" name="E12" value="E12" @if(in_array("E12",$attributes)) checked="true" @endif><label for="">Database</label></div>


<div class=""><input type="checkbox" id="E13" name="E13" value="E13" @if(in_array("E13",$attributes)) checked="true" @endif><label for="">Data Analysis</label></div>


<div class=""><input type="checkbox" id="E14" name="E14" value="E14" @if(in_array("E14",$attributes)) checked="true" @endif><label for="">Hardware</label></div>


<div class=""><input type="checkbox" id="E15" name="E15" value="E15" @if(in_array("E15",$attributes)) checked="true" @endif><label for="">IT Security</label></div>


<div class=""><input type="checkbox" id="E16" name="E16" value="E16" @if(in_array("E16",$attributes)) checked="true" @endif><label for="">Mobile Applications</label></div>


<div class=""><input type="checkbox" id="E17" name="E17" value="E17" @if(in_array("E17",$attributes)) checked="true" @endif><label for="">Networking</label></div>


<div class=""><input type="checkbox" id="E18" name="E18" value="E18" @if(in_array("E18",$attributes)) checked="true" @endif><label for="">Operating Systems</label></div>


<div class=""><input type="checkbox" id="E19" name="E19" value="E19" @if(in_array("E19",$attributes)) checked="true" @endif><label for="">Software Engineering</label></div>


<div class=""><input type="checkbox" id="E20" name="E20" value="E20" @if(in_array("E20",$attributes)) checked="true" @endif><label for="">Software Quality Assurance (QA)</label></div>

</div>


                           
<div class="col-md-4 attr" id="Health_Div" @if(!in_array("Health", $industries)) style="display: none" @endif><h4>Health</h4>


<div class=""><input type="checkbox" id="F1" name="F1" value="F1" @if(in_array("F1",$attributes)) checked="true" @endif><label for="">Nurse</label></div>


<div class=""><input type="checkbox" id="F2" name="F2" value="F2" @if(in_array("F2",$attributes)) checked="true" @endif><label for="">Medicare</label></div>


<div class=""><input type="checkbox" id="F3" name="F3" value="F3" @if(in_array("F3",$attributes)) checked="true" @endif><label for="">Pharmacy</label></div>


<div class=""><input type="checkbox" id="F4" name="F4" value="F4" @if(in_array("F4",$attributes)) checked="true" @endif><label for="">Radiology</label></div>


<div class=""><input type="checkbox" id="F5" name="F5" value="F5" @if(in_array("F5",$attributes)) checked="true" @endif><label for="">Health Insurance</label></div>


<div class=""><input type="checkbox" id="F6" name="F6" value="F6" @if(in_array("F6",$attributes)) checked="true" @endif><label for="">Pediatric</label></div>


<div class=""><input type="checkbox" id="F7" name="F7" value="F7" @if(in_array("F7",$attributes)) checked="true" @endif><label for="">Hospice</label></div>


<div class=""><input type="checkbox" id="F8" name="F8" value="F8" @if(in_array("F8",$attributes)) checked="true" @endif><label for="">Administration of Medications</label></div>


<div class=""><input type="checkbox" id="F9" name="F9" value="F9" @if(in_array("F9",$attributes)) checked="true" @endif><label for="">Assisting in Surgery</label></div>


<div class=""><input type="checkbox" id="F10" name="F10" value="F10" @if(in_array("F10",$attributes)) checked="true" @endif><label for="">Assisting With Exams and Treatment</label></div>


<div class=""><input type="checkbox" id="F11" name="F11" value="F11" @if(in_array("F11",$attributes)) checked="true" @endif><label for="">Certifications</label></div>


<div class=""><input type="checkbox" id="F12" name="F12" value="F12" @if(in_array("F12",$attributes)) checked="true" @endif><label for="">Dialysis</label></div>


<div class=""><input type="checkbox" id="F13" name="F13" value="F13" @if(in_array("F13",$attributes)) checked="true" @endif><label for="">Dressing Application</label></div>


<div class=""><input type="checkbox" id="F14" name="F14" value="F14" @if(in_array("F14",$attributes)) checked="true" @endif><label for="">Documentation</label></div>


<div class=""><input type="checkbox" id="F15" name="F15" value="F15" @if(in_array("F15",$attributes)) checked="true" @endif><label for="">Electronic Health Records</label></div>


<div class=""><input type="checkbox" id="F16" name="F16" value="F16" @if(in_array("F16",$attributes)) checked="true" @endif><label for="">Emergency Room</label></div>


<div class=""><input type="checkbox" id="17" name="F17" value="F17" @if(in_array("F17",$attributes)) checked="true" @endif><label for="">Compounding Medications</label></div>


<div class=""><input type="checkbox" id="F18" name="F18" value="F18" @if(in_array("F18",$attributes)) checked="true" @endif><label for="">CPR</label></div>


<div class=""><input type="checkbox" id="F19" name="F19" value="F19" @if(in_array("F19",$attributes)) checked="true" @endif><label for="">Developing Radiographic Images</label></div>


<div class=""><input type="checkbox" id="F20" name="F20" value="F20" @if(in_array("F20",$attributes)) checked="true" @endif><label for="">Alzheimer and Dementia care</label></div>
</div>

</div>
     <button id="empBtn3" type="submit" style="display: none;"  class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn updateBTN" >Update</button>

</form>
</div>
<div class="col-md-12">
             <button id="prevBTN" style="display: none;" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn prevBTN" type="button" data-pos="0" onclick="previous()" >Previous</button> 
                    <button id="continueBTN" style="display: inline-block;" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn continueBTN" type="button" data-pos="0" onclick="submitNext()" >Continue</button>

                  </div>             


</div>



                        </div>
        </div>
  </div>
    </div>

        </div>



@endsection
