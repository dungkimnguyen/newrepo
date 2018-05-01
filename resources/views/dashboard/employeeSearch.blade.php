@extends('layouts.dashboard')

@section('content')
        <div class="dashboard-header">
                            <h1 class="entry-title listings-title-dash">Employee Search</h1>
                        <div class="back_to_home">
                <a href="http://demo1.wprentals.org/" title="home url">Front page</a>  
            </div> 
        </div>
        
        
        <div class="search_dashborad_header">


                <div id="emailEntry" >
                    <form class="employeeSearch form-horizontal" method="post">
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
        
        
        
        
        <div class="row admin-list-wrapper flex_wrapper_list" id="employeeList">    
        


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

                    </div> 
    </div>
 </div>  

                @endforeach
              @else
               
                 There is no data. please invite employees
                
              @endif
  
        </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>

        
@endsection
