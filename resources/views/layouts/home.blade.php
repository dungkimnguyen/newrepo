<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from demo1.wprentals.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 23:53:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="xmlrpc.php" />
        
              <script src="{{ asset('js/homepage.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <script src="{{ asset('js/dashboard.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">



       @yield('header')
 
    
    <body @yield('bodyClass') >

    @yield("wrapperClass") 

   
    

   <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" @yield('navClass') >
      <div class="container">
        <div class="navbar-header" style="border: 0px 0px;min-height: 70px">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" @yield('navBrandClass') >  <img  style="position:relative;max-height: 65px" src="/img/logo2_sm.png" class="img-responsive retina_ready"  alt="logo"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav">
          <!--
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
              -->
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
       <li style="padding:0px 1em ">
       <a href="/" >For Agencies</a></li>

       <li style="padding:0px 1em " >
       <a href="/" >For Employers</a></li>

       @if (!Auth::guest())
       <li style="padding:0px 1em "  >
       <a href="/">Dashboard</a></li>

<li>
  

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout" class="menulogout"><i class="fa fa-power-off"></i>Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
</li>
       <li style="padding:1em 1em "  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619" >
             <div class="user_menu user_loged" id="user_menu_u" onclick="alert('is broken')">
        <div class="menu_user_picture" style="background-image: url('http://demo1.wprentals.org/wp-content/themes/wprentals/img/default_user_small.png');"></div>
        <a class="menu_user_tools dropdown" id="user_menu_trigger" >    
        <span class="menu_username">{{$user->firstName}} {{$user->lastName}}</span>   <i class="fa fa-caret-down"></i> 
         </a>
       

   
                  
    </div> 

       </li>
       @else
        <li style="padding:0px 1em "  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619" onclick="toggle_F('loginmodal')">
       <a href="#"><i class=" fa fa-lock"></i> Login</a></li>

       <li style="padding:0px 1em "  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619" onclick="toggle_F('registermodal')">
       <a href="#"><i class=" fa fa-plus"></i> Signup</a></li>
       @endif

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


   

        
 

@yield('content')
<div class="modal fade" id="login_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="login_ModalLabel">Login</h4>
      </div>
      <div class="modal-body" style="padding: 2em" id="ModalText">
        These credentials do not match our records or your account has not been activated.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="error_Modal" tabindex="-1" role="dialog" aria-labelledby="error_modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="error_ModalLabel">Error Please fix the following</h4>
      </div>
      <div class="modal-body" style="padding: 2em" id="error_ModalText">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="loginmodal" class="modal fade in" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="false" style="display: none;overflow-y: hidden;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" type="button" onclick="toggle_F('loginmodal')"  aria-hidden="true">×</button>
<h2 class="modal-title_big">Start Listing Properties</h2>
<h4 id="myModalLabel" class="modal-title">Please fill the login or register forms</h4>
</div>
<div class="modal-body"><div id="ajax_login_div" class="show">
<div id="login-div" class="login_form">
                    <form class="form-horizontal loginForm" role="form" method="POST" >
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
</form>
 </div>
   </div>
   </div>
</div>

 <div id="registermodal" class="modal fade in" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;overflow-y: hidden;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close2 close" type="button"  onclick="toggle_F('registermodal')"  aria-hidden="true">×</button>
<h2 class="modal-title_big">Start Listing Properties</h2>
<h4 id="myModalLabel" class="modal-title">Please fill the login or register forms</h4>
</div>
<div class="modal-body">

<div id="ajax_register_div" class="show">
<div class="login_form shortcode-login">
 <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
<div id="register_message_area" class="loginalert">
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif</div>
<div class="loginrow">
<input id="user_login_register" class="form-control" name="name" placeholder="Username" size="20" type="text">
</div></div>

<div id="register_message_area" class="loginalert">
  <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif</div>
<div class="loginrow">
<input id="user_login_register" class="form-control" name="firstName" placeholder="firstName" size="20" type="text">
</div></div>

<div id="register_message_area" class="loginalert">
  <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif</div>
<div class="loginrow">
<input id="user_login_register" class="form-control" name="lastName" placeholder="lastName" size="20" type="text">
</div></div>

<div id="register_message_area" class="loginalert">
  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif</div>
<div class="loginrow">
<input id="user_email_register" class="form-control" name="email" placeholder="Email"  type="email">
</div></div>

<div id="register_message_area" class="loginalert">
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif</div>
<div class="loginrow">
<input id="user_login_register" class="form-control" name="password" type="password">
</div></div>


<div id="register_message_area" class="loginalert">
  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif</div>
<div class="loginrow">
<input id="user_login_register" class="form-control" name="password_confirmation" type="password">
</div></div>





<div class="acc_radio">
<input id="acctype0" name="type" value="agency" checked="" required="" type="radio">
<div class="radiolabel" for="acctype0">Agency with employees</div>
<br><input id="acctype1" name="type" value="client" required="" type="radio">
<div class="radiolabel" for="acctype1">Client seeking </div>
</div>
<input id="user_terms_register_sh" name="terms" type="checkbox">
<label id="user_terms_register_sh_label" for="user_terms_register_sh">
I agree with
<a id="user_terms_register_topbar_link" href="http://demo1.wprentals.org/terms-and-conditions/" target="_blank">terms & conditions</a>
</label>

<!--
<div id="capthca_register" style="float:left;transform:scale(1.02);-webkit-transform:scale(1.02);transform-origin:0 0;-webkit-transform-origin:0 0;">
<div style="width: 304px; height: 78px;">
<div>
<iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfneyYTAAAAAIpnhd5-QwOxcxCWLAJtqLFQeTtk&co=aHR0cDovL2RlbW8xLndwcmVudGFscy5vcmc6ODA.&hl=en&v=r20170808164053&theme=light&size=normal&cb=k68nk8wncn56" title="recaptcha widget" scrolling="no" sandbox="allow-forms allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups allow-popups-to-escape-sandbox" width="304" height="78" frameborder="0">
<!DOCTYPE html>
<html dir="ltr">
</iframe>
</div><textarea id="g-recaptcha-response-4" class="g-recaptcha-response" name="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none; display: none; "></textarea>
</div>
</div><-->
<button id="wp-submit-register" class="wpb_button wpb_btn-info wpb_btn-small wpestate_vc_button vc_button" style="margin-top:10px;" type="submit">Create an account</button>
</form>
<p id="reg_passmail">*A password will be e-mailed to you</p>
<input id="security-register" name="security-register" value="4fb632154e-1502599554" type="hidden">

<div id="reveal_login">
<a href="#">Already a member? Sign in!</a>
</div>
<a href="#">
<input id="security-login-forgot_wd" name="security-login-forgot_wd" value="e3c98f0047" type="hidden">
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

@yield('scripts')


<!-- Mirrored from demo1.wprentals.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 23:53:17 GMT -->
</html>