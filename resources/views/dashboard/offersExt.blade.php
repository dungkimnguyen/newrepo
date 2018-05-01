
            @if(count($offers ) == 0)
            <h4 class="no_favorites">You don't have any booking requests yet!</h4> 
            @else
                @foreach($offers as $offer)


<div class="col-md-12 ">
    <div class="dasboard-prop-listing">
    
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

       <a href="/viewOffer/{{$offer->id}}"> <span class="generate_invoice" >View Assignment  </span></a>
    </div>
      
   </div> 
 </div>

                @endforeach
            @endif 
  