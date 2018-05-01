@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$agency->agency->name}}</div>

                <div class="panel-body">

                {{$agency->email}}<br>
                {{$agency->phone}}<br>
                @php $address = json_decode($agency->address) @endphp
                {{$address[0]}} @if($address[1] != null) ,{{$address[1]}} @endif , {{$address[2]}},{{$address[3]}} ,{{$address[4]}}<br>
                {{$agency->about}}<br>
                {{$agency->website}}<br>


                   
   <h1>Employees</h1>


                 <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>email</th>
              <th>title</th>
              <th>name</th>
            </thead>
            <tbody>
              @if(Count($agency->agency->employees) >=1)
                @foreach($agency->agency->employees  as $key =>  $employee)
                  <tr>
                    <td>{{ ++$key }} </td>

                    <td>{{ $employee->email }}</td><td>{{ $employee->user->firstName }} , {{ $employee->user->lastName }}</td>
                    <td>{{$employee->title}}</td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="4">There is no data.</td>
                </tr>
              @endif
            </tbody>
          </table>

          @if(isset($user->client))
<button onclick="alert('form connection')"> Connecto to Agency</button>
    @endif

              @if(Auth::guest())
<button onclick="alert('form connection')"> login to contact agency</button>
    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
