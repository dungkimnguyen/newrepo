@extends('layouts.dashboard')

@section('content')
                 
            <div class="dashboard-header">
                                    <h1 class="entry-title entry-title-profile">My Profile</h1>
                                    
                <div class="back_to_home">
                    <a href="http://demo1.wprentals.org/" title="home url">Front page</a>  
                </div> 
            </div>
        
            <div class="single-content"></div><!-- single content-->
                      

<div class="user_profile_div"> 
     
       
            
        <div class=" row">  
              
                <div class="col-md-12">
             
                
                
                <div class="user_dashboard_panel">
                 <form id="userForm" class="form-horizontal settingsForm" data-type="user"  method="post">
                            {{ csrf_field() }}
                <h4 class="user_dashboard_panel_title">Your details</h4>
                
                <div class="col-md-12" id="profile_message"></div>
                
                <div class="col-md-6">
                    <p>
                        <label for="firstname">First Name</label>
                        <input id="firstname" class="form-control" name="firstName" type="text" value="{{$user->firstName}}" >
                    </p>

                    <p>
                        <label for="secondname">Last Name</label>
                        <input id="secondname" class="form-control" name="lastName" type="text" value="{{$user->lastName}}" >
                    </p>

                    <p>
                        <label for="useremail">Email</label>
                        <input id="useremail" class="form-control" value="{{$user->email}}" name="email" type="text">
                    </p>
                    
                   

                   
            
                <p class="fullp-button">
                    <button class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" id="update_profile">Update profile</button>
                </p>
          
                  </div>
                </form>

                                <div class="col-md-6">
                     <div id="profile-div">
                        
                

                            <div id="upload-container">                 
                                <div id="aaiu-upload-container" style="position: relative;">                 
                            @if($user->profile_img != null)<img class="img-rounded" style="margin-top: -10px; margin-bottom: -5px; display: inline-block;" src="/{{Auth::user()->profile_img}}" width="350px" height="250px"></h4>@endif

  <form id="imageUpload"  enctype="multipart/form-data" method="POST">
         {{ csrf_field() }}

              <div class="col-md-6">
                <br/>

                 <button type="button"  id="aaiu-uploader" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" style="position: relative; z-index: 1;" onclick="document.getElementById('selecter').click();">Upload Image</button>

                 <button type="submit" id="imgSubmit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" style="position: relative; z-index: 1;display: none">Upload Image</button>

              </div>
         
            <div class="row">
              <div class="col-md-6">
                <br/>
      <input type="file" id="selecter" name="image_file" class="form-control" style="display: none">
              </div>

            </div>
</form>

                                    <div id="aaiu-upload-imagelist">
                                        <ul id="aaiu-ul-list" class="aaiu-upload-list"></ul>
                                    </div>
                             </div>  
                            </div>
                            <span class="upload_explain">* recommended size: minimum 550px </span>
                       
                    </div>
                    
                           <div class="col-md-12">  
            <div class="user_dashboard_panel">
                   <h4 class="user_dashboard_panel_title">Change Password</h4>


               <div class="col-md-12" id="profile_pass">
               </div> 

               <p class="col-md-12">
                   <label for="oldpass">Old Password</label>
                   <input id="oldpass" value="" class="form-control" name="oldpass" type="password">
               </p>

               <p class="col-md-12">
                   <label for="newpass">New Password </label>
                   <input id="newpass" value="" class="form-control" name="newpass" type="password">
               </p>
               <p class="col-md-12">
                   <label for="renewpass">Confirm New Password</label>
                   <input id="renewpass" value="" class="form-control" name="renewpass" type="password">
               </p>

               <input id="security-pass" name="security-pass" value="44923e567e" type="hidden"><input name="_wp_http_referer" value="/my-profile/" type="hidden">               <p class="fullp-button">
                   <button class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" id="change_pass">Reset Password</button>

               </p>
           </div>
        </div>

                </div>
            </div>
        </div>
            
            
            

    
    
 
    
    
      
    
   


 </div>    </div>
    <script src="{{ asset('js/settings.js') }}"></script>

@endsection
