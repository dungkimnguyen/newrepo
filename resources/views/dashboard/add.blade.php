@extends('layouts.dashboard')

@section('content')
<div class="container">


            <div class="dashboard-header">
                                    <h1 class="entry-title entry-title-profile">Employee Invite</h1>
                                    

            </div>

        <div class="col-md-8 col-md-offset-1">
           

                <div id="emailEntry" style="margin-top: 1em" >
                    <form class="employeeInvite form-horizontal" method="post">
                            {{ csrf_field() }}


                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                            </div>
                        

                            <div class="col-md-4">
                               <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button formSubmit">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
             

 <div id="employeeList">
              @if($invites)
                @foreach($invites as $key => $invite)



<div class="col-md-12 flexdashbaord">
    <div class="dasboard-prop-listing" style="max-width: 100%">
    

          <div class="user_dashboard_listed">
        <div class="user_dashboard_status">
            <span class="label label-info">{{ $invite->status }}</span>     
        </div>
</div>

            <div class="user_dashboard_listed">
                            </div>
         <div class="prop-info">
           

            <h4 class="listing_title">
          
                @if($invite->status == "sent") {{ $invite->email }} @else @php $employee = $invite->user->employee;  @endphp {{ $invite->user->firstName }} , {{ $invite->user->lastName }}     @endif            
            </h4>

            <div class="user_dashboard_listed">
                            </div>
 @if($invite->status == "sent")
            <div class="user_dashboard_listed">
              Sent: {{$invite->created_at}}                
            </div> @endif 
                          @if($invite->status != "sent")  @php $address = json_decode($employee->address) @endphp

            <div class="user_dashboard_listed">
                 City:             
                 <a href="http://demo1.wprentals.org/city/sdds/" rel="tag">City</a>                 , State:                  <a href="http://demo1.wprentals.org/area/dsds-sdds/" rel="tag">{{$address[3]}}, {{$address[4]}}</a>          
            </div>
@endif
                     
             
                <div class="info-container">

@if($invite->status != "sent")
                    <a  href="/employee/edit/{{$employee->id}}"><span class="activate_payments">Finalize</span>  </a>
@else
 <form class="resendInvite form-horizontal" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{$invite->token}}">
                            <input type="hidden" name="email" value="{{$invite->email}}">
                               <button  type="submit" class="wpb_btn-info  wpestate_vc_button  vc_button formSubmit activate_payments">Resend Invite</button>
                     
                    </form>
@endif
                </div>

                    </div> 
    </div>
 </div>


                @endforeach
              @else
               There is no data.
             
              @endif
</div>

                </div>
  



                    <div class="dashboard-header">
                                    <h1 class="entry-title entry-title-profile">Client Invite</h1>
                                    
     
            </div>

        <div class="col-md-8 col-md-offset-1">
         



                <div id="emailEntry" style="margin-top: 1em">
                    <form class="clientInvite form-horizontal" method="post">
                            {{ csrf_field() }}


                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                            </div>
                        

                            <div class="col-md-4">
                               <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button formSubmit">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
             
<div id="clientList">

              @if($clientInvites)
                @foreach($clientInvites as $key => $invite)


<div class="col-md-12 flexdashbaord">
    <div class="dasboard-prop-listing" style="max-width: 100%">
    

          <div class="user_dashboard_listed">
        <div class="user_dashboard_status">
            <span class="label label-info">{{ $invite->status }}</span>     
        </div>
</div>

            <div class="user_dashboard_listed">
                            </div>
         <div class="prop-info">
           

            <h4 class="listing_title">
          
                @if($invite->status == "sent") {{ $invite->email }} @else @php $client = $invite->user->client;  @endphp {{ $invite->user->firstName }} , {{ $invite->user->lastName }}     @endif            
            </h4>

            <div class="user_dashboard_listed">
                            </div>
 @if($invite->status == "sent")
            <div class="user_dashboard_listed">
              Sent: {{$invite->created_at}}                
            </div> @endif 
                          @if($invite->status != "sent")  @php $address = json_decode($client->address) @endphp

            <div class="user_dashboard_listed">
                 City:             
                 <a href="http://demo1.wprentals.org/city/sdds/" rel="tag">City</a>                 , State:                  <a href="http://demo1.wprentals.org/area/dsds-sdds/" rel="tag">{{$address[3]}}, {{$address[4]}}</a>          
            </div>
@endif
                     
             
                <div class="info-container">

@if($invite->status != "sent")
                    <a  href="/employee/edit/{{$employee->id}}"><span class="activate_payments">Finalize</span>  </a>
@else
 <form class="resendInvite form-horizontal" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{$invite->token}}">
                            <input type="hidden" name="email" value="{{$invite->email}}">
                               <button  type="submit" class="wpb_btn-info  wpestate_vc_button  vc_button formSubmit activate_payments">Resend Invite</button>
                     
                    </form>
@endif
</div>
                </div>

                    </div> 
    </div>
 </div>




                @endforeach
              @else
 There is no data.
         
              @endif
 


    <script src="{{ asset('js/dashboard.js') }}"></script>

                </div>



</div>
@endsection
