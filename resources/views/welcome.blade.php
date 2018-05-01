@extends('layouts.app')




@section('content')
<div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">

              <div class="title m-b-md">
                    Zinterim
                </div>
        <!--
          <div class="logo text-center">
            <img src="img/logo.png" alt="logo" width="150">
            <h2>We Are Baking Something New!! Comming Soon</h2>
          </div>
-->

</div>






<div class="container">
  
          
@if (Auth::guest())

<div class="col-md-4 col-lg-offset-2">
          <div class="panel panel-default">
                <div class="panel-body blackText">

Are You an Agency with employees?
<br>

<li><a href="{{ route('register') }}">Register your agency</a></li>

</div>
</div>


</div>

<div class="col-md-4">

          <div class="panel panel-default">
                <div class="panel-body blackText">
Are you searching for employees?
<br>
 <li><a href="{{ route('clientRegister') }}">Register as a Client</a></li>


</div>
</div>

</div>
@endif




 </div>









          <h2 class="subs-title text-center">Search!!!</h2>
          <div class=" text-center">




<div class="row"> 
<div class="col-lg-6 col-lg-offset-2">

     <table class="whiteBG ">
            <thead>
             

            </thead>
            <tbody>

<tr>
<td></td><td></td>

<td>
<div class="popup">
<div class=" popuptext" id="schedule" >
  <div class="form-group col-sm-22 blackText " >
     <form id="searchForm" action="/search" class="form-horizontal "  method="post">
                            {{ csrf_field() }}
    <input type="date" name="start_date" >
    <input type="date" name="end_date">
</div>
</div>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="col-md-3 blackText">
              <input  value="" placeholder="Job Title" class="jobTitle" id="title" name="title" type="title">

</div>
 
</td>
<td>
<div class="col-md-3 blackText">
              <input  value="" placeholder="zipcode" class="zip" id="zip" name="zip" type="zip">

</div>
</td>
<td>
<div class="col-md-3">
<button type="button" onclick="myFunction()"> schedule</button>

</div>
</td>
<td>
 <div class="ctr">
   <button id="searchSubmit" type="submit" class="btn btn-sm btn-info blackText">Search</button>
    </div>
      </form>
     </td>                  
</tr>
            </tbody>
          </table>
          </div>


            </div>











          </div>
       
  



</div>


</div>



@endsection
