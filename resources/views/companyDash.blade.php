@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel loginBG">
                <h4 class="panel-heading tblack"> Employees</h4>
                <div class="panel-body tblack">
                	<div class=""></div>


              <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>email</th>
              <th>name</th>
            </thead>
            <tbody>
              @if($employees)
                @foreach($employees as $key => $employee)
                  <tr>
                    <td>{{ ++$key }}</td>
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
    </div>
</div>
@endsection
