@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">


<h1>Offers</h1>
  <table class="table table-bordered">
            <thead>
              <th>Offer ID</th>
              <th>Employee Info</th>
              <th>Name</th>
            </thead>
            <tbody>
              @if(count($user->client->offers))
                @foreach($user->client->offers as $key => $offer)
                  <tr>
                    <td>{{$offer-> id}}<a href="/viewOffer/{{$offer-> id}}">View Offer {{$offer-> id}}</a> </td>
                    <td>{{ $offer->employee->email }}</td><td>{{ $offer->employee->user->firstName }} , {{ $offer->employee->user->lastName }}</td>
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



   
@endsection
