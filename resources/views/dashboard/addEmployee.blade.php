
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