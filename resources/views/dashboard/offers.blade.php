

@extends('layouts.dashboard')

@section('content')
 <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" style="padding: 2em" id="ModalText">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="declineModalLabel">
  <div class="modal-dialog" role="document">
           <form class="offerAct form-horizontal" method="post">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="declineModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" style="padding: 2em" id="DelineText">
      <h3>What is the reason for declining</h3>
 {{ csrf_field() }}
<input type="hidden" name="act" value="deny">
<input type="hidden" name="offerID" value="" id="declineID">

<textarea rows="4" cols="50" name="comment" required></textarea>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
        <div class="dashboard-header">
                            <h1 class="entry-title listings-title-dash">Work Assignments</h1>
                        <div class="back_to_home">
                <a href="http://demo1.wprentals.org/" title="home url">Front page</a>  
            </div> 
        </div>    
        
        
        <div class="search_dashborad_header">


                <div id="emailEntry" >
                    <form class="offerSearch form-horizontal" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="refresh" value="true">

                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">Employee Search:</label>

                            <div class="col-md-6">
                                <input id="search" type="text" class="form-control" name="search" value="" required autofocus>

                            </div>
                        

                            <div class="ctr">
                               <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn formSubmit">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>

        </div>   
        <div class="row admin-list-wrapper flex_wrapper_list" id="offerList">     

        @if($user->role_id == 2)
            @if(count($user->agency->employees ) ==0)
            <h4 class="no_favorites">You don't have any employees yet!</h4> 
            @else
            @php $x = 0;  @endphp
                 @foreach($user->agency->employees as $employee)

                    @foreach($employee->offers as $offer)
                    @php $x++; @endphp


<div class="col-md-12 ">
    <div class="dasboard-prop-listing" style="max-width:100%">
    
   <div class="blog_listing_image book_image">
       
       
        <a href="http://demo1.wprentals.org/properties/chic-cole-valley-house/"> 
                        <img  src="http://demo1.wprentals.org/wp-content/uploads/2015/04/demo84-400x242.jpg"  class="img-responsive" alt="slider-thumb" />
                    </a>
   </div>
    

    <div class="prop-info">
        <h4 class="listing_title_book">
            Work Assignment: # {{$offer->id}} 
        </h4>
        
     
           <h4 class="listing_title_book"><strong>for:</strong>   {{$offer->employee->user->firstName}} {{$offer->employee->user->lastName}}   </h4>    
        
        <div class="user_dashboard_listed">
            <span class="booking_details_title">  Request by </span>
               {{$offer->client->name}}          </div>
        
        <div class="user_dashboard_listed">
            <span class="booking_details_title">Period:    </span> {{$offer->start_date}}  <strong>to</strong> {{$offer->end_date}}         </div>
   
            <div class="user_dashboard_listed">
                
            </div>  
                        
    </div>

    
    <div class="info-container_booking">
    <!--
        <span class="generate_invoice" data-bookid="13375">Issue invoice</span><span class="delete_booking" data-bookid="13375">Reject Booking Request</span>       

        --> 

      <div class="col-md-12">  <span class="generate_invoice invoiceBTN" data-id="{{$offer->id}}"  >View Assignment  </span><br></div>

  <?php $address = json_decode($offer->address);     $extra3 = json_decode($offer->extra3)?>
       <div class="create_invoice_form" id="offerTab_{{$offer->id}}" style="display: none; border: 0px "><h3>Invoice {{$offer->id}}</h3>
                <div class="invoice_table" style="width: 100%">
 

                   <div class="invoice_details">
                       <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Company </span>
                                        <span class=""> {{$offer->client->company}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                         <span class="invoice_data_legend"> Contact </span>
                                        <span class=""> {{$offer->client->user->firstName}} {{$offer->client->user->lastName}}  </span>
                                       </div>
                                       <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Position </span>
                                        <span class=""> {{$offer->role}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Summary </span>
                                        <span class=""> {{$offer->details}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Work Location </span>
                                        <span class="inv_data">{{$address[0]}} {{$address[1]}}  {{$address[2]}}  {{$address[3]}} </span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Pay </span>
                                        <span class="">${{$offer->wage}} per hour</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Hours Weekly </span>
                                        <span class=""> ${{$offer->weeklyTotal}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Weekly Schedule </span>
                                        <span class=""> {{$offer->schedule}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Assignment Term </span>
                                        <span class=""> @if($extra3[1] == 0) {{$extra3[0]}} days @else {{$extra3[1]}} weeks @endif </span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Agency </span>
                                        <span class=""> {{$offer->employee->agency->name}}</span>
                                        </div>


                                 
                                       </div>  
                       
                       </div> 
               
<div class="row col-md-12" style="padding-top: 2em">
@if($offer->status == "sent")

@if($offer->comments == null)
<h2 class="listing_title_book">Send a message to Employee about this Offer:</h2>
 <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="warn">
<input type="hidden" name="offerID" value="{{$offer->id}}">
<textarea rows="4" cols="50" name="comment" required></textarea>
        <div class="">
           <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn formSubmit" style="background-color: #74B097">Warn & Send</button>
    </div>

</form>
@else
<h2 class="listing_title_book">You sent message to employee:</h2>
<br>
{{$offer->comments}}
@endif

@else
<h2 class="listing_title_book">Offer has been <{{$offer->status}} </h2>
  @if($offer->status == "denied")
  <br>
  <h2 class="listing_title_book"> Reason :</h2>{{$offer->reason}}
  @endif
@endif

 </div>

               </div> 


    </div>
      
   </div> 
 </div>



                    @endforeach

                 @endforeach
                @if($x ==0)
            <h4 class="no_favorites">You don't have any offers yet!</h4> 
                @endif
            @endif


        @elseif($user->role_id == 3)
            @if(count($user->employee->offers) == 0)
            <h4 class="no_favorites">You don't have any booking requests yet!</h4> 
            @else
                 @foreach($user->employee->offers as $offer)
                 

<div class="col-md-12 ">
    <div class="dasboard-prop-listing" style="max-width:100%">
    
   <div class="blog_listing_image book_image">
       
       
        <a href="http://demo1.wprentals.org/properties/chic-cole-valley-house/"> 
                        <img  src="http://demo1.wprentals.org/wp-content/uploads/2015/04/demo84-400x242.jpg"  class="img-responsive" alt="slider-thumb" />
                    </a>
   </div>
    

    <div class="prop-info">
        <h4 class="listing_title_book">
            Work Assignment: #{{$offer->id}} 
        </h4>
        
     
           <h4 class="listing_title_book"><strong>for:</strong>   {{$offer->employee->user->firstName}} {{$offer->employee->user->lastName}}   </h4>    
        
        <div class="user_dashboard_listed">
            <span class="booking_details_title">  Request by </span>
               {{$offer->client->name}}          </div>
        
        <div class="user_dashboard_listed">
            <span class="booking_details_title">Period:    </span> {{$offer->start_date}}  <strong>to</strong> {{$offer->end_date}}         </div>
   
            <div class="user_dashboard_listed">
                
            </div>  
                        
    </div>

    
    <div class="info-container_booking" >
    <!--
        <span class="generate_invoice" data-bookid="13375">Issue invoice</span><span class="delete_booking" data-bookid="13375">Reject Booking Request</span>       

        --> 


      <div class="col-md-12" style="margin-bottom: 1em">  <span class="generate_invoice invoiceBTN" data-id="{{$offer->id}}"  >View Assignment  </span><br></div>

    <?php $address = json_decode($offer->address);     $extra3 = json_decode($offer->extra3)?>
       <div class="create_invoice_form" id="offerTab_{{$offer->id}}" style="display: none; border: 0px "><h3>Invoice {{$offer->id}}</h3>
                <div class="invoice_table" style="width: 100%">
 

                   <div class="invoice_details">
                       <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Company </span>
                                        <span class=""> {{$offer->client->company}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                         <span class="invoice_data_legend"> Contact </span>
                                        <span class=""> {{$offer->client->user->firstName}} {{$offer->client->user->lastName}}  </span>
                                       </div>
                                       <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Position </span>
                                        <span class=""> {{$offer->role}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Summary </span>
                                        <span class=""> {{$offer->details}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Work Location </span>
                                        <span class="inv_data">{{$address[0]}} {{$address[1]}}  {{$address[2]}}  {{$address[3]}} </span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Pay </span>
                                        <span class="">${{$offer->wage}} per hour</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Hours Weekly </span>
                                        <span class=""> ${{$offer->weeklyTotal}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Weekly Schedule </span>
                                        <span class=""> {{$offer->schedule}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Assignment Term </span>
                                        <span class=""> @if($extra3[1] == 0) {{$extra3[0]}} days @else {{$extra3[1]}} weeks @endif </span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Agency </span>
                                        <span class=""> {{$offer->employee->agency->name}}</span>
                                        </div>


                                 
                                       </div>  
                       
                       </div> 
               
<div class="row col-md-12" style="padding-top: 2em">
<div class="col-md-12">
  
@if($offer->comments != null )
<h2 class="listing_title_book">You received a message from Agency about this offer:</h2>
<br>
{{$offer->comments}}
@endif

</div>
@if($offer->status == "sent")
<div class="col-md-2"> 
     <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="accept">
<input type="hidden" name="offerID" value="{{$offer->id}}">

        <div class="ctr">
           <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn formSubmit" style="background-color: #74B097">Accept</button>
    </div>
</form>


</div>

<div class="col-md-2"> 
 <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="showModal">
<input type="hidden" name="offerID" value="{{$offer->id}}">
        <div class="ctr">
           <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn formSubmit" style="background-color: #74B097"> Deny </button>
    </div>
</form>

</div>

@else
<h2 class="listing_title_book">You {{$offer->status}} Offer on {{$offer->updated_at}}</h2>
  @if($offer->status == "denied")
  <br>
  <h2 class="listing_title_book"> Reason :</h2>{{$offer->reason}}
  @endif
@endif

</div>

               </div> 


    </div>
      
   </div> 
 </div>
                 @endforeach
            @endif



        @elseif($user->role_id == 4)
            @if(count($user->client->offers ) == 0)
            <h4 class="no_favorites">You don't have any booking requests yet!</h4> 
            @else
                @foreach($user->client->offers as $offer)


<div class="col-md-12 ">
    <div class="dasboard-prop-listing" style="max-width:100%">
    
   <div class="blog_listing_image book_image">
       
       
        <a href="http://demo1.wprentals.org/properties/chic-cole-valley-house/"> 
                        <img  src="http://demo1.wprentals.org/wp-content/uploads/2015/04/demo84-400x242.jpg"  class="img-responsive" alt="slider-thumb" />
                    </a>
   </div>
    

    <div class="prop-info">
        <h4 class="listing_title_book">
            Work Assignment: #{{$offer->id}} 
        </h4>
        
     
           <h4 class="listing_title_book"><strong>for:</strong>   {{$offer->employee->user->firstName}} {{$offer->employee->user->lastName}}   </h4>    
        
        <div class="user_dashboard_listed">
            <span class="booking_details_title">  Request by </span>
               {{$offer->client->name}}          </div>
        
        <div class="user_dashboard_listed">
            <span class="booking_details_title">Period:    </span> {{$offer->start_date}}  <strong>to</strong> {{$offer->end_date}}         </div>
   
            <div class="user_dashboard_listed">
                
            </div>  
                        
    </div>

    
    <div class="info-container_booking">
    <!--
        <span class="generate_invoice" data-bookid="13375">Issue invoice</span><span class="delete_booking" data-bookid="13375">Reject Booking Request</span>       

        --> 


      <div class="col-md-12">  <span class="generate_invoice invoiceBTN" data-id="{{$offer->id}}"  >View Assignment  </span><br>

      </div>
  <?php $address = json_decode($offer->address);     $extra3 = json_decode($offer->extra3)?>
       <div class="create_invoice_form" id="offerTab_{{$offer->id}}" style="display: none; border: 0px "><h3>Invoice {{$offer->id}}</h3>
                <div class="invoice_table" style="width: 100%">
 

                   <div class="invoice_details">
                       <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Company </span>
                                        <span class=""> {{$offer->client->company}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                         <span class="invoice_data_legend"> Contact </span>
                                        <span class=""> {{$offer->client->user->firstName}} {{$offer->client->user->lastName}}  </span>
                                       </div>
                                       <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Position </span>
                                        <span class=""> {{$offer->role}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Summary </span>
                                        <span class=""> {{$offer->details}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Work Location </span>
                                        <span class="inv_data">{{$address[0]}} {{$address[1]}}  {{$address[2]}}  {{$address[3]}} </span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Pay </span>
                                        <span class="">${{$offer->wage}} per hour</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Hours Weekly </span>
                                        <span class=""> ${{$offer->weeklyTotal}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Weekly Schedule </span>
                                        <span class=""> {{$offer->schedule}}</span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Assignment Term </span>
                                        <span class=""> @if($extra3[1] == 0) {{$extra3[0]}} days @else {{$extra3[1]}} weeks @endif </span>
                                        </div>
                                        <div class="invoice_row invoice_content">
                                        <span class="invoice_data_legend"> Agency </span>
                                        <span class=""> {{$offer->employee->agency->name}}</span>
                                        </div>


                                 
                                       </div>  
                       
                       </div> 
               
<div class="row col-md-12" style="padding-top: 2em">
 <form class="offerAct form-horizontal" method="post">
 {{ csrf_field() }}
<input type="hidden" name="act" value="delete">
<input type="hidden" name="offerID" value="{{$offer->id}}">

        <div class="">
           <button  type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button lbtn formSubmit" style="background-color: #74B097">Delete</button>
    </div>
</form>
 </div>

               </div> 


                  </div>
      
   </div> 
 </div>

                @endforeach
            @endif 
        @endif
        </div>


    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/offers.js') }}"></script>


@endsection
