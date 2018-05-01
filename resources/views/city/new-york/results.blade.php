
 @if($employees!=null)
                @foreach($employees as $key => $employee)
<div class="listing_wrapper col-md-6  ssx property_flex " data-org="4" data-listid="133" > 
    <div class="property_listing " data-link="/employee/{{$employee->id}}">
                
          
            <div class="listing-unit-img-wrapper">
                                    <div class="cross"></div>
                    <a href="/employee/{{$employee->id}}"><img src="../../wp-content/uploads/2015/04/demo1114-400x314.jpg"   class="b-lazy img-responsive wp-post-image lazy-hidden" alt="no thumb" /></a> 
                            </div>
          
                 
                      
            <div class="title-container">
                <div class="price_unit_wrapper">
                    <div class="price_unit">
                         {{$employee->title}}                     </div> 
                </div>
                
                <a href="../../owners/amberdemo/index.html" class="owner_thumb" style="background-image: url('../../wp-content/uploads/2015/11/590_429_profile3-60x60.jpg')"></a>
           
                <div class="category_name">
                    <a href="../../properties/terrace-condo-penn-station/index.html" class="listing_title_unit">
                        {{ $employee->user->firstName }} , {{ $employee->user->lastName }}                  </a>
                    <div class="category_tagline">
                        <img src="../../wp-content/themes/wprentals/img/unit_pin.png"  alt="location">
                        <?php $address = json_decode($employee->address)?>
                 
                            <div class="col-lg-12">
                                <b>Country:</b>
                                    {{$address[2] }},{{$address[3] }},{{$address[4] }}
                            </div>
           
                        <a href="../../area/manhattan/index.html" rel="tag">{{$address[3] }}</a>, <a href="index.html" rel="tag">{{$address[4] }}</a>                    </div>
                    
                    <div class="category_tagline">
                        <img src="../../wp-content/themes/wprentals/img/unit_category.png"  alt="location">
                        <a href="../../listings/condos/index.html" rel="tag">{{$employee->title}}</a>  <a href="../../action/private-room/index.html" rel="tag"></a>                    </div>
                </div>
                
                <div class="property_unit_action">
                    <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="133"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        
        
        </div>          
    </div>  
@endforeach
@endif



