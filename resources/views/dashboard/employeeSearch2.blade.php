
   @if($employees)
                @foreach($employees as $key => $employee)

<div class="col-md-4 flexdashbaord">
    <div class="dasboard-prop-listing">
    
        <div class="blog_listing_image dashboard_imagine">
                            <!-- <img data-src=""  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy img-responsive wp-post-image " alt="no thumb" />  -->       
                <img src="assets/js/defaultimage_prop.htm" class="b-lazy img-responsive wp-post-image " alt="no thumb">         
                    </div>
        
        <div class="user_dashboard_status">
            <span class="label label-info">Waiting for approval</span><span class="label label-info">Not Paid</span>      
        </div>

         <div class="prop-info">
           

            <h4 class="listing_title">
                <a href="">
                {{ $employee->user->firstName }} , {{ $employee->user->lastName }}                </a> 
            </h4>

            <div class="user_dashboard_listed">
                            </div>

            <div class="user_dashboard_listed">
                {{ $employee->title }}                 
            </div>
                            @php $address = json_decode($employee->address) @endphp

            <div class="user_dashboard_listed">
                 City:             
                 <a href="http://demo1.wprentals.org/city/sdds/" rel="tag">City</a>                 , State:                  <a href="http://demo1.wprentals.org/area/dsds-sdds/" rel="tag">{{$address[3]}}, {{$address[4]}}</a>          
            </div>

                     
             
                <div class="info-container">
                    <a data-original-title="Edit property" class="dashboad-tooltip" href="/employee/edit/{{$employee->id}}"><i class="fa fa-pencil editprop"></i></a>
                    <a data-original-title="Delete property" class="dashboad-tooltip" onclick="return confirm(' Are you sure you wish to delete jkjh?')" href="user-dashboard.htm?delete_id=12984"><i class="fa fa-times deleteprop"></i></a>  
                    <span class="activate_payments">Publish or Upgrade</span>                
                </div>
             
                <div class="info-container-payments"> 


                     
                                        <div class="listing_submit">
                                        <button type="button" class="close close_payments" data-dismiss="modal" aria-hidden="true">x</button>
                                        Submission Fee: <span class="submit-price submit-price-no">1</span><span class="submit-price"> USD</span><br>
                                        <input class="extra_featured" name="extra_featured" style="display:block;" value="1" type="checkbox">
                                        Featured Fee: <span class="submit-price submit-price-featured">2</span><span class="submit-price"> USD</span> <br>
                                        Total Fee: <span class="submit-price submit-price-total">1</span> <span class="submit-price">USD</span>  <br>  <div class="listing_submit_normal label label-danger" data-listingid="12984">Pay with Paypal</div> 
        <div class="stripe-wrapper  stripe_paypal ">    
        <form action="http://demo1.wprentals.org/stripe-processor/" method="post" id="stripe_form_simple">
            <div class="stripe_simple">
                <script src="assets/js/checkout.js" class="stripe-button active" data-key="pk_test_VOvkH4oc5kwIcX83XSUYS9v1" data-amount="100" data-zip-code="true" data-email="taimoork307@gmail.com" data-currency="USD" data-label="Pay with Credit Card" data-description="Submission Payment">
                </script><button type="submit" class="stripe-button-el" style="visibility: visible;"><span style="display: block; min-height: 30px;">Pay with Credit Card</span></button>
            </div>
            <input id="propid" name="propid" value="12984" type="hidden">
            <input id="submission_pay" name="submission_pay" value="1" type="hidden">
            <input name="userID" value="1657" type="hidden">
            <input id="pay_ammout" name="pay_ammout" value="100" type="hidden">
        </form>

        <form action="http://demo1.wprentals.org/stripe-processor/" method="post" id="stripe_form_featured">
            <div class="stripe_simple">
                <script src="assets/js/checkout.js" class="stripe-button active" data-key="pk_test_VOvkH4oc5kwIcX83XSUYS9v1" data-amount="300" data-email="taimoork307@gmail.com" data-currency="USD" data-label="Pay with Credit Card" data-description="Submission &amp; Featured Payment">
                </script><button type="submit" class="stripe-button-el" style="visibility: visible;"><span style="display: block; min-height: 30px;">Pay with Credit Card</span></button>
            </div>
            <input id="propid" name="propid" value="12984" type="hidden">
            <input id="submission_pay" name="submission_pay" value="1" type="hidden">
            <input id="featured_pay" name="featured_pay" value="1" type="hidden">
            <input name="userID" value="1657" type="hidden">
            <input id="pay_ammout" name="pay_ammout" value="300" type="hidden">
        </form>
        </div><div data-listing="12984" class="label label-danger perpack">Wire Transfer</div></div>
                </div>
                    </div> 
    
    </div>
 </div>  

                @endforeach
              @else
               
                 There is no data. please invite employees
                
              @endif