<!DOCTYPE html>
<html idmmzcc-ext-docid="800253952" style="" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="http://demo1.wprentals.org/xmlrpc.php">
       
        <title>Profile Dashboard – demo 1</title>


    <script src="{{ asset('js/app.js') }}"></script>


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



<meta name="robots" content="noindex,follow">
<link rel="dns-prefetch" href="http://maps.googleapis.com/">
<link rel="dns-prefetch" href="http://www.google.com/">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="demo 1 » Feed" href="http://demo1.wprentals.org/feed/">
<link rel="alternate" type="application/rss+xml" title="demo 1 » Comments Feed" href="http://demo1.wprentals.org/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="demo 1 » My Properties Comments Feed" href="user-dashboard.htmfeed/">
    <script type="text/javascript" async="" src="assets/js/recaptcha__en.js" style=""></script><script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo1.wprentals.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.1"}};
      !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script><script src="assets/js/wp-emoji-release.js" type="text/javascript" defer="defer"></script>
    <style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 .07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>
<link rel="stylesheet" id="rs-plugin-settings-css" href="{{ asset('assets/css/settings.css')}}" type="text/css" media="all">
<style id="rs-plugin-settings-inline-css" type="text/css">
#rs-demo-id {}
</style>

<link rel="stylesheet" id="chld_thm_cfg_parent-css" href="{{ asset('assets/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="wpestate_media-css" href="{{ asset('assets/css/my_media.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="wpestate_style-css" href="{{ asset('assets/css/style_002.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="wpestate_jquery.ui.theme-css" href="{{ asset('assets/css/jquery-ui.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="wpestate-railway-css" href="{{ asset('assets/css/css_002.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="wpestate-opensans-css" href="{{ asset('assets/css/css.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="wpestate_font-awesome.min-css" href="{{ asset('assets/css/font-awesome.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="bsf-Defaults-css" href="{{ asset('assets/css/Defaults.css')}}" type="text/css" media="all">



<link rel="https://api.w.org/" href="http://demo1.wprentals.org/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://demo1.wprentals.org/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://demo1.wprentals.org/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.8.1">
<link rel="canonical" href="user-dashboard">
<link rel="shortlink" href="http://demo1.wprentals.org/?p=563">
<link rel="alternate" type="application/json+oembed" href="http://demo1.wprentals.org/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo1.wprentals.org%2Fuser-dashboard%2F">
<link rel="alternate" type="text/xml+oembed" href="http://demo1.wprentals.org/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo1.wprentals.org%2Fuser-dashboard%2F&amp;format=xml">
<style type="text/css">
.similar_listings_wrapper{
    background:transparent;
}
.owner_area_wrapper_sidebar,
.listing_type_1 .listing_main_image_price,
.owner-page-wrapper{
    background-image:none;
}
.property_header2 .property_categs .check_avalability:hover,
.listing_type_1 .check_avalability{
background-color:transparent!important;
}

#agent_submit_contact,
.panel-title-arrow,
.owner_area_wrapper_sidebar,
.listing_type_1 .listing_main_image_price,
.property_listing .tooltip-inner,
.pack-info .tooltip-inner,
.pack-unit .tooltip-inner,
.adv-2-header,
.check_avalability:hover,
.property_header2 .property_categs .check_avalability,
.owner-page-wrapper,
.calendar-legend-reserved,   
.featured_div,
.wpestate_tour .ui-tabs .ui-tabs-nav li.ui-tabs-active,
.ll-skin-melon td .ui-state-active,
.ll-skin-melon td .ui-state-hover,
.price-day,
.calendar-legend-reserved,
.calendar-reserved,
#slider_price_mobile .ui-widget-header,
#slider_price_sh .ui-widget-header,
#slider_price .ui-widget-header,
#slider_price_widget .ui-widget-header,
.slider_control_left,
.slider_control_right,   
.wpestate_accordion_tab .ui-state-active,
.wpestate_accordion_tab .ui-state-active ,
.wpestate_accordion_tab .ui-state-active,
.wpestate_tabs .ui-tabs .ui-tabs-nav li.ui-tabs-active,
.wpestate_progress_bar.vc_progress_bar .vc_single_bar.bar_blue .vc_bar,
.wpestate_posts_grid.wpb_teaser_grid .categories_filter li, 
.wpestate_posts_grid.wpb_categories_filter li,
.featured_second_line,    
.presenttw,
#colophon .social_sidebar_internal a:hover,
#primary .social_sidebar_internal a:hover ,
.comment-form #submit,
.property_menu_item i:hover,
.ball-pulse > div ,
.icon-fav-on-remove,
.share_unit,
#submit_action:hover,    
#adv-search-header-mobile,    
.red,
.pack-info .tooltip-inner,
.pack-unit .tooltip-inner,
.user_mobile_menu_list li:hover,
.theme-slider-view,
.listing-hover,
.ui-widget-content .ui-state-hover, 
.ui-widget-header .ui-state-hover, 
.ui-state-focus, 
.ui-widget-content .ui-state-focus, 
.ui-widget-header .ui-state-focus,
#wp-submit-register, 
#wp-forgot-but, 
#wp-login-but, 
.comment-form #submit, 
#wp-forgot-but_shortcode, 
#wp-login-but-wd, 
#wp-submit-register_wd,
#advanced_submit_shorcode,
.search_dashborad_header .wpestate_vc_button,
#submit_mess_front,
.modal-content #wp-forgot-but_mod,
#imagelist .uploaded_images i,
#aaiu-uploader ,
#aaiu-uploader:hover,
#send_sms_pin,
#send_sms_pin:hover,
#validate_phone,
#validate_phone:hover,
.user_dashboard_panel_guide .active:after,
.user_dashboard_panel_guide .guide_past:before,
.user_dashboard_panel_guide .guide_past:after,
.mess_send_reply_button, #change_pass, #update_profile, 
#book_dates, 
#aaiu-uploader,
#wp-submit-register_wd_mobile,
#wp-forgot-but_mobile,
#wp-login-but-wd-mobile,
#set_price_dates,
.action1_booking,
.generate_invoice,
#add_inv_expenses,
#add_inv_discount,
#book_dates,
#allinone_set_custom,
#edit_prop_ammenities,
#edit_calendar,
#edit_prop_locations,
#google_capture,
#edit_prop_details,
#edit_prop_image,
#edit_prop_price,
#edit_prop_1, 
#form_submit_1, 
#submit_mess_front, 
.modal-content #wp-login-but,
#wp-login-but_sh,
#wp-submit-register_sh{
    background-color: #74B097!important;
}

.user_mobile_menu_list li:hover, .mobilex-menu li:hover,
.double-bounce1, .double-bounce2{
  background-color: #74B097;
}

.property_header2 .property_categs .check_avalability:hover,
.pack-name,.user_dashboard_links a:hover i,
.property_ratings_agent i, .property_ratings i,
.prop_pricex,.property_unit_v2 .price_unit,
.wpestate_recent_tweets .item:after,
.panel-title:hover,
.blog_featured.type_1_class:hover .blog-title-link, .places_wrapper.type_1_class:hover .featured_listing_title, .featured_property .property_listing:hover .featured_listing_title,
.signuplink:hover,#submit_action:hover,.category_details_wrapper a:hover ,
.agent-flex:hover .agent-title-link,
.property_flex:hover .listing_title_unit,
#amount_wd,
#amount, 
#amount_sh,
.more_list:hover,
.single-content p a:hover,
#contact_me_long_owner:hover, #contact_me_long:hover,
#view_more_desc,
input[type="checkbox"]:checked:before,
.user_dashboard_panel_guide .active{
    color: #74B097!important;
}

.property_ratings_agent .owner_total_reviews,
.property_ratings_agent i {
    color: #fff!important;
}
.mobile-trigger-user:hover i, .mobile-trigger:hover i,
.carousel-control-theme-prev:hover, .carousel-control-theme-next:hover,
.hover_price,
#user_terms_register_topbar_link:hover,
#amount_mobile,
#amount_sh,
#amount_wd,
#amount,
.front_plan_row:hover,
.delete_search:hover,
.wpestate_posts_grid .vc_read_more,
.featured_article:hover h2 a,
.featured_article:hover .featured_article_right,
.user_dashboard_listed a,
.pack-listing-title,
.user_dashboard_links .user_tab_active i,
.idx-price,
#infobox_title:hover,
.info_details a:hover,
.contact_info_details h2,
#colophon .widget-container li:hover:before,
#colophon .widget-container li:hover,
#colophon .widget-container li:hover a,
.compare_item_head .property_price,
.adv_extended_options_text:hover,
#adv_extended_options_show_filters,
.show_filters,
.adv_extended_options_text,
#showinpage,
#contactinfobox,
.company_headline a:hover i,
#primary .contact_sidebar_wrap p:hover a,
#colophon .contact_sidebar_wrap p:hover a,
.twitter_wrapper a,
.twitter_time,
.wpestate_recent_tweets .item:after,
.widget_nav_menu .sub-menu li:hover a,
.widget_nav_menu  .sub-menu li:hover,
.top_bar .social_sidebar_internal a:hover,
.agent_unit_social_single a:hover,
.price_area,
i.checkon,
.listing_main_image_price ,
.meta-info a:hover,
.blog_unit_back:hover .blog-title-link,
#colophon .category_name a:hover,
.icon-fav,
.share_unit a:hover,
.share_list,
.listing_unit_price_wrapper,
.property_listing:hover .listing_title_unit,
.icon_selected,
#grid_view:hover,
#list_view:hover,
#user_menu_open  > a:hover i, 
#user_menu_open  > a:focus i,
.menu_user_tools,
.user_menu,
.breadcrumb a:hover,
.breadcrumb .active,
.slider-content .read_more,
.slider-title h2 a:hover,
 a,a:hover, a:focus{
    color: #74B097;
}

.property_flex:hover .blog_unit_back,
.property_flex:hover .property_listing,
.listing_type_1 .check_avalability,
.check_avalability,
.menu_user_picture,      
.theme-slider-view,
.scrollon,
#submit_action{
    border-color: #74B097 ;
}

.share_unit:after{
    border-top: 8px solid  #74B097;
}
.agentpict{
    border-bottom: 3px solid #74B097;
}

#adv_extended_options_show_filters,
.show_filters{
    border: 2px solid #74B097;
}

.user_dashboard_links a:hover i,
.user_dashboard_links a:hover,
.edit_class, .user_dashboard_links .user_tab_active{
    border-left-color: #74B097;
}

blockquote{
    border-left:5px solid #74B097;
}

.wpestate_tabs .ui-widget-header {
   border-bottom: 2px solid #74B097;
}

.booking-calendar-wrapper-in .end_reservation,
.all-front-calendars .end_reservation,
.ll-skin-melon .ui-datepicker td.freetobook.end_reservation{
   
    background: #fff9f9; 
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjYjg4MWZjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNDklIiBzdG9wLWNvbG9yPSIjYjg4MWZjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZmZjlmOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
    background: -moz-linear-gradient(-45deg,  #74B097 0%, #74B097 49%, #ffffff 50%, #ffffff 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#74B097), color-stop(49%,#74B097), color-stop(50%,#ffffff), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(-45deg,  #74B097 0%,#74B097 49%,#ffffff 50%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(-45deg,  #74B097 0%,#74B097 49%,#ffffff 50%,#ffffff 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(-45deg,  #74B097 0%,#74B097 49%,#ffffff 50%,#ffffff 100%); /* IE10+ */
    background: linear-gradient(135deg,  #74B097 0%,#74B097 49%,#ffffff 50%,#ffffff 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#74B097, endColorstr=#ffffff,GradientType=1 ); /* IE6-8 fallback on horizontal gradient */
}
.ll-skin-melon .ui-datepicker .ui-state-disabled.end_reservation{
    background: #fff9f9; 
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjYjg4MWZjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNDklIiBzdG9wLWNvbG9yPSIjYjg4MWZjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZmZjlmOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
    background: -moz-linear-gradient(-45deg,  #74B097 0%, #74B097 49%, #F8F8F8 50%, #F8F8F8 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#74B097), color-stop(49%,#74B097), color-stop(50%,#F8F8F8), color-stop(100%,#F8F8F8)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(-45deg,  #74B097 0%,#74B097 49%,#F8F8F8 50%,#F8F8F8 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(-45deg,  #74B097 0%,#74B097 49%,#F8F8F8 50%,#F8F8F8 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(-45deg,  #74B097 0%,#74B097 49%,#F8F8F8 50%,#F8F8F8 100%); /* IE10+ */
    background: linear-gradient(135deg,  #74B097 0%,#74B097 49%,#F8F8F8 50%,#F8F8F8 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#74B097, endColorstr=#ffffff,GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

}



.booking-calendar-wrapper-in .calendar-reserved.start_reservation ,
.all-front-calendars  .calendar-reserved.start_reservation ,
.ll-skin-melon .ui-datepicker td.calendar-reserved.start_reservation{   
    /*  background: -webkit-gradient(linear, right bottom, left top, color-stop(50%,#74B097), color-stop(50%,#fff))!important;    */
   background: #fff9f9; /* Old browsers */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZmZmOWY5IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTElIiBzdG9wLWNvbG9yPSIjYjg4MWZjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2I4ODFmYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
    background: -moz-linear-gradient(-45deg,  #ffffff 0%, #ffffff 50%, #74B097 51%, #74B097 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(50%,#ffffff), color-stop(51%,#74B097), color-stop(100%,#74B097)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(-45deg,  #ffffff 0%,#ffffff 50%,#74B097 51%,#74B097 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(-45deg,  #ffffff 0%,#ffffff 50%,#74B097 51%,#74B097 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(-45deg,  #ffffff 0%,#ffffff 50%,#74B097 51%,#74B097 100%); /* IE10+ */
    background: linear-gradient(135deg,  #ffffff 0%,#ffffff 50%,#74B097 51%,#74B097 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#ffffff, endColorstr=#74B097,GradientType=1 ); /* IE6-8 fallback on horizontal gradient */
}

.ll-skin-melon .ui-datepicker .ui-state-disabled.start_reservation{
    /*  background: -webkit-gradient(linear, right bottom, left top, color-stop(50%,#74B097), color-stop(50%,#fff))!important;    */
   background: #fff9f9; /* Old browsers */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZmZmOWY5IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTElIiBzdG9wLWNvbG9yPSIjYjg4MWZjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2I4ODFmYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
    background: -moz-linear-gradient(-45deg,  #74B097 0%, #74B097 50%, #74B097 51%, #74B097 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#74B097), color-stop(50%,#74B097), color-stop(51%,#74B097), color-stop(100%,#74B097)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(-45deg,  #74B097 0%,#74B097 50%,#74B097 51%,#74B097 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(-45deg,  #74B097 0%,#74B097 50%,#74B097 51%,#74B097 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(-45deg,  #74B097 0%,#74B097 50%,#74B097 51%,#74B097 100%); /* IE10+ */
    background: linear-gradient(135deg,  #74B097 0%,#74B097 50%,#74B097 51%,#74B097 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#ffffff, endColorstr=#74B097,GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

}
.wide,#google_map_prop_list_sidebar,.content_wrapper,.main_wrapper {background-color: #f3f3f3;}  .master_header,.customnav
      {background-color: #ffffff }
    
  
    
   
    
.review-date,
.category_icon_wrapper a,
.category_text,
.breadcrumb a,
.top_bar,
.top_bar a,
.listing-details,
.property_location .inforoom,
.property_location .infoguest,
.property_location .infosize,
.meta-element-head,
.meta-info,
.meta-info a,
.navigational_links a,
.agent_meta,
.agent_meta a,
.agent_pos,
.comment_date,
#adv_extended_close_adv,
#adv_extended_close_mobile,
#inforoom,
#infoguest,
#infosize,
.featured_article_secondline,
.featured_article_right{
    color: #99a3b1;
}

#street-view{
    background-color: #99a3b1;
}

 
    body,
    a,
    label,
    input[type=text], 
    input[type=password], 
    input[type=email], 
    input[type=url], 
    input[type=number], 
    textarea, 
    .slider-content, 
    .listing-details, 
    .form-control, 
    #user_menu_open i,
    #grid_view, 
    #list_view, 
    .listing_details a, 
    .notice_area, 
    .social-agent-page a, 
    .prop_detailsx, 
    #reg_passmail_topbar,
    #reg_passmail, 
    .testimonial-text,
    .wpestate_tabs .ui-widget-content, 
    .wpestate_tour  .ui-widget-content, 
    .wpestate_accordion_tab .ui-widget-content, 
    .wpestate_accordion_tab .ui-state-default, 
    .wpestate_accordion_tab .ui-widget-content .ui-state-default, 
    .wpestate_accordion_tab .ui-widget-header .ui-state-default,
    .filter_menu,
    blockquote p , 
    .panel-body p, 
    .owner_details_content p, 
    .property_menu_item_title,
    .property_menu_item,
    .item_head,
    .listing_detail,
    .blog-unit-content,
    .property_menu_item a,
    .social_icons_owner i,
    .social_icons_owner i:hover{
        color: #768082;}
    
    .form-control::-webkit-input-placeholder{
        color: #768082;}.caret,  .caret_sidebar, .advanced_search_shortcode .caret_filter{ border-bottom: 6px solid #768082;}
a,
#user_menu_open a,
.category_tagline a,
.property_listing a,
#user_terms_register_wd_label a, 
#user_terms_register_wd_label, 
#user_terms_register_topbar_link,
.single-content p a,
.owner_read_more {
    color: #768082;
}
.more_list{
 color: #768082!important;
}
h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a , 
 .featured_property h2 a, 
 .featured_property h2,
 .blog_unit h3, 
 .blog_unit h3 a,
 .submit_container_header,
 .panel-title,
 #other_listings,
 .entry-title-agent,
 .blog-title-link,
 .agent-title-link,
 .listing_title a,
 .listing_title_book a,
 #primary .listing_title_unit,

 #listing_reviews, .agent_listings_title_similar, #listing_calendar, #listing_description .panel-title-description{
    color: #3A404D;
  }
  
 .listing_title_unit{
    color: #3A404D!important;
 }
    #colophon {background-color: #282D33;}#colophon, #colophon a, #colophon li a,.widget-title-footer {color: #9DA5B9;}.sub_footer, .subfooter_menu a, .subfooter_menu li a {color: #9DA5B9!important;}.twitter_wrapper,.booking_form_request, .loginwd_sidebar .widget-title-sidebar, .advanced_search_sidebar .widget-title-sidebar,.advanced_search_sidebar,.loginwd_sidebar {background-color: #fdfdfd;}.widget-title-sidebar,.agent_listings_title_similar{color: #3A404D;}.wpestate_recent_tweets h3,.loginwd_sidebar .widget-title-sidebar, .advanced_search_sidebar .widget-title-sidebar{color: #3A404D;}#primary,#primary a,#primary label {color: #888C8E;}.filter_menu li:hover,#access .sub-menu li:hover>a, #access .sub-menu li:hover>a:active, #access .sub-menu li:hover>a:focus {color: #74B097;}.top_bar_wrapper{background-color:#fdfdfd;}.top_bar,.top_bar a{color:#1a171b;}.featured_article_title,
    .testimonial-text,
    .adv1-holder,   
    .advanced_search_shortcode, 
    .featured_secondline ,  
    .property_listing ,
    .agent_unit, 
    .blog_unit_back,
    .dasboard-prop-listing,
    .message_header,
    .invoice_unit{ 
        background-color:#fdfdfd;}
            

    .testimonial-text:after{
        border-top-color: #fdfdfd;
    }
    .featured_article, .loginwd_sidebar, .advanced_search_sidebar, .advanced_search_shortcode,  #access ul ul, .testimonial-text, .submit_container,   
    .featured_property, .property_listing ,.agent_unit,.blog_unit_back ,property_listing,.booking_form_request{
        border-color:#f0f0f0;
    } 
 
    
    .adv1-holder,.notice_area,  .listing_filters    {
        border-bottom: 1px solid #f0f0f0;
    }
    
   
    .testimonial-text:before{
        border-top-color: #f0f0f0;
    }
    .social_icons_owner i,.owner-image-container,.owner_listing_image{
    border-color:#80D4C9;}#submit_action:hover,
    .theme-slider-view:hover,
    .comment-form #submit:hover,
    .vc_button.wpb_btn-info:active, 
    .vc_button.wpb_btn-info.active, 
    .vc_button.wpb_btn-info.disabled, 
    .vc_button.wpb_btn-info[disabled]{
        background-color:#80D4C9!important;
        border:1px solid #80D4C9;
    }
   
    #wp-submit-register:hover, 
    #wp-forgot-but:hover, 
    #wp-login-but:hover, 
    .comment-form #submit:hover, 
    #wp-forgot-but_shortcode:hover, 
    #wp-login-but-wd:hover, 
    #wp-submit-register_wd:hover,
    #advanced_submit_shorcode:hover,
    #submit_mess_front:hover,
    .modal-content #wp-forgot-but_mod:hover{
        background-color:#80D4C9!important;
    }  #access ul.menu >li>a:hover,
            #access .current-menu-item,
            #access .current-menu-item >a,
            #access .current-menu-parent>a,
            #access .current-menu-ancestor>a,
            #access > ul > li:hover > a,
            #access .menu li:hover>a, 
            #access .menu li:hover>a:active, 
            #access .menu li:hover>a:focus,
            .hover_type_4  #access .menu > li:hover>a,
            .hover_type_3  #access .menu > li:hover>a{
            color: #74B097;
        }.transparent_header #access a{
            color: #ffffff!important;
        }.transparent_header #access a:hover,
            .transparent_header #access .menu > li:hover a,
            .transparent_header #access .menu li:hover>a, 
            .transparent_header #access .menu li:hover>a:active, 
            .transparent_header #access .menu li:hover>a:focus{
            color: #8A8F9A!important; 
        }.customnav #access ul.menu >li>a{
            color: #8A8F9A;
        }#access ul ul a{
            color: #8A8F9A;
        }#access ul ul a:hover {
             color:#74B097;
        }
        #access ul ul{
            background-color: #f1f3f7;
        }
        #access ul ul:after{
            border-bottom: 13px solid #f1f3f7;
        }
        .hover_type_3 #access .menu > li:hover>a,
        .hover_type_4 #access .menu > li:hover>a {
            background: #74B097!important;
        }
        .customnav #access ul.menu >li>a:hover,
        #access ul.menu >li>a:hover,
        .hover_type_3 #access .menu > li:hover>a,
//        .hover_type_4 #access .menu > li:hover>a,
        .hover_type_6 #access .menu > li:hover>a {
            color: #74B097;
        }
        .hover_type_5 #access .menu > li:hover>a {
            border-bottom: 3px solid #74B097;
        }
        .hover_type_6 #access .menu > li:hover>a {
          border: 2px solid #74B097;
        }
        .hover_type_2 #access .menu > li:hover>a:before {
            border-top: 3px solid #74B097;
        }
        .header_transparent .customnav #access ul.menu >li>a:hover,
        .header_transparent #access ul.menu >li>a:hover,
        .header_transparent .hover_type_3 #access .menu > li:hover>a,
        .header_transparent .hover_type_4 #access .menu > li:hover>a,
        .header_transparent .hover_type_6 #access .menu > li:hover>a {
            color: #8A8F9A;
        }
        .header_transparent .hover_type_5 #access .menu > li:hover>a {
            border-bottom: 3px solid #8A8F9A;
        }
        .header_transparent .hover_type_6 #access .menu > li:hover>a {
          border: 2px solid #8A8F9A;
        }
        .header_transparent .hover_type_2 #access .menu > li:hover>a:before {
            border-top: 3px solid #8A8F9A;
        }.uvc-heading.ult-adjust-bottom-margin {
    margin-bottom: 15px;
}

.status_verified{

background :#7CBDA2;

color:white;

}

#wpestate_footer_latest_widget-2 .title-container,
.owner_read_more {
color:white!important;
}





 </style>


 <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress.">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo1.wprentals.org/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.5.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
<script type="text/javascript">function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;         
          if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})          
        }catch(d){console.log("Failure at Presize of Slider:"+d)}
      };</script>
<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><link rel="shortcut icon" href="http://demo1.wprentals.org/wp-content/themes/wprentals/img/favicon.gif" type="image/x-icon">        
        
        
        


    </head>

    
    <body class="page-template page-template-user_dashboard page-template-user_dashboard-php page page-id-563 logged-in wpb-js-composer js-comp-ver-5.1.1 vc_responsive"> 
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

<div class="mobilewrapper-user">
    <div class="snap-drawers">
   
    <!-- Right Sidebar-->
        <div class="snap-drawer snap-drawer-right">
    
        <div class="mobilemenu-close-user"><i class="fa fa-times"></i></div>
         
            <ul class="user_mobile_menu_list">
                            <li><a href="/dashboard/"><i class="fa fa-cog"></i>Dashboard</a></li>   

                <li><a href="/dashboard/my-profile"><i class="fa fa-cog"></i>My Profile</a></li>  

<li><a href="settings"> <i class="fa fa-map-marker"></i> Edit 
@if($user->agency != null) Agency @elseif($user->client != null) Client @elseif($user->employee != null) Employee @endif
</a></li>
                   @if($user->agency != null) <li><a href="/dashboard/employeeSearch"><i class="fa fa-plus"></i>Employee Search</a></li> @endif

                    <li><a href="/dashboard/add"><i class="fa fa-plus"></i>Send Invites</a></li> 
                                
                      
                <li><a href="favorite-listings.htm" class="active_fav"><i class="fa fa-heart"></i>Favorites</a></li>
                <li><a href="my-reservations.htm" class="active_fav"><i class="fa fa-folder-open"></i>Reservations</a></li>
                
                                    <li><a href="/dashboard/offers" class="active_fav"><i class="fa fa-folder-open-o"></i>Bookings</a></li>
                                
                <li><a href="inbox.htm" class="active_fav"><i class="fa fa-inbox"></i>Inbox</a></li>
                
                                    <li><a href="invoices.htm" class="active_fav"><i class="fa fa-file-o"></i>Invoices</a></li>
                
                <li>
            
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout" class="menulogout"><i class="fa fa-power-off"></i>Logout</a></li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>        
    
            
           
          
           
        </div>  
        
        </div>              
    </div>
              
        <div class="website-wrapper " id="all_wrapper">
            <div class="container main_wrapper  wide is_dashboard_page ">
               <div class="master_header master_  wide   master_header_wide_no hover_type_1">

                                    
                  
<div class="mobile_header ">
    <div class="mobile-trigger"><i class=" fa fa-bars"></i></div>
    <div class="mobile-logo">
  <a   class="img-responsive retina_ready" href="/"> <img  style="position:relative;max-height: 45px" src="/img/logo_sm.png" class="img-responsive retina_ready"  alt="logo"/></a>
    </div>   
            <div class="mobile-trigger-user"><i class=" fa fa-cogs"></i></div>
    </div>
    
                    

                    <div class="header_wrapper   header_type1 header_align_left header_wide_no " style="position: fixed;background-color: white">
                        <div class="header_wrapper_inside">
                                                        <div class="logo" style="margin-top:27px"> 

                            <a   class="img-responsive retina_ready" href="/"> <img  style="position:relative;max-height: 45px" src="/img/logo_sm.png" class="img-responsive retina_ready"  alt="logo"/></a>
                            </div>   
                            

                            
   
    <div class="user_menu user_loged" id="user_menu_u" onclick="toggle_F('user_menu_open')">
        <div class="menu_user_picture" style="background-image: url('http://demo1.wprentals.org/wp-content/themes/wprentals/img/default_user_small.png');"></div>
        <a class="menu_user_tools dropdown" id="user_menu_trigger" >    
        <span class="menu_username">{{$user->firstName}} {{$user->lastName}}</span>   <i class="fa fa-caret-down"></i> 
         </a>
       
   
                  
    </div> 
        
        
 
    <div id="user_menu_open" class="user_menu_open" style=""> 
                            <a href="/dashboard/"><i class="fa fa-cog"></i>Dashboard</a>   

                        <a href="/dashboard/my-profile"><i class="fa fa-cog"></i>My Profile</a>   
                
                <a href="settings"> <i class="fa fa-map-marker"></i> Edit 
@if($user->agency != null) Agency @elseif($user->client != null) Client @elseif($user->employee != null) Employee @endif
</a>
                  @if($user->agency != null)<a href="/dashboard/employeeSearch"><i class="fa fa-plus"></i>Employee Search</a>@endif

                    <a href="/dashboard/add"><i class="fa fa-plus"></i>Send Invites</a>        
                
                    <a href="favorite-listings.htm" class="active_fav"><i class="fa fa-heart"></i>Favorites</a>
                
                    <a href="my-reservations.htm" class="active_fav"><i class="fa fa-folder-open"></i>Reservations</a>
                    <a href="/dashboard/offers" class="active_fav"><i class="fa fa-folder-open-o"></i>Bookings</a>
                    <a href="inbox.htm" class="active_fav"><i class="fa fa-inbox"></i>Inbox</a>
                    <a href="invoices.htm" class="active_fav"><i class="fa fa-file-o"></i>Invoices</a>
                   
       
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout" class="menulogout"><i class="fa fa-power-off"></i>Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
    </div>
    
   
                            
                            <nav id="access" >
                                <ul id="menu-primary-menu-1" class="menu">
       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619"><a href="/">Home</a></li>
       @if (!Auth::guest())
       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619"><a href="/">Dashboard</a></li>
 @if($user->client != null)
       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619"><a href="/search">Search</a></li>

   @endif
       @else

       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1619"><a href="/login">Login</a></li>

       @endif

</ul>                            </nav><!-- #access -->
                        </div>
                    </div>

                </div> 

<div class="header_media">
   
</div>




  <div class="container content_wrapper_dashboard"  style="margin-top: 3em">








    
<div class="row is_dashboard">
    
<div id="user_tab_menu_trigger" onclick="toggle_F('user_tab_menu_container')"><i class="fa fa-user"></i> User Menu</div>

@if(!Auth::guest())
<div class="user_tab_menu col-md-3" id="user_tab_menu_container">
    
    <div class="profile-image-wrapper">
        <div id="profile-image-menu" data-profileurl="http://demo1.wprentals.org/wp-content/themes/wprentals/img/default_user.png" data-smallprofileurl="" style="background-image: url('http://demo1.wprentals.org/wp-content/themes/wprentals/img/default_user.png');"></div>

        <div class="profile_wellcome">{{$user->firstName}} {{$user->lastName}}</div>    

    </div>
    
    
        
    
    <div class="user_dashboard_links">
                    <a href="/dashboard"   @if(Route::is('dashboard')) class="user_tab_active" @endif><i class="fa fa-user"></i> Dashboard</a>


                    <a href="/dashboard/my-profile"   @if(Route::is('profile')) class="user_tab_active" @endif><i class="fa fa-user"></i> My Profile</a>

<a href="settings" @if(Route::is('settings')) class="user_tab_active" @endif> <i class="fa fa-map-marker"></i> Edit 
@if($user->agency != null) Agency @elseif($user->client != null) Client @elseif($user->employee != null) Employee @endif
</a>

        @if($user->role_id != 2 || $user->agency !=null)       
        @if($user->agency != null)
         <a href="/dashboard/employeeSearch"  @if(Route::is('employeeSearch')) class="user_tab_active" @endif><i class="fa fa-plus"></i>Employee Search</a>

            <a href="/dashboard/add" > <i class="fa fa-plus-circle"></i>Send Invites</a>  
          @endif
        
                    <a href="all-in-one-calendar.htm" class=""><i class="fa fa-calendar"></i> All In One Calendar</a>
           
            
                    <a href="favorite-listings.htm" class=""><i class="fa fa-heart"></i> Favorites</a>
                                    <a href="/dashboard/offers" class=""><i class="fa fa-folder-open-o"></i> Offers</a>
                            <a href="my-reservations.htm" class=""><i class="fa fa-folder-open"></i> My Reservations</a>
           
            
                    <a href="inbox.htm" class=""><i class="fa fa-inbox"></i> My Inbox</a>
                    
                    <a href="invoices.htm" class=""><i class="fa fa-file-o"></i> Invoices</a>
        @endif
                    
        <a href="http://demo1.wprentals.org/wp-login.php?action=logout&amp;_wpnonce=bb300175b0" title="Logout"><i class="fa fa-power-off"></i> Log Out</a>
    </div>
      



</div> 
@endif  
    <div class=" dashboard-margin">
        
         @yield('content')
       
    </div>
</div>  

</div><!-- end content_wrapper started in header or full_width_row from prop list -->
    <script src="{{ asset('js/employeeEdit.js') }}"></script>

    <script src="{{ asset('tags-input.js') }}"></script>
    <link href="{{ asset('tags-input.css') }}"  rel="stylesheet">

<script type="text/javascript">
 

function change_checkbox(el){
  if(el.checked){
    document.getElementById(el.value+"_Div").style.display = "inline-block";
  }else{
    document.getElementById(el.value+"_Div").style.display = "none";
  }
}
</script>
<a href="#" class="backtop "><i class="fa fa-chevron-up"></i></a><script type="text/javascript" src="{{ asset('assets/js/core.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/widget.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/mouse.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/slider.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/datepicker.js')}}"></script>
<script type="text/javascript">
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type="text/javascript" src="{{ asset('assets/js/position.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/menu.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wp-a11y.js')}}"></script>
<script type="text/javascript">
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/js/autocomplete.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/js/dense.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/js/latinise.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/datepicker-en-GB.js')}}"></script>
<script type="text/javascript">
/* <![CDATA[ */
var googlecode_regular_vars = {"general_latitude":"40.781711","general_longitude":"-73.955927","path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals\/\/css\/css-images","markers":"[[\"Condo%20in%20Liberty%20State\",\"40.7075798804\",\"-74.0480232239\",1,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2016%2F08%2Fdemo68-400x314.jpg\",\"from%20%E2%82%AC%2067%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fcondo-in-liberty-state-park%2F\",6841,\"jersey-city\",\"liberty-state-park\",67,\"4\",\"1\",\"120\",\"Condos\",\"Private%20Room\",\"verified\"],[\"Apartment%20in%20Jersey%20City\",\"40.7281575\",\"-74.0776417\",2,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2016%2F08%2Froom-1-400x314.jpg\",\"%20%E2%82%AC%2015%20\",\"apartment\",\"entire-home\",\"apartmententire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fapartment-in-jersey-city%2F\",6832,\"jersey-city\",\"historic-center\",15,\"1\",\"1\",\"120\",\"Apartment\",\"Entire%20Home\",\"normal\"],[\"West%20Town%20Dorm\",\"39.2838253476\",\"-76.5767669678\",3,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo124-400x314.jpg\",\"%20%E2%82%AC%2023%20\",\"dorm\",\"shared-room\",\"dormshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fwest-town-3rd-floor-dorm%2F\",149,\"baltimore\",\"arlington\",23,\"1\",\"2\",\"250\",\"Dorm\",\"Shared%20Room\",\"normal\"],[\"Modern%20Spacious%20Villa\",\"40.7184746\",\"-73.9882516\",4,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2FApartment-by-the-Beach-03-400x314.jpg\",\"%20%E2%82%AC%20110%20\",\"villa\",\"entire-home\",\"villaentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fmodern-spacious-villa%2F\",141,\"new-york\",\"east-side\",110,\"2\",\"5\",\"2,500\",\"Villa\",\"Entire%20Home\",\"verified\"],[\"Huge%20Sunny%20Villa%20%26%238211%3B%20East%20Side\",\"40.7185382\",\"-73.9833874\",5,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo384-400x314.jpg\",\"%20%E2%82%AC%20500%20\",\"villa\",\"entire-home\",\"villaentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fhuge-sunny-villa-east-side%2F\",137,\"new-york\",\"east-side\",500,\"3\",\"12\",\"2,500\",\"Villa\",\"Entire%20Home\",\"normal\"],[\"Nice%20Terrace%20Condo%20Penn%20Station\",\"40.7274893\",\"-73.9950182\",6,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1114-400x314.jpg\",\"%20%E2%82%AC%20200%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fterrace-condo-penn-station%2F\",133,\"new-york\",\"manhattan\",200,\"2\",\"8\",\"1,200\",\"Condos\",\"Private%20Room\",\"normal\"],[\"2%20Bedrooms%20Video\",\"40.7067600713\",\"-74.0175533295\",7,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo56-400x314.jpg\",\"%20%E2%82%AC%20150%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2F2-bedrooms-condo%2F\",129,\"new-york\",\"bakery-park\",150,\"2\",\"7\",\"1,000\",\"Condos\",\"Private%20Room\",\"normal\"],[\"Summerlin%20Cabin%20%26%238211%3B%20Perfect%20Holiday\",\"39.9467266106\",\"-75.166053772\",8,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo554-400x314.jpg\",\"%20%E2%82%AC%2059%20\",\"cabin\",\"entire-home\",\"cabinentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fsummerlin-cabin-perfect-holiday%2F\",124,\"philadelphia\",\"brightwood\",59,\"2\",\"6\",\"750\",\"Cabin\",\"Entire%20Home\",\"normal\"],[\"Beautiful%20Cabin%2C%20Simple%20Price\",\"39.9350129604\",\"-75.0476074219\",9,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo110-400x314.jpg\",\"%20%E2%82%AC%2064%20\",\"cabin\",\"entire-home\",\"cabinentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fbeautiful-cabin-simple-price%2F\",119,\"philadelphia\",\"brightwood\",64,\"1\",\"5\",\"750\",\"Cabin\",\"Entire%20Home\",\"normal\"],[\"Victorian%20Bed%20%26%23038%3B%20Breakfast\",\"42.2814816\",\"-71.0956488\",10,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1114-400x314.jpg\",\"%20%E2%82%AC%2065%20\",\"b-b\",\"shared-room\",\"b-bshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fvictorian-bed-breakfast%2F\",115,\"boston\",\"mattapan\",65,\"1\",\"2\",\"450\",\"B%20%26amp%3B%20B\",\"Shared%20Room\",\"normal\"],[\"Beautiful%20Full%20Bed%20and%20Breakfast\",\"42.2814816\",\"-71.0956488\",11,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo179-400x314.jpg\",\"%20%E2%82%AC%2059%20\",\"b-b\",\"shared-room\",\"b-bshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fbeautiful-full-bed-breakfast%2F\",111,\"boston\",\"mattapan\",59,\"1\",\"2\",\"750\",\"B%20%26amp%3B%20B\",\"Shared%20Room\",\"normal\"],[\"Sunny%202%20Bedrooms%20Video\",\"38.9040587199\",\"-77.0333862305\",12,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo994-400x314.jpg\",\"%20%E2%82%AC%20225%20\",\"house\",\"private-room\",\"houseprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fsunny-2-bedrooms-in-the-haight%2F\",107,\"washington\",\"glover-park\",225,\"2\",\"4\",\"850\",\"House\",\"Private%20Room\",\"verified\"],[\"Chic%20Cole%20Valley%20House\",\"38.8225909762\",\"-104.4140625\",13,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo84-400x314.jpg\",\"%20%E2%82%AC%2040%20\",\"house\",\"private-room\",\"houseprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fchic-cole-valley-house%2F\",101,\"washington\",\"glover-park-washington\",40,\"2\",\"6\",\"850\",\"House\",\"Private%20Room\",\"normal\"],[\"Cozy%20House%20In%20The%20Sunnyside\",\"38.9029232243\",\"-77.0193099976\",14,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo95-400x314.jpg\",\"%20%E2%82%AC%2025%20\",\"apartment\",\"entire-home\",\"apartmententire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fcozy-house-in-the-sunnyside%2F\",94,\"washington\",\"wesley-heights\",25,\"1\",\"2\",\"750\",\"Apartment\",\"Entire%20Home\",\"normal\"],[\"Downtown%20apartment\",\"38.8909367934\",\"-76.9592446089\",15,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo37-400x314.jpg\",\"%20%E2%82%AC%2038%20\",\"apartment\",\"entire-home\",\"apartmententire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fdowntown-apartment%2F\",10,\"washington\",\"wesley-heights\",38,\"1\",\"2\",\"50\",\"Apartment\",\"Entire%20Home\",\"normal\"],[\"Allow%20Extra%20Guest%20in%20Booking\",\"39.3100537903\",\"-76.6572225094\",16,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1514-400x314.jpg\",\"%20%E2%82%AC%2025%20\",\"dorm\",\"shared-room\",\"dormshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fsunny-dorm-in-west-town%2F\",145,\"baltimore\",\"arlington\",25,\"1\",\"2\",\"500\",\"Dorm\",\"Shared%20Room\",\"normal\"]]","idx_status":"0","page_custom_zoom":"5","generated_pins":"0","on_demand_pins":"yes"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/js/google_map_code.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/oms.js')}}"></script>
<script type="text/javascript">
/* <![CDATA[ */
var mapfunctions_vars = {"path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals\/\/css\/css-images","pin_images":"{\"entire-home\":\"\",\"private-room\":\"\",\"shared-room\":\"\",\"apartment\":\"\",\"b-b\":\"\",\"cabin\":\"\",\"condos\":\"\",\"dorm\":\"\",\"house\":\"\",\"villa\":\"\",\"apartmententire-home\":\"\",\"b-bentire-home\":\"\",\"cabinentire-home\":\"\",\"condosentire-home\":\"\",\"dormentire-home\":\"\",\"houseentire-home\":\"\",\"villaentire-home\":\"\",\"apartmentprivate-room\":\"\",\"b-bprivate-room\":\"\",\"cabinprivate-room\":\"\",\"condosprivate-room\":\"\",\"dormprivate-room\":\"\",\"houseprivate-room\":\"\",\"villaprivate-room\":\"\",\"apartmentshared-room\":\"\",\"b-bshared-room\":\"\",\"cabinshared-room\":\"\",\"condosshared-room\":\"\",\"dormshared-room\":\"\",\"houseshared-room\":\"\",\"villashared-room\":\"\",\"userpin\":\"\"}","geolocation_radius":"1000","adv_search":"0","in_text":" in ","zoom_cluster":"15","user_cluster":"yes","open_close_status":"0","open_height":"650","closed_height":"550","generated_pins":"0","geo_no_pos":"The browser couldn't detect your position!","geo_no_brow":"Geolocation is not supported by this browser.","geo_message":"m radius","show_adv_search":"yes","custom_search":"no","listing_map":"top","slugs":[],"hows":[],"measure_sys":"m","close_map":"close map","show_g_search_status":"no","slider_price":"no","slider_price_position":"0","map_style":"[{\"featureType\":\"administrative\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"administrative\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#716464\"},{\"weight\":\"0.01\"}]},{\"featureType\":\"administrative.country\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"landscape.natural\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"landscape.natural.landcover\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi.attraction\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"simplified\"},{\"color\":\"#a05519\"},{\"saturation\":\"-13\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fff100\"}]},{\"featureType\":\"road.local\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"transit\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"transit.station\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"},{\"color\":\"#84afa3\"},{\"lightness\":52}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"water\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"}]}]","is_tax":"0","is_property_list":"0","bypass_fit_bounds":"0"};
/* ]]> */
</script>

<script type="text/javascript">
/* <![CDATA[ */
var control_vars = {"searchtext":"SEARCH","searchtext2":"Search here...","path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals","search_room":"Type Bedrooms No.","search_bath":"Type Bathrooms No.","search_min_price":"Type Min. Price","search_max_price":"Type Max. Price","contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","zillow_addres":"Your Address","zillow_city":"Your City","zillow_state":"Your State Code (ex CA)","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","login_redirect":"http:\/\/demo1.wprentals.org\/my-profile\/","login_loading":"Sending user info, please wait...","street_view_on":"Street View","street_view_off":"Close Street View","userid":"1657","show_adv_search_map_close":"yes","close_map":"close map","open_map":"open map","fullscreen":"Fullscreen","default":"Default","addprop":"Please wait while we are processing your submission!","deleteconfirm":"Are you sure you wish to delete?","terms_cond":"You must to agree with terms and conditions!","slider_min":"0","slider_max":"1000","bookconfirmed":"Booking request sent. Please wait for owner's confirmation!","bookdenied":"The selected period is already booked. Please choose a new one!","to":"to","curency":"\u20ac","where_curency":"before","price_separator":".","datepick_lang":"en-GB","custom_price":"\"\"","booking_array":"\"\"","default_price":"","transparent_logo":"http:\/\/demo1.wprentals.org\/wp-content\/uploads\/2015\/08\/logo_transparent313.png","normal_logo":"","cleaning_fee_per_day":"0","city_fee_per_day":"0","price_per_guest_from_one":"0","checkin_change_over":"0","checkin_checkout_change_over":"0","min_days_booking":"0","extra_price_per_guest":"0","price_per_weekeend":"0","setup_weekend_status":"0","mega_details":"\"\"","mindays":"The selected period is shorter than the minimum required period!","weekdays":"[\"None\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]","stopcheckin":"Check in date is not correct","stopcheckinout":"Check in\/Check out dates are not correct","from":"from","separate_users":"yes","captchakey":"6LfneyYTAAAAAIpnhd5-QwOxcxCWLAJtqLFQeTtk","usecaptcha":"yes","unavailable_check":"Unavailable\/Only Check Out","unavailable":"Unavailable","submission_curency":"USD","direct_price":"To be paid","send_invoice":"Send me the invoice","direct_pay":"Payment info: WP RENTALS Inc.  NY99BONW5558887777 -  Include Invoice number in payment details. ","direct_title":"Direct payment instructions","direct_thx":"Thank you. Please check your email for payment instructions.","guest_any":"any","my_reservations_url":"http:\/\/demo1.wprentals.org\/my-reservations\/","pls_wait":"processing, please wait...","wp_estate_book_down":"0","wp_estate_book_down_fixed_fee":"0","include_expeses":"no"};
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var ajaxcalls_vars = {"contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","login_redirect":"http:\/\/demo1.wprentals.org\/my-profile\/","login_loading":"Sending user info, please wait...","userid":"1657","prop_featured":"Property is featured","no_prop_featured":"You have used all the \"Featured\" listings in your package.","favorite":"Favorite<i class=\"fa fa-heart\"><\/i>","add_favorite":"Add to Favorites","remove_favorite":"remove from favorites","add_favorite_unit":"add to favorites","saving":"saving..","sending":"sending message..","reserve":"Reserve Period","paypal":"Connecting to Paypal! Please wait...","stripecancel":"subscription will be cancelled at the end of the current period"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/js/ajaxcalls.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/comment-reply.js')}}"></script>
<script type="text/javascript">
/* <![CDATA[ */
var dashboard_vars = {"deleting":"deleting...","searchtext2":"Search here...","currency_symbol":"USD","where_currency_symbol":"before","book_down":"0","book_down_fixed_fee":"0","discount":"Discount","delete_inv":"Delete Invoice","issue_inv":"Invoice Issued","confirmed":"Confirmed","issue_inv1":"Issue invoice","sending":"sending...","plsfill":"Please fill in all the fields","datesb":"Dates are already booked. Please check the calendar for free days!","datepast":"You cannot select a date in the past! ","bookingstart":"Start date cannot be greater than end date !","selectprop":"Please select a property !","err_title":"Please submit a title !","err_category":"Please pick a category !","err_type":"Please pick a typr !","err_guest":"Please select the guest no !","err_city":"Please pick a city !","doublebook":"This period is already booked","deleted_feed":"Delete imported dates","sent":"done","service_fee_fixed_fee":"0","service_fee":"0"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/js/dashboard-control.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wp-embed.js')}}"></script>


</div> <!-- end class container -->


</div> <!-- end website wrapper -->


</body></html>