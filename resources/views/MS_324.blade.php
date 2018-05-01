<html><head><title>Page Redirected</title><meta http-equiv="refresh" content="10;url=owners/amberdemo/index.html"></head><body><h1>Page Redirected</h1><div>To this <a href="owners/amberdemo/index.html">location</a>.</div>
<style>
 /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    overflow: auto; /* Enable scroll if needed */

}


/* The Close Button */
.close {
    color: #aaa;
 
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
} 

</style>   
        
<div id="loginmodal" class="modal fade in" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
<h2 class="modal-title_big">Start Listing Properties</h2>
<h4 id="myModalLabel" class="modal-title">Please fill the login or register forms</h4>
</div>
<div class="modal-body"><div id="ajax_login_div" class="show">
<div id="login-div" class="login_form">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
<div id="login_message_area" class="loginalert">
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

</div></div>
<div class="loginrow">
<input id="login_user" class="form-control" placeholder="Email"  type="email" name="email" value="{{ old('email') }}">
</div>


<div id="login_message_area" class="loginalert">
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

</div></div>

<div class="loginrow">
<input id="login_pwd" class="form-control" name="password" placeholder="Password" size="20" type="password">
</div>
<input id="loginpop" name="loginpop" value="0" type="hidden">
<input id="security-login" name="security-login" value="4e1c1953bd-1502550981" type="hidden">
<button id="wp-login-but" class="wpb_button wpb_btn-info wpb_regularsize wpestate_vc_button vc_button" data-mixval="0">Login</button>
<div class="navigation_links">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

<a id="reveal_register" href="#">Don't have an account?</a>
|
<a id="forgot_password_mod" href="{{ route('password.request') }}">Forgot Password</a>
</div>
</div>
<div class="login-links">
<div id="facebooklogin" data-social="facebook">
<i class="fa fa-facebook"></i>
Login with Facebook
</div><div id="googlelogin" data-social="google">
<i class="fa fa-google"></i>
Login with Google
</div>
<div id="yahoologin" data-social="yahoo">
<i class="fa fa-yahoo"></i>
Login with Yahoo
</div>
</div>
</div>
 </div>
   </div>
   </div>
</div> <div id="registermodal" class="modal fade in" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close2 close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
<h2 class="modal-title_big">Start Listing Properties</h2>
<h4 id="myModalLabel" class="modal-title">Please fill the login or register forms</h4>
</div>
<div class="modal-body">

<div id="ajax_register_div" class="show">
<div class="login_form shortcode-login">
<div id="register_message_area" class="loginalert"></div>
<div class="loginrow">
<input id="user_login_register" class="form-control" name="user_login_register" placeholder="Username" size="20" type="text">
</div>
<div class="loginrow">
<input id="user_email_register" class="form-control" name="user_email_register" placeholder="Email" size="20" type="text">
</div>
<div class="acc_radio">
<input id="acctype0" name="acc_type" value="1" checked="" required="" type="radio">
<div class="radiolabel" for="acctype0">I only want to book</div>
<br><input id="acctype1" name="acc_type" value="0" required="" type="radio">
<div class="radiolabel" for="acctype1">I want to rent my property</div>
</div>
<input id="user_terms_register_sh" name="terms" type="checkbox">
<label id="user_terms_register_sh_label" for="user_terms_register_sh">
I agree with
<a id="user_terms_register_topbar_link" href="http://demo1.wprentals.org/terms-and-conditions/" target="_blank">terms & conditions</a>
</label>
<div id="capthca_register" style="float:left;transform:scale(1.02);-webkit-transform:scale(1.02);transform-origin:0 0;-webkit-transform-origin:0 0;">
<div style="width: 304px; height: 78px;">
<div>
<iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfneyYTAAAAAIpnhd5-QwOxcxCWLAJtqLFQeTtk&co=aHR0cDovL2RlbW8xLndwcmVudGFscy5vcmc6ODA.&hl=en&v=r20170808164053&theme=light&size=normal&cb=k68nk8wncn56" title="recaptcha widget" scrolling="no" sandbox="allow-forms allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups allow-popups-to-escape-sandbox" width="304" height="78" frameborder="0">
<!DOCTYPE html>
<html dir="ltr">
</iframe>
</div><textarea id="g-recaptcha-response-4" class="g-recaptcha-response" name="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none; display: none; "></textarea>
</div>
</div>
<button id="wp-submit-register" class="wpb_button wpb_btn-info wpb_btn-small wpestate_vc_button vc_button" style="margin-top:10px;">Create an account</button>
<p id="reg_passmail">*A password will be e-mailed to you</p>
<input id="security-register" name="security-register" value="4fb632154e-1502599554" type="hidden">
</div>
<div id="reveal_login">
<a href="#">Already a member? Sign in!</a>
</div>
<a href="#">
<input id="security-login-forgot_wd" name="security-login-forgot_wd" value="e3c98f0047" type="hidden">
<input name="_wp_http_referer" value="/wp-admin/admin-ajax.php" type="hidden">
</a>
</div>
<a href="#"> </a>
<div id="forgot-pass-div_mod" class="login_form">
</div>
</div>
</div>
     </div>
   </div>
   </div>
   <script>
// Get the modal
var modal2 = document.getElementById('registermodal');

// Get the button that opens the modal
var btn2 = document.getElementById("topbarregister");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal2.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('loginmodal');

// Get the button that opens the modal
var btn = document.getElementById("topbarlogin");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<style>
 /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    overflow: auto; /* Enable scroll if needed */

}


/* The Close Button */
.close {
    color: #aaa;
 
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
} 

</style>  </body></html>