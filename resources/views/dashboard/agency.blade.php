@extends('layouts.dashboard')

@section('content')
<div class="container" style="margin-top: 2em">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            
                <h4 class="panel-heading tblack"> Agency Dashboard</h4>
               
                <div id="emailEntry" >
                    <form class="employeeSearch form-horizontal" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="refresh" value="true">

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Employee Search:</label>

                            <div class="col-md-6">
                                <input id="search" type="text" class="form-control" name="search" value="" required autofocus>

                            </div>
                        </div>

                            <div class="ctr">
                               <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn formSubmit">Submit</button>
                        </div>
                    </form>
                </div>

<div id="employeeList">
              <table class="table table-bordered">
            <thead>
              <th>Employee ID</th>
              <th>email</th>
              <th>name</th>
            </thead>
            <tbody>
              @if($employees)
                @foreach($employees as $key => $employee)
                  <tr>
                    <td>{{ $employee->id }} <a href="/employee/edit/{{$employee->id}}">Edit</a> </td>
                    <td>{{ $employee->email }}</td><td>{{ $employee->user->firstName }} , {{ $employee->user->lastName }}</td>
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

 <div class="row">
        <div class="col-md-8 col-md-offset-1">
           
                <h4 class="panel-heading tblack"> Employee Invite</h4>
             

                <div id="emailEntry" >
                    <form class="employeeInvite form-horizontal" method="post">
                            {{ csrf_field() }}


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                            </div>
                        </div>

                            <div class="ctr">
                               <button  type="submit" class="btn btn-sm btn-info lbtn formSubmit">Submit</button>
                        </div>
                    </form>
                </div>
             

              <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>email</th>
              <th>status</th>
            </thead>
            <tbody>
              @if($invites)
                @foreach($invites as $key => $invite)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $invite->email }}</td><td>{{ $invite->status }}</td>
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

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
         
                <h4 class="panel-heading tblack"> Client Invite</h4>
        


                <div id="emailEntry" >
                    <form class="clientInvite form-horizontal" method="post">
                            {{ csrf_field() }}


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                            </div>
                        </div>

                            <div class="ctr">
                               <button  type="submit" class="btn btn-sm btn-info lbtn formSubmit">Submit</button>
                        </div>
                    </form>
                </div>
             

              <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>email</th>
              <th>status</th>
            </thead>
            <tbody>
              @if($clientInvites)
                @foreach($clientInvites as $key => $invite)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $invite->email }}</td><td>{{ $invite->status }}</td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="4">There is no data.</td>
                </tr>
              @endif
            </tbody>
          </table>


    <script src="{{ asset('js/dashboard.js') }}"></script>

                </div>

    </div>


</div>
@endsection
