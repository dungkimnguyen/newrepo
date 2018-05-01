@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel loginBG">
                <h4 class="panel-heading tblack"> Offer View</h4>
                <div class="panel-body tblack">
                	<div class=""></div>

<br>
<h2>Details</h2>
                      {{$offer->details}} <br>
                      {{$offer->schedule}}

<br>
@if($user->client != null)
<div class="col-lg-2">
 <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="delete">
<input type="hidden" id="offerID" value="{{$offer->id}}">

        <div class="ctr">
           <button  type="submit" class="btn btn-sm btn-info lbtn formSubmit">Delete</button>
    </div>
</form>
</div>
@elseif($user->employee != null)
<div class="col-lg-2">

     <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="accept">
<input type="hidden" id="offerID" value="{{$offer->id}}">

        <div class="ctr">
           <button  type="submit" class="btn btn-sm btn-info lbtn formSubmit">Accept</button>
    </div>
</form>

</div>

<div class="col-lg-2">

 <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="deny">
        <div class="ctr">
           <button  type="submit" class="btn btn-sm btn-info lbtn formSubmit">Deny</button>
    </div>
</form>
</div>
@endif
                </div>
            </div>
        </div>
    </div>
</div>



    <script src="{{ asset('js/offers.js') }}"></script>

@endsection
