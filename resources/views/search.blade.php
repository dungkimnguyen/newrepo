@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel loginBG">
                <h4 class="panel-heading tblack"> Employees</h4>
                <div class="panel-body tblack">
                	<div class=""></div>

 
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
  <div class="form-group col-sm-22 blackText" >
     <form id="searchForm" action="/search" class="form-horizontal "  method="post">
                            {{ csrf_field() }}
    <input type="date" name="start_date">
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
   <button id="searchSubmit" type="submit" class="btn btn-sm btn-info">Search</button>
    </div>
      </form>
     </td>                  
</tr>
            </tbody>
          </table>
          </div>


            </div>
              <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>email</th>
              <th>name</th>
              <th>Schedule</th>
              <th>MakeOffer</th>
            </thead>
            <tbody>
              @if(Count($employees)>=1)
                @foreach($employees as $key => $employee)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $employee->email }}</td><td>{{ $employee->user->firstName }} , {{ $employee->user->lastName }}</td>
                    @php

                      $temp = array();
                        array_push($temp, json_decode($employee->sunday));
                        array_push($temp, json_decode($employee->monday));
                        array_push($temp, json_decode($employee->tuesday));
                        array_push($temp, json_decode($employee->wednesday));
                        array_push($temp, json_decode($employee->thursday));
                        array_push($temp, json_decode($employee->friday));
                        array_push($temp, json_decode($employee->saturday));
                    $schedule = $temp;

                      @endphp
                    <td>
                      @foreach($schedule as $skey => $item)
                     
                     @if($skey == 0)

                    <b>Sunday</b>
                        @elseif($skey == 1)

                        <br><b>Monday</b>

                        @elseif($skey == 2)
                        <br><b>Tuesday</b>

                        @elseif($skey == 3)
                        <br><b>Wednesday</b>

                        @elseif($skey == 4)
                        <br><b>Thursday</b>

                        @elseif($skey == 5)
                        <br><b>Friday</b>

                        @elseif($skey == 6)
                        <br><b>Saturday</b>

                        @endif

                      @if($item[0][1] == "true"){{$item[0][0] }}, @endif
                      @if($item[1][1] == "true"){{$item[1][0] }}, @endif
                       @if($item[2][1] == "true"){{$item[2][0] }}, @endif
                     
                      @endforeach
                    </td>
                    <td><a href="/makeOffer/{{$employee->id}}">MakeOffer</td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="4">There is no data.</td>
                </tr>
              @endif
            </tbody>
          </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

