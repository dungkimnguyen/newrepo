@extends('layouts.home')

@section('header')
    <title>Zinterim :: Ondemand Workforce Marketplace</title>
<meta name='robots' content='noindex,follow' />

    <link href="{{ asset('css/font-awesome.min.css') }}"  rel="stylesheet">


    <script src="{{ asset('js/jquery.bxslider.js') }}"></script>
    <script src="{{ asset('js/homepage.js') }}"></script>

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/icofont.css">
  <link rel="stylesheet" href="assets/css/tabe.min.css">
  <link rel="stylesheet" href="tab_style.css">

<link rel='dns-prefetch' href='http://maps.googleapis.com/' />
<link rel='dns-prefetch' href='http://www.google.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="demo 1 &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="demo 1 &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="demo 1 &raquo; Homepage Version 3 &#8211; Revolution Slider Comments Feed" href="homepage-version-3-theme-slider-header/feed/index.html" />
    <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo1.wprentals.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8"}};
      !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
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
<link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/public/assets/css/settings9009.css?ver=5.4.5.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel='stylesheet' id='chld_thm_cfg_parent-css'  href='wp-content/themes/wprentals/styleef15.css?ver=4.8' type='text/css' media='all' />

<link rel='stylesheet' id='wpestate_media-css'  href='wp-content/themes/wprentals/css/my_media5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='chld_thm_cfg_parent-css'  href='../wp-content/themes/wprentals/MS_125.css' type='text/css' media='all' />


<link rel='stylesheet' id='wpestate_style-css'  href='wp-content/themes/wprentals-child/style5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate_jquery.ui.theme-css'  href='wp-content/themes/wprentals/css/jquery-ui.minef15.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate-railway-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A500%2C600%2C400%2C700%2C800&amp;subset=latin%2Clatin-ext&amp;ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate-opensans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C300&amp;subset=latin%2Clatin-ext&amp;ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='wp-content/uploads/js_composer/js_composer_front_custom3c21.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bsf-Defaults-css'  href='wp-content/uploads/smile_fonts/Defaults/Defaultsef15.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-style-min-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.minf28f.css?ver=3.16.12' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min9009.js?ver=5.4.5.1'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min9009.js?ver=5.4.5.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/bootstrap.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/jquery.viewport.mini5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/modernizr.custom.624565152.js?ver=1.0'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?libraries=places&amp;language=en&amp;key&amp;ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate.minf28f.js?ver=3.16.12'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedba96.json?url=http%3A%2F%2Fdemo1.wprentals.org%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1635?url=http%3A%2F%2Fdemo1.wprentals.org%2F&amp;format=xml" />
<style type='text/css'>
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
    color: grey;
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
    color: white;
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
    #colophon {background-color: #282D33;}#colophon, #colophon a, #colophon li a,.widget-title-footer {color: white;}.sub_footer, .subfooter_menu a, .subfooter_menu li a {color: white!important;}.twitter_wrapper,.booking_form_request, .loginwd_sidebar .widget-title-sidebar, .advanced_search_sidebar .widget-title-sidebar,.advanced_search_sidebar,.loginwd_sidebar {background-color: #fdfdfd;}.widget-title-sidebar,.agent_listings_title_similar{color: #3A404D;}.wpestate_recent_tweets h3,.loginwd_sidebar .widget-title-sidebar, .advanced_search_sidebar .widget-title-sidebar{color: #3A404D;}#primary,#primary a,#primary label {color: #888C8E;}.filter_menu li:hover,#access .sub-menu li:hover>a, #access .sub-menu li:hover>a:active, #access .sub-menu li:hover>a:focus {color: #74B097;}.top_bar_wrapper{background-color:#fdfdfd;}.top_bar,.top_bar a{color:#1a171b;}.featured_article_title,
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


 </style><meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo1.wprentals.org/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.5.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;         
          if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})          
        }catch(d){console.log("Failure at Presize of Slider:"+d)}
      };</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1451656791705{padding-top: 60px !important;padding-bottom: 60px !important;}.vc_custom_1443689342618{padding-bottom: 15px !important;}.vc_custom_1440677774186{padding-right: 2.5px !important;padding-left: 0px !important;}.vc_custom_1438782048463{padding-right: 2.5px !important;padding-left: 2.5px !important;}.vc_custom_1440677781873{padding-right: 0px !important;padding-left: 2.5px !important;}.vc_custom_1440677774186{padding-right: 2.5px !important;padding-left: 0px !important;}.vc_custom_1438782048463{padding-right: 2.5px !important;padding-left: 2.5px !important;}.vc_custom_1440677774186{padding-right: 2.5px !important;padding-left: 0px !important;}.vc_custom_1438782048463{padding-right: 2.5px !important;padding-left: 2.5px !important;}.vc_custom_1440426329136{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><link rel="shortcut icon" href="wp-content/themes/wprentals/img/favicon.gif" type="image/x-icon" />        
        
        
        
        
    </head>
@endsection


@section('bodyClass') class="home page-template-default page page-id-444 wpb-js-composer js-comp-ver-5.1.1 vc_responsive" @endsection

@section('wrapperClass')  
              
        <div class="website-wrapper " id="all_wrapper">
            <div class="container main_wrapper  wide is_dashboard_page ">




@endsection

@section('navClass') style="background-color: transparent;position: absolute;min-width: 100%"  @endsection

@section('content')
        
<div class="header_media">
<link href="http://fonts.googleapis.com/css?family=Raleway:800%2C500%2C400%2C600" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#595959;padding:0px;margin-top:0px;margin-bottom:0px;background-image:url(wp-content/uploads/revslider/video/notgeneric_bg1.jpg);background-repeat:no-repeat;background-size:cover;background-position:center center;">
<!-- START REVOLUTION SLIDER 5.4.5.1 auto mode -->
  <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.5.1">
<ul>  <!-- SLIDE  -->
  <li data-index="rs-1" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="http://demo1.wprentals.org/wp-content/uploads/revslider/video/notgeneric_bg1-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
    <img src="wp-content/uploads/revslider/video/notgeneric_bg1.jpg"  alt="" title="Homepage Version 3 &#8211; Revolution Slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
       id="slide-1-layer-1" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-33','0','0','0']" 
            data-fontsize="['70','70','70','45']"
      data-lineheight="['70','70','70','50']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[10,10,10,10]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[10,10,10,10]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 5; white-space: nowrap;text-transform:left;">Book the perfect employee</div>

    <!-- LAYER NR. 2 -->
    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
       id="slide-1-layer-4" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['20','52','52','51']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 6; white-space: nowrap;text-transform:left;font-size: 16px;margin: auto auto">short term or long term/temporary or contract work</div>

    <!-- LAYER NR. 3 -->
    <div class="tp-caption NotGeneric-Icon   tp-resizeme" 
       id="slide-1-layer-8" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-100','-68','-68','-68']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 7; white-space: nowrap;text-transform:left;cursor:default;font-size: 16px;margin: auto auto"><!--i class="pe-7s-compass"--></i> </div>

    <!-- LAYER NR. 4 -->
    <!--<div class="tp-caption Gym-Button-Light rev-btn " 
       id="slide-1-layer-7" 
       data-x="['center','center','center','center']" data-hoffset="['-2','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['96','124','124','123']" 
            data-fontsize="['15','14','14','14']"
      data-lineheight="['15','14','14','14']"
      data-fontweight="['600','500','500','500']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="button" 
      data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
      data-responsive_offset="on" 
      data-responsive="off"
      data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bc:rgba(116,176,151,1);bw:2px 2px 2px 2px;"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[12,12,12,12]"
      data-paddingright="[35,35,35,35]"
      data-paddingbottom="[12,12,12,12]"
      data-paddingleft="[35,35,35,35]"

      style="z-index: 8; white-space: nowrap;text-transform:left;border-color:rgba(255,255,255,0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">NEXT GOODIE </div>-->

    <!-- LAYER NR. 5 -->
    <!--<div class="tp-caption rev-scroll-btn " 
       id="slide-1-layer-9" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" 
            data-width="35"
      data-height="55"
      data-whitespace="nowrap"
 
      data-type="button" 
      data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
      data-basealign="slide" 
      data-responsive_offset="off" 
      data-responsive="off"
      data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">             
              <span>
              </span>             
             </div>-->
  </li>
  <!-- SLIDE  -->
  <li data-index="rs-2" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="http://demo1.wprentals.org/wp-content/uploads/revslider/video/notgeneric_bg5-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Chill" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
    <img src="wp-content/uploads/revslider/video/notgeneric_bg5.jpg"  alt="" title="Homepage Version 3 &#8211; Revolution Slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 6 -->
    <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3" 
       id="slide-2-layer-1" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-33','0','0','0']" 
            data-fontsize="['70','70','70','45']"
      data-lineheight="['70','70','70','50']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[10,10,10,10]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[10,10,10,10]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 10; white-space: nowrap;text-transform:left;">Cool Effects </div>

    <!-- LAYER NR. 7 -->
    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2" 
       id="slide-2-layer-4" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['20','52','52','51']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 11; white-space: nowrap;text-transform:left;">REVOLUTION SLIDER TEMPLATE </div>

    <!-- LAYER NR. 8 -->
    <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-1" 
       id="slide-2-layer-8" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-100','-68','-68','-68']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 12; white-space: nowrap;text-transform:left;cursor:default;"><i class="pe-7s-mouse"></i> </div>

    <!-- LAYER NR. 9 -->
    <div class="tp-caption Gym-Button-Light rev-btn " 
       id="slide-2-layer-7" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['94','124','124','123']" 
            data-fontsize="['15','14','14','14']"
      data-lineheight="['15','14','14','14']"
      data-fontweight="['600','500','500','500']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="button" 
      data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
      data-responsive_offset="on" 
      data-responsive="off"
      data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bc:rgba(116,176,151,1);bw:2px 2px 2px 2px;"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[12,12,12,12]"
      data-paddingright="[35,35,35,35]"
      data-paddingbottom="[12,12,12,12]"
      data-paddingleft="[35,35,35,35]"

      style="z-index: 13; white-space: nowrap;text-transform:left;border-color:rgba(255,255,255,0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">NEXT GOODIE </div>

    <!-- LAYER NR. 10 -->
    <div class="tp-caption rev-scroll-btn " 
       id="slide-2-layer-9" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" 
            data-width="35"
      data-height="55"
      data-whitespace="nowrap"
 
      data-type="button" 
      data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
      data-basealign="slide" 
      data-responsive_offset="off" 
      data-responsive="off"
      data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 14; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">              
              <span>
              </span>             
             </div>

    <!-- LAYER NR. 11 -->
    <div class="tp-caption   tp-resizeme rs-parallaxlevel-8" 
       id="slide-2-layer-10" 
       data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
       data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="image" 
      data-responsive_offset="on" 

      data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 15;text-transform:left;">
<div class="rs-looped rs-pendulum"  data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="wp-content/uploads/revslider/video/blurflake4.png" alt="" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" width="240" height="240" data-no-retina> </div></div>

    <!-- LAYER NR. 12 -->
    <div class="tp-caption   tp-resizeme rs-parallaxlevel-7" 
       id="slide-2-layer-11" 
       data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
       data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="image" 
      data-responsive_offset="on" 

      data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 16;text-transform:left;">
<div class="rs-looped rs-wave"  data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="wp-content/uploads/revslider/video/blurflake3.png" alt="" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" width="170" height="170" data-no-retina> </div></div>

    <!-- LAYER NR. 13 -->
    <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" 
       id="slide-2-layer-12" 
       data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
       data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="image" 
      data-responsive_offset="on" 

      data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 17;text-transform:left;">
<div class="rs-looped rs-rotate"  data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="wp-content/uploads/revslider/video/blurflake2.png" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" width="50" height="51" data-no-retina> </div></div>

    <!-- LAYER NR. 14 -->
    <div class="tp-caption   tp-resizeme rs-parallaxlevel-6" 
       id="slide-2-layer-13" 
       data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
       data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="image" 
      data-responsive_offset="on" 

      data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 18;text-transform:left;">
<div class="rs-looped rs-wave"  data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="wp-content/uploads/revslider/video/blurflake1.png" alt="" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" width="120" height="120" data-no-retina> </div></div>
  </li>
  <!-- SLIDE  -->
  <li data-index="rs-3" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="http://demo1.wprentals.org/wp-content/uploads/revslider/video/notgeneric_bg2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Enjoy Nature" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
    <img src="wp-content/uploads/revslider/video/notgeneric_bg2.jpg"  alt="" title="Homepage Version 3 &#8211; Revolution Slider"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 15 -->
    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
       id="slide-3-layer-1" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-33','0','0','0']" 
            data-fontsize="['70','70','70','45']"
      data-lineheight="['70','70','70','50']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[10,10,10,10]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[10,10,10,10]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 19; white-space: nowrap;text-transform:left;">Prime Quality </div>

    <!-- LAYER NR. 16 -->
    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
       id="slide-3-layer-4" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['20','52','52','51']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 20; white-space: nowrap;text-transform:left;">REVOLUTION SLIDER TEMPLATE </div>

    <!-- LAYER NR. 17 -->
    <div class="tp-caption NotGeneric-Icon   tp-resizeme" 
       id="slide-3-layer-8" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-100','-68','-68','-68']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 21; white-space: nowrap;text-transform:left;cursor:default;"><i class="pe-7s-expand1"></i> </div>

    <!-- LAYER NR. 18 -->
    <div class="tp-caption Gym-Button-Light rev-btn " 
       id="slide-3-layer-7" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['94','124','124','123']" 
            data-fontsize="['15','14','14','14']"
      data-lineheight="['15','14','14','14']"
      data-fontweight="['600','500','500','500']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="button" 
      data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
      data-responsive_offset="on" 
      data-responsive="off"
      data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bc:rgba(116,176,151,1);bw:2px 2px 2px 2px;"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[12,12,12,12]"
      data-paddingright="[35,35,35,35]"
      data-paddingbottom="[12,12,12,12]"
      data-paddingleft="[35,35,35,35]"

      style="z-index: 22; white-space: nowrap;text-transform:left;border-color:rgba(255,255,255,0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">GET IT NOW </div>

    <!-- LAYER NR. 19 -->
    <div class="tp-caption rev-scroll-btn " 
       id="slide-3-layer-9" 
       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
       data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" 
            data-width="35"
      data-height="55"
      data-whitespace="nowrap"
 
      data-type="button" 
      data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
      data-basealign="slide" 
      data-responsive_offset="off" 
      data-responsive="off"
      data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"}]'
      data-textAlign="['left','left','left','left']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 23; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">              
              <span>
              </span>             
             </div>
  </li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=".tp-caption.NotGeneric-Title,.NotGeneric-Title{color:rgba(255,255,255,1.00);font-size:70px;line-height:70px;font-weight:800;font-style:normal;font-family:Raleway;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.NotGeneric-SubTitle,.NotGeneric-SubTitle{color:rgba(255,255,255,1.00);font-size:13px;line-height:20px;font-weight:500;font-style:normal;font-family:Raleway;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:4px}.tp-caption.NotGeneric-Icon,.NotGeneric-Icon{color:rgba(255,255,255,1.00);font-size:30px;line-height:30px;font-weight:400;font-style:normal;font-family:Raleway;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0);border-style:solid;border-width:0px;border-radius:0px 0px 0px 0px;letter-spacing:3px}.tp-caption.Gym-Button-Light,.Gym-Button-Light{color:rgba(255,255,255,1.00);font-size:15px;line-height:15px;font-weight:600;font-style:normal;font-family:Raleway;text-decoration:none;background-color:transparent;border-color:rgba(255,255,255,0.25);border-style:solid;border-width:2px;border-radius:30px 30px 30px 30px}.tp-caption.Gym-Button-Light:hover,.Gym-Button-Light:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:rgba(114,168,0,0);border-color:rgba(139,192,39,1.00);border-style:solid;border-width:2px;border-radius:30px 30px 30px 30px;cursor:pointer}";
        if(htmlDiv) {
          htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }else{
          var htmlDiv = document.createElement("div");
          htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
          document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
      </script>
    <script type="text/javascript">
setREVStartSize({c: jQuery('#rev_slider_1_1'), responsiveLevels: [1240,1024,778,480], gridwidth: [1920,1024,778,480], gridheight: [700,650,960,720], sliderLayout: 'auto'});
      
var revapi1,
  tpj=jQuery;
      
tpj(document).ready(function() {
  if(tpj("#rev_slider_1_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_1_1");
  }else{
    revapi1 = tpj("#rev_slider_1_1").show().revolution({
      sliderType:"standard",
      jsFileLocation:"//demo1.wprentals.org/wp-content/plugins/revslider/public/assets/js/",
      sliderLayout:"auto",
      dottedOverlay:"none",
      delay:9000,
      navigation: {
        keyboardNavigation:"off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation:"off",
              mouseScrollReverse:"default",
        onHoverStop:"off",
        touch:{
          touchenabled:"on",
          touchOnDesktop:"off",
          swipe_threshold: 75,
          swipe_min_touches: 1,
          swipe_direction: "horizontal",
          drag_block_vertical: false
        }
      },
      responsiveLevels:[1240,1024,778,480],
      visibilityLevels:[1240,1024,778,480],
      gridwidth:[1920,1024,778,480],
      gridheight:[700,650,960,720],
      lazyType:"none",
      parallax: {
        type:"mouse",
        origo:"slidercenter",
        speed:2000,
        speedbg:0,
        speedls:0,
        levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
        disable_onmobile:"on"
      },
      shadow:0,
      spinner:"off",
      stopLoop:"on",
      stopAfterLoops:0,
      stopAtSlide:1,
      shuffle:"off",
      autoHeight:"off",
      disableProgressBar:"on",
      hideThumbsOnMobile:"off",
      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      debugMode:false,
      fallbacks: {
        simplifyAll:"off",
        nextSlideOnWindowFocus:"off",
        disableFocusListener:false,
      }
    });
  }
  
}); /*ready*/
</script>
    </div><!-- END REVOLUTION SLIDER -->

    <div class="search_wrapper advpos_revslider" id="search_wrapper">
        
 
 <div class="adv-1-wrapper"> 
    </div>  

<div class="adv-search-1   " id="adv-search-1" data-postid="444"> 

  
       <form  method="get"  id="main_search" action="/search" >
                <div class="col-md-4 map_icon">    
            <input type="hidden" class="stype" id="stype" name="stype" value="tax">    
                    <input type="text"    id="search_location_autointernal"      class="form-control" name="title" placeholder="What position/skills are you looking for?" value="" >              
            <input type="hidden" id="advanced_city"      class="form-control" name="advanced_city" data-value=""   value="" >              
            <input type="hidden" id="advanced_area"      class="form-control" name="advanced_area"   data-value="" value="" >              
            <input type="hidden" id="advanced_country"   class="form-control" name="advanced_country"   data-value="" value="" >              
            <input type="hidden" id="property_admin_area" name="property_admin_area" value="">
     
            
        </div>



        <div style="display:none;" id="searchmap"></div>
        

 <div class="col-md-2 has_calendar calendar_icon">
            <input type="text" id="check_in"    class="form-control " name="start_date"  placeholder="Start Date" 
                value="" >       
        </div>
        
        <div class="col-md-2  has_calendar calendar_icon">
            <input type="text" id="check_out"    class="form-control" name="end_date" placeholder="End Date" 
                value="">
        </div>
        
 <div class="col-md-2 map_icon">    
       <input type="text"    id="search_location_autointernal"      class="form-control" name="zip" placeholder="Zip Code" value="" >              
            </div>




            
        <div class="col-md-2">
        <input name="submit" type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" id="advanced_submit_2" value="Search">
        </div>
              

</div>  
   </div>
   
</div>



<div id="adv-search-header-mobile"> 
    Advanced Search 
</div>   




<div class="adv-search-mobile"  id="adv-search-mobile"> 
   
    <form method="get"  id="form-search-mobile" action="http://demo1.wprentals.org/advanced-search/" >
                <div class="col-md-4 map_icon">  
            <input type="hidden" class="stype" id="stype" name="stype" value="tax">            
            <input type="text" id="search_location_mobile_autointernal"      class="form-control" name="search_location" placeholder="Where are you going?" value="" >              
            <input type="hidden" id="advanced_city_mobile"      class="form-control" name="advanced_city" data-value=""   value="" >              
            <input type="hidden" id="advanced_area_mobile"      class="form-control" name="advanced_area"   data-value="" value="" >              
            <input type="hidden" id="advanced_country_mobile"   class="form-control" name="advanced_country"   data-value="" value="" >              
             <input type="hidden" id="property_admin_area_mobile" name="property_admin_area" value="">
        </div>
        
        <div class="col-md-2 has_calendar calendar_icon">
            <input type="text" id="check_in_mobile"    class="form-control " name="check_in"  placeholder="Check in" value="" >       
        </div>
        
        <div class="col-md-2  has_calendar calendar_icon">
            <input type="text" id="check_out_mobile" disabled  class="form-control" name="check_out" placeholder="Check Out" value="">
        </div>
        
        <div class="col-md-2">
            <div class="dropdown form-control guest_form">
                <div data-toggle="dropdown" id="guest_no_mobile" class="filter_menu_trigger" data-value="all"> Guests <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="guest_no" id="guest_no_main_mobile" value="">
                <ul  class="dropdown-menu filter_menu"  id="guest_no_main_list_mobile" role="menu" aria-labelledby="guest_no_mobile">
                    <li role="presentation" data-value="0">any</li><li role="presentation" data-value="1">1 guest</li><li role="presentation" data-value="2">2 guests</li><li role="presentation" data-value="3">3 guests</li><li role="presentation" data-value="4">4 guests</li><li role="presentation" data-value="5">5 guests</li><li role="presentation" data-value="6">6 guests</li><li role="presentation" data-value="7">7 guests</li><li role="presentation" data-value="8">8 guests</li><li role="presentation" data-value="9">9 guests</li><li role="presentation" data-value="10">10 guests</li><li role="presentation" data-value="11">11 guests</li><li role="presentation" data-value="12">12 guests</li><li role="presentation" data-value="13">13 guests</li><li role="presentation" data-value="14">14 guests</li>                </ul>        
            </div>
        </div>
        
        <div class="col-md-2">
            <input name="submit" type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" id="advanced_submit_2_mobile" value="Search">
        </div>
    </form>   
</div>  


  <div class="content_wrapper  row ">
              
<div id="post" class="row  post-358 page type-page status-publish hentry">
    
      <div class=" col-md-12 ">
        

  <div class="wpb_text_column wpb_content_element  vc_custom_1443689342618 frontheading vc_column_text" >
    <div class="wpb_wrapper">
      <h1 style="text-align: center; margin-bottom: 2em;margin-top: 2em">How Zinterim Works!<!--<span style="color: #0082f9"></span> <span style="color:#00be9d"></span> --></h1> 
<style type="text/css">
  
  .bx-controls-direction
{
  display: none;
}

.specialBTN{
    border-radius: 25px;
    background: #fff;
    padding: .5em; 
    padding-left: 0px;
    padding-right: 0px;
    margin-right: 1em;   
    margin-bottom: 3em;
}
.active
{
  font-weight: bold;
  color:#3A404D;
}

</style>
<div class="subheading">
<!--
  <div class="col-md-12">

  <div class="slider">
    <div >
      <div class="col-md-12" style="margin-top: 2em">
        <div class="col-md-3">
          <span class="fa fa-user-o fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-file-text-o fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-handshake-o fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-wifi fa-lg"></span>
        </div>

      </div>

      <div class="col-md-12">
    
        <div class="col-md-3">
          Sign up with Zinterim
        </div>
        <div class="col-md-3">
          Upload employee information
        </div>
        <div class="col-md-3">
          Connect to agency employers and employees
        </div>
        <div class="col-md-3">
          Broadcast employee work profiles to your employers seeking talent
        </div>

      </div>

      </div>

<div>
      <div class="col-md-12" style="margin-top: 2em">
        <div class="col-md-3">
          <span class="fa fa-user-o fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-handshake-o fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-suitcase fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-search-plus fa-lg"></span>
        </div>
              </div>

      <div class="col-md-12">
        <div class="col-md-3">
          Sign up via staffing agency invitation
        </div>
        <div class="col-md-3">
          Connect to staffing agency
        </div>
        <div class="col-md-3">
          Create employer workplace profile
        </div>
        <div class="col-md-3">
          Search through employee work profiles and book talent right now
        </div>

      </div>
      </div>

      <div>
      <div class="col-md-12" style="margin-top: 2em">
        <div class="col-md-3">
          <span class="fa fa-user-o fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-download fa-lg"></span>
        </div>
        <div class="col-md-3">
          <span class="fa fa-id-card-o fa-lg"></span>
        </div>
        <div class="col-md-3">
                   <span class="fa fa-thumbs-o-up fa-lg"></span>
 <span class="fa fa-thumbs-o-down fa-lg"></span>
        </div>
              </div>


      <div class="col-md-12">
        <div class="col-md-3">
          Sign up via staffing agency invitation
        </div>
        <div class="col-md-3">
          Download Zinterim mobile app
        </div>
        <div class="col-md-3">
          Configure employment preferencese
        </div>
        <div class="col-md-3">
          Review and accept job offers to do work you love on your terms
        </div>

      </div>
      </div>

    </div>
 

  </div>
  -->

<div class="col-md-12" style="min-height:365px">
            <div class="single_tab tab_style_1 view1">

            <ul class="tabe_tabs_menu">
                  <li class="active"><a href="#tab-2">Staffing Agency</a></li>
                  <li><a href="#tab-3">Employers/Clients</a></li>
                  <li><a href="#tab-4">Employees</a></li>
              </ul>
              <div class="tabe_tab">
                  <div id="tab-2" class="tabe_tab_content active">
            <div >
      <div class="col-md-12" style="margin-top: 4em">
        <div class="col-md-3">
          <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Signup.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                   <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/upload_emp.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                   <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Connect.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                  <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Broadcast.png"/> 
</div>
</div>
</div>
</div>
        </div>

      </div>

      <div class="col-md-12">
    
        <div class="col-md-3">
          Sign up with Zinterim
        </div>
        <div class="col-md-3">
          Upload employee information
        </div>
        <div class="col-md-3">
          Connect to agency employers and employees
        </div>
        <div class="col-md-3">
          Broadcast employee work profiles to your employers seeking talent
        </div>

      </div>

      </div>
                  </div>
                  <div id="tab-3" class="tabe_tab_content">
                    
<div>
      <div class="col-md-12" style="margin-top: 4em">
         <div class="col-md-3">
          <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Signup.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                   <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Connect.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                   <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/create_workProfile.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                  <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Broadcast.png"/> 
</div>
</div>
</div>
</div>
        </div>

              </div>

      <div class="col-md-12">
        <div class="col-md-3">
          Sign up via staffing agency invitation
        </div>
        <div class="col-md-3">
          Connect to staffing agency
        </div>
        <div class="col-md-3">
          Create employer workplace profile
        </div>
        <div class="col-md-3">
          Broadcast employee work profiles to your employers seeking talent
        </div>

      </div>
      </div>
                  </div>
                  <div id="tab-4" class="tabe_tab_content">
                                <div >
      <div class="col-md-12" style="margin-top: 4em">
               <div class="col-md-3">
          <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/Signup.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                   <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/mobileAPP.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                   <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/empPref.png"/> 
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-3">
                  <div class="aio-icon-default">
<div class="ult-just-icon-wrapper   just_icon">
<div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:70px;display:inline-block;" >
   <img class="img-icon" alt="" src="/img/reviewJobs.png"/> 
</div>
</div>
</div>
</div>
        </div>


      </div>

      <div class="col-md-12">
    
        <div class="col-md-3">
          Sign up via staffing agency invitation
        </div>
        <div class="col-md-3">
          Download Zinterim mobile app
        </div>
        <div class="col-md-3">
          Configure employment preferences
        </div>
        <div class="col-md-3">
          Review and accept job offers to do work you love on your terms
        </div>

      </div>

      </div>
                  </div>
              </div>
          </div>
</div>


  </div>

</div>

    </div>
  </div>

</div>
</div>
</div>



<!--
<div class="vc_row wpb_row vc_row-fluid wpestate_row vc_row"><div class="wpb_column vc_column_container vc_col-sm-12 vc_column"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="spacer" style="height:40px;"></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid wpestate_row vc_row"><div class="wpb_column vc_column_container vc_col-sm-12 vc_column"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="article_container slider_container bottom-estate_property nobutton" ><div class="slider_control_left"><i class="fa fa-angle-left"></i></div>
                       <div class="slider_control_right"><i class="fa fa-angle-right"></i></div><h1 class="shortcode_title title_slider">Featured Listings</h1><div class="shortcode_slider_wrapper"  data-auto="10000" ><ul class="shortcode_slider_list"><li>  



<div class="listing_wrapper col-md- shortcode-col  ssx property_flex " data-org="4" data-listid="6841" > 
    <div class="property_listing " data-link="properties/condo-in-liberty-state-park/index.html">
                
          
            <div class="listing-unit-img-wrapper">
                                    <div class="cross"></div>
                    <a href="properties/condo-in-liberty-state-park/index.html"><img src="wp-content/uploads/2016/08/demo68-400x314.jpg"   class="b-lazy img-responsive wp-post-image lazy-hidden" alt="no thumb" /></a> 
                            </div>
          
                 
            <div class="featured_div">featured</div><div class=" property_status status_verified">verified</div>          
            <div class="title-container">
                <div class="price_unit_wrapper">
                    <div class="price_unit">
                        from € 67                     </div> 
                </div>
                
                <a href="owners/johndemo/index.html" class="owner_thumb" style="background-image: url('wp-content/uploads/2015/11/590_429_profile4-60x60.jpg')"></a>
           
                <div class="category_name">
                    <a href="properties/condo-in-liberty-state-park/index.html" class="listing_title_unit">
                        Condo in Liberty State                    </a>
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_pin.png"  alt="location">
                       
                        <a href="area/liberty-state-park/index.html" rel="tag">Liberty State Park</a>, <a href="city/jersey-city/index.html" rel="tag">Jersey City</a>                    </div>
                    
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_category.png"  alt="location">
                        <a href="listings/condos/index.html" rel="tag">Condos</a> / <a href="action/private-room/index.html" rel="tag">Private room</a>                    </div>
                </div>
                
                <div class="property_unit_action">
                    <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="6841"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        
        
        </div>          
    </div></li><li>  



<div class="listing_wrapper col-md- shortcode-col  ssx property_flex " data-org="4" data-listid="6832" > 
    <div class="property_listing " data-link="properties/apartment-in-jersey-city/index.html">
                
          
            <div class="listing-unit-img-wrapper">
                                    <div class="cross"></div>
                    <a href="properties/apartment-in-jersey-city/index.html"><img src="wp-content/uploads/2016/08/room-1-400x314.jpg"   class="b-lazy img-responsive wp-post-image lazy-hidden" alt="no thumb" /></a> 
                            </div>
          
                 
            <div class="featured_div">featured</div>          
            <div class="title-container">
                <div class="price_unit_wrapper">
                    <div class="price_unit">
                         € 15                     </div> 
                </div>
                
                <a href="owners/johndemo/index.html" class="owner_thumb" style="background-image: url('wp-content/uploads/2015/11/590_429_profile4-60x60.jpg')"></a>
           
                <div class="category_name">
                    <a href="properties/apartment-in-jersey-city/index.html" class="listing_title_unit">
                        Apartment in Jersey City                    </a>
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_pin.png"  alt="location">
                       
                        <a href="area/historic-center/index.html" rel="tag">Historic Center</a>, <a href="city/jersey-city/index.html" rel="tag">Jersey City</a>                    </div>
                    
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_category.png"  alt="location">
                        <a href="listings/apartment/index.html" rel="tag">Apartment</a> / <a href="action/entire-home/index.html" rel="tag">Entire home</a>                    </div>
                </div>
                
                <div class="property_unit_action">
                    <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="6832"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        
        
        </div>          
    </div></li><li>  



<div class="listing_wrapper col-md- shortcode-col  ssx property_flex " data-org="4" data-listid="137" > 
    <div class="property_listing " data-link="properties/huge-sunny-villa-east-side/index.html">
                
          
            <div class="listing-unit-img-wrapper">
                                    <div class="cross"></div>
                    <a href="properties/huge-sunny-villa-east-side/index.html"><img src="wp-content/uploads/2015/04/demo384-400x314.jpg"   class="b-lazy img-responsive wp-post-image lazy-hidden" alt="no thumb" /></a> 
                            </div>
          
                 
            <div class="featured_div">featured</div>          
            <div class="title-container">
                <div class="price_unit_wrapper">
                    <div class="price_unit">
                         € 500                     </div> 
                </div>
                
                <a href="owners/amberdemo/index.html" class="owner_thumb" style="background-image: url('wp-content/uploads/2015/11/590_429_profile3-60x60.jpg')"></a>
           
                <div class="category_name">
                    <a href="properties/huge-sunny-villa-east-side/index.html" class="listing_title_unit">
                        Huge Sunny Villa – East Side                    </a>
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_pin.png"  alt="location">
                       
                        <a href="area/east-side/index.html" rel="tag">East Side</a>, <a href="city/new-york/index.html" rel="tag">New York</a>                    </div>
                    
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_category.png"  alt="location">
                        <a href="listings/villa/index.html" rel="tag">Villa</a> / <a href="action/entire-home/index.html" rel="tag">Entire home</a>                    </div>
                </div>
                
                <div class="property_unit_action">
                    <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="137"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        
        
        </div>          
    </div></li><li>  



<div class="listing_wrapper col-md- shortcode-col  ssx property_flex " data-org="4" data-listid="119" > 
    <div class="property_listing " data-link="properties/beautiful-cabin-simple-price/index.html">
                
          
            <div class="listing-unit-img-wrapper">
                                    <div class="cross"></div>
                    <a href="properties/beautiful-cabin-simple-price/index.html"><img src="wp-content/uploads/2015/04/demo110-400x314.jpg"   class="b-lazy img-responsive wp-post-image lazy-hidden" alt="no thumb" /></a> 
                            </div>
          
                 
            <div class="featured_div">featured</div>          
            <div class="title-container">
                <div class="price_unit_wrapper">
                    <div class="price_unit">
                         € 64                     </div> 
                </div>
                
                <a href="owners/amberdemo/index.html" class="owner_thumb" style="background-image: url('wp-content/uploads/2015/11/590_429_profile3-60x60.jpg')"></a>
           
                <div class="category_name">
                    <a href="properties/beautiful-cabin-simple-price/index.html" class="listing_title_unit">
                        Beautiful Cabin, Simple Price                    </a>
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_pin.png"  alt="location">
                       
                        <a href="area/brightwood/index.html" rel="tag">Brightwood</a>, <a href="city/philadelphia/index.html" rel="tag">Philadelphia</a>                    </div>
                    
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_category.png"  alt="location">
                        <a href="listings/cabin/index.html" rel="tag">Cabin</a> / <a href="action/entire-home/index.html" rel="tag">Entire home</a>                    </div>
                </div>
                
                <div class="property_unit_action">
                    <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="119"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        
        
        </div>          
    </div></li></ul></div></div></div></div></div></div>
          
        </div>    
     
        <!-- #comments start
           </div>
<div class="clearfix visible-xs"></div>
></div>   

</div><!-- end content_wrapper started in header or full_width_row from prop list -->

        <!-- end comments -->   
        
           
       



<footer id="colophon" style=" background-image: url(wp-content/uploads/2016/02/demo1_footer.jpg);padding:0px; " class="  footer_back_repeat  ">    
        
    <div id="footer-widget-area" class="row ">
        
    <div id="first" class="widget-area col-md-4">
      <ul class="xoxo">
        <li id="wpestate_contact_widget-2" class="widget-container contact_sidebar"><h3 class="widget-title-footer">Get Started</h3><div class="contact_sidebar_wrap">
        <p class="widget_contact_addr">Get the iPhone app</p>
        <p class="widget_contact_phone"><a href="tel:%28305%29+555-4446">Get the Android app</a></p>
        <p class="widget_contact_addr">Hire a Temp</p>
        <p class="widget_contact_url">Broadcast your contract employees</p></div></li>

       <!-- <li id="wpestate_social_widget-2" class="widget-container social_sidebar"><h3 class="widget-title-footer">Social Links:</h3><div class="social_sidebar_internal"><a href="#" target="_blank"><i class="fa fa-rss  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-facebook  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-twitter  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-dribbble  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin  fa-fw"></i></a></div></li>  -->

              </ul>
    </div><!-- #first .widget-area “”, “”, “”, “” 
   -->
    
    <div id="second" class="widget-area col-md-4">
        <ul class="xoxo">
        <li id="wpestate_contact_widget-2" class="widget-container contact_sidebar"><h3 class="widget-title-footer">Learn More</h3><div class="contact_sidebar_wrap">
        <p class="widget_contact_addr">How Zinterim works</p>
        <p class="widget_contact_phone"><a href="tel:%28305%29+555-4446">Policies</a></p>
        <p class="widget_contact_addr">Agency tools</p>
        <p class="widget_contact_url">Employer tools</p></div></li>

       <!-- <li id="wpestate_social_widget-2" class="widget-container social_sidebar"><h3 class="widget-title-footer">Social Links:</h3><div class="social_sidebar_internal"><a href="#" target="_blank"><i class="fa fa-rss  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-facebook  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-twitter  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-dribbble  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus  fa-fw"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin  fa-fw"></i></a></div></li>  -->

              </ul>
    </div><!-- #second .widget-area -->
   
   @if(isset($employees))
       <div id="third" class="widget-area col-md-4">
        <ul class="xoxo">
        <li id="wpestate_footer_latest_widget-2" class="widget-container latest_listings"><h3 class="widget-title-footer">Latest Updates</h3>  

   @foreach($employees as $key => $employee)

 @php 
 $total = ($employee->rates + ($employee->rates*($employee->tax + $employee->agency_fee))*.01); 
$address = json_decode($employee->address);


 @endphp



<div class="listing_wrapper col-md-12  ssx property_flex " data-org="12" data-listid="6841" > 
    <div class="property_listing " data-link="http://demo1.wprentals.org/properties/condo-in-liberty-state-park/">
                
          
            <div class="listing-unit-img-wrapper">
                                    <div class="cross"></div>
                    <a href="properties/condo-in-liberty-state-park/index.html"><img src="{{$employee->user->profile_img}}"   class="b-lazy img-responsive wp-post-image lazy-hidden" alt="no thumb" /></a> 
                            </div>
          
                 
            <div class="featured_div">featured</div><div class=" property_status status_verified">verified</div>          
            <div class="title-container">
                <div class="price_unit_wrapper">
                    <div class="price_unit">
                         <span class="pernight" style="color:white">${{$total}} per hour</span>                    </div> 
                </div>
                
                <a href="owners/johndemo/index.html" class="owner_thumb" style="background-image: url('{{$employee->user->profile_img}}')"></a>
           
                <div class="category_name" style="color:white">
                    <a href="properties/condo-in-liberty-state-park/index.html" >
                        {{$employee->lastName}} {{$employee->firstName}}                   </a>
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_pin.png"  alt="location">
                       
                        <a href="area/liberty-state-park/index.html" rel="tag">{{$address[2]}}</a>, <a href="city/jersey-city/index.html" rel="tag">{{$address[3]}}</a>                    </div>
                    
                    <div class="category_tagline">
                        <img src="wp-content/themes/wprentals/img/unit_category.png"  alt="location">
                        <a href="listings/condos/index.html" rel="tag">Condos</a> / <a href="action/private-room/index.html" rel="tag">Private room</a>                    </div>
                </div>
                
                <div class="property_unit_action">
                    <span class="icon-fav icon-fav-off" data-original-title="add to favorites" data-postid="6841"><i class="fa fa-heart"></i></span>
                </div>
            </div>
            
        
        
        </div>          
    </div>  





    @endforeach
        <div class="latest_listings"> </div></li>        </ul>
    </div><!-- #third .widget-area -->
    @endif
    </div><!-- #footer-widget-area -->

    <div class="sub_footer">  
        <div class="sub_footer_content ">
            <span class="copyright">
                © 2018 Zinterim.            </span>

            <div class="subfooter_menu">
                <div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu">
                <li id="menu-item-1655" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1655"><a href="terms-and-conditions/index.html">About</a></li>
<li id="menu-item-1656" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1656"><a href="contact/index.html">Help</a></li>
<li id="menu-item-1655" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1655"><a href="terms-and-conditions/index.html">Terms</a></li>
<li id="menu-item-1655" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1655"><a href="terms-and-conditions/index.html">Privacy</a></li>
</ul></div>            </div>  
        </div>  
    </div>
</footer><!-- #colophon “About”, “Help”, “Terms”, “Privacy”  -->

<a href="#" class="backtop "><i class="fa fa-chevron-up"></i></a><link rel='stylesheet' property='stylesheet' id='rs-icon-set-pe-7s-css'  href='wp-content/plugins/revslider/public/assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css' type='text/css' media='all' />              

@section('scripts')

 <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
          var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
          errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
          errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
          errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
          errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
      </script>
      <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/wp-a11y.minef15.js?ver=4.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/jquery.fancybox.pack5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/jquery.fancybox-thumbs5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/placeholders.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/dense5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/jquery.ui.touch-punch.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/jquery.lazyload.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/latinise.min_5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/i18n/datepicker-en-GB5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/infobox5152.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var googlecode_regular_vars = {"general_latitude":"40.781711","general_longitude":"-73.955927","path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals\/\/css\/css-images","markers":"[[\"Condo%20in%20Liberty%20State\",\"40.7075798804\",\"-74.0480232239\",1,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2016%2F08%2Fdemo68-400x314.jpg\",\"from%20%E2%82%AC%2067%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fcondo-in-liberty-state-park%2F\",6841,\"jersey-city\",\"liberty-state-park\",67,\"4\",\"1\",\"120\",\"Condos\",\"Private%20Room\",\"verified\"],[\"Apartment%20in%20Jersey%20City\",\"40.7281575\",\"-74.0776417\",2,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2016%2F08%2Froom-1-400x314.jpg\",\"%20%E2%82%AC%2015%20\",\"apartment\",\"entire-home\",\"apartmententire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fapartment-in-jersey-city%2F\",6832,\"jersey-city\",\"historic-center\",15,\"1\",\"1\",\"120\",\"Apartment\",\"Entire%20Home\",\"normal\"],[\"West%20Town%20Dorm\",\"39.2838253476\",\"-76.5767669678\",3,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo124-400x314.jpg\",\"%20%E2%82%AC%2023%20\",\"dorm\",\"shared-room\",\"dormshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fwest-town-3rd-floor-dorm%2F\",149,\"baltimore\",\"arlington\",23,\"1\",\"2\",\"250\",\"Dorm\",\"Shared%20Room\",\"normal\"],[\"Modern%20Spacious%20Villa\",\"40.7184746\",\"-73.9882516\",4,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2FApartment-by-the-Beach-03-400x314.jpg\",\"%20%E2%82%AC%20110%20\",\"villa\",\"entire-home\",\"villaentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fmodern-spacious-villa%2F\",141,\"new-york\",\"east-side\",110,\"2\",\"5\",\"2,500\",\"Villa\",\"Entire%20Home\",\"verified\"],[\"Huge%20Sunny%20Villa%20%26%238211%3B%20East%20Side\",\"40.7185382\",\"-73.9833874\",5,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo384-400x314.jpg\",\"%20%E2%82%AC%20500%20\",\"villa\",\"entire-home\",\"villaentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fhuge-sunny-villa-east-side%2F\",137,\"new-york\",\"east-side\",500,\"3\",\"12\",\"2,500\",\"Villa\",\"Entire%20Home\",\"normal\"],[\"Nice%20Terrace%20Condo%20Penn%20Station\",\"40.7274893\",\"-73.9950182\",6,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1114-400x314.jpg\",\"%20%E2%82%AC%20200%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fterrace-condo-penn-station%2F\",133,\"new-york\",\"manhattan\",200,\"2\",\"8\",\"1,200\",\"Condos\",\"Private%20Room\",\"normal\"],[\"2%20Bedrooms%20Video\",\"40.7067600713\",\"-74.0175533295\",7,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo56-400x314.jpg\",\"%20%E2%82%AC%20150%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2F2-bedrooms-condo%2F\",129,\"new-york\",\"bakery-park\",150,\"2\",\"7\",\"1,000\",\"Condos\",\"Private%20Room\",\"normal\"],[\"Summerlin%20Cabin%20%26%238211%3B%20Perfect%20Holiday\",\"39.9467266106\",\"-75.166053772\",8,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo554-400x314.jpg\",\"%20%E2%82%AC%2059%20\",\"cabin\",\"entire-home\",\"cabinentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fsummerlin-cabin-perfect-holiday%2F\",124,\"philadelphia\",\"brightwood\",59,\"2\",\"6\",\"750\",\"Cabin\",\"Entire%20Home\",\"normal\"],[\"Beautiful%20Cabin%2C%20Simple%20Price\",\"39.9350129604\",\"-75.0476074219\",9,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo110-400x314.jpg\",\"%20%E2%82%AC%2064%20\",\"cabin\",\"entire-home\",\"cabinentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fbeautiful-cabin-simple-price%2F\",119,\"philadelphia\",\"brightwood\",64,\"1\",\"5\",\"750\",\"Cabin\",\"Entire%20Home\",\"normal\"],[\"Victorian%20Bed%20%26%23038%3B%20Breakfast\",\"42.2814816\",\"-71.0956488\",10,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1114-400x314.jpg\",\"%20%E2%82%AC%2065%20\",\"b-b\",\"shared-room\",\"b-bshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fvictorian-bed-breakfast%2F\",115,\"boston\",\"mattapan\",65,\"1\",\"2\",\"450\",\"B%20%26amp%3B%20B\",\"Shared%20Room\",\"normal\"],[\"Beautiful%20Full%20Bed%20and%20Breakfast\",\"42.2814816\",\"-71.0956488\",11,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo179-400x314.jpg\",\"%20%E2%82%AC%2059%20\",\"b-b\",\"shared-room\",\"b-bshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fbeautiful-full-bed-breakfast%2F\",111,\"boston\",\"mattapan\",59,\"1\",\"2\",\"750\",\"B%20%26amp%3B%20B\",\"Shared%20Room\",\"normal\"],[\"Sunny%202%20Bedrooms%20Video\",\"38.9040587199\",\"-77.0333862305\",12,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo994-400x314.jpg\",\"%20%E2%82%AC%20225%20\",\"house\",\"private-room\",\"houseprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fsunny-2-bedrooms-in-the-haight%2F\",107,\"washington\",\"glover-park\",225,\"2\",\"4\",\"850\",\"House\",\"Private%20Room\",\"verified\"],[\"Chic%20Cole%20Valley%20House\",\"38.8225909762\",\"-104.4140625\",13,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo84-400x314.jpg\",\"%20%E2%82%AC%2040%20\",\"house\",\"private-room\",\"houseprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fchic-cole-valley-house%2F\",101,\"washington\",\"glover-park-washington\",40,\"2\",\"6\",\"850\",\"House\",\"Private%20Room\",\"normal\"],[\"Cozy%20House%20In%20The%20Sunnyside\",\"38.9029232243\",\"-77.0193099976\",14,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo95-400x314.jpg\",\"%20%E2%82%AC%2025%20\",\"apartment\",\"entire-home\",\"apartmententire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fcozy-house-in-the-sunnyside%2F\",94,\"washington\",\"wesley-heights\",25,\"1\",\"2\",\"750\",\"Apartment\",\"Entire%20Home\",\"normal\"],[\"Downtown%20apartment\",\"38.8909367934\",\"-76.9592446089\",15,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo37-400x314.jpg\",\"%20%E2%82%AC%2038%20\",\"apartment\",\"entire-home\",\"apartmententire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fdowntown-apartment%2F\",10,\"washington\",\"wesley-heights\",38,\"1\",\"2\",\"50\",\"Apartment\",\"Entire%20Home\",\"normal\"],[\"Allow%20Extra%20Guest%20in%20Booking\",\"39.3100537903\",\"-76.6572225094\",16,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1514-400x314.jpg\",\"%20%E2%82%AC%2025%20\",\"dorm\",\"shared-room\",\"dormshared-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fsunny-dorm-in-west-town%2F\",145,\"baltimore\",\"arlington\",25,\"1\",\"2\",\"500\",\"Dorm\",\"Shared%20Room\",\"normal\"]]","idx_status":"0","page_custom_zoom":"5","generated_pins":"0","on_demand_pins":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/google_js/google_map_code5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/google_js/oms.min5152.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mapfunctions_vars = {"path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals\/\/css\/css-images","pin_images":"{\"entire-home\":\"\",\"private-room\":\"\",\"shared-room\":\"\",\"apartment\":\"\",\"b-b\":\"\",\"cabin\":\"\",\"condos\":\"\",\"dorm\":\"\",\"house\":\"\",\"villa\":\"\",\"apartmententire-home\":\"\",\"b-bentire-home\":\"\",\"cabinentire-home\":\"\",\"condosentire-home\":\"\",\"dormentire-home\":\"\",\"houseentire-home\":\"\",\"villaentire-home\":\"\",\"apartmentprivate-room\":\"\",\"b-bprivate-room\":\"\",\"cabinprivate-room\":\"\",\"condosprivate-room\":\"\",\"dormprivate-room\":\"\",\"houseprivate-room\":\"\",\"villaprivate-room\":\"\",\"apartmentshared-room\":\"\",\"b-bshared-room\":\"\",\"cabinshared-room\":\"\",\"condosshared-room\":\"\",\"dormshared-room\":\"\",\"houseshared-room\":\"\",\"villashared-room\":\"\",\"userpin\":\"\"}","geolocation_radius":"1000","adv_search":"0","in_text":" in ","zoom_cluster":"15","user_cluster":"yes","open_close_status":"0","open_height":"650","closed_height":"550","generated_pins":"0","geo_no_pos":"The browser couldn't detect your position!","geo_no_brow":"Geolocation is not supported by this browser.","geo_message":"m radius","show_adv_search":"yes","custom_search":"no","listing_map":"top","slugs":[],"hows":[],"measure_sys":"m","close_map":"close map","show_g_search_status":"no","slider_price":"no","slider_price_position":"0","map_style":"[{\"featureType\":\"administrative\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"administrative\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#716464\"},{\"weight\":\"0.01\"}]},{\"featureType\":\"administrative.country\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"landscape.natural\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"landscape.natural.landcover\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi.attraction\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"simplified\"},{\"color\":\"#a05519\"},{\"saturation\":\"-13\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fff100\"}]},{\"featureType\":\"road.local\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"transit\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"transit.station\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"},{\"color\":\"#84afa3\"},{\"lightness\":52}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"water\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"}]}]","is_tax":"0","is_property_list":"0","bypass_fit_bounds":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/google_js/mapfunctions5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/google_js/markerclusterer5152.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var control_vars = {"searchtext":"SEARCH","searchtext2":"Search here...","path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals","search_room":"Type Bedrooms No.","search_bath":"Type Bathrooms No.","search_min_price":"Type Min. Price","search_max_price":"Type Max. Price","contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","zillow_addres":"Your Address","zillow_city":"Your City","zillow_state":"Your State Code (ex CA)","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","login_redirect":"http:\/\/demo1.wprentals.org\/my-profile\/","login_loading":"Sending user info, please wait...","street_view_on":"Street View","street_view_off":"Close Street View","userid":"0","show_adv_search_map_close":"yes","close_map":"close map","open_map":"open map","fullscreen":"Fullscreen","default":"Default","addprop":"Please wait while we are processing your submission!","deleteconfirm":"Are you sure you wish to delete?","terms_cond":"You must to agree with terms and conditions!","slider_min":"0","slider_max":"1000","bookconfirmed":"Booking request sent. Please wait for owner's confirmation!","bookdenied":"The selected period is already booked. Please choose a new one!","to":"to","curency":"\u20ac","where_curency":"before","price_separator":".","datepick_lang":"en-GB","custom_price":"\"\"","booking_array":"\"\"","default_price":"","transparent_logo":"http:\/\/demo1.wprentals.org\/wp-content\/uploads\/2015\/08\/logo_transparent3130.png","normal_logo":"","cleaning_fee_per_day":"0","city_fee_per_day":"0","price_per_guest_from_one":"0","checkin_change_over":"0","checkin_checkout_change_over":"0","min_days_booking":"0","extra_price_per_guest":"0","price_per_weekeend":"0","setup_weekend_status":"0","mega_details":"\"\"","mindays":"The selected period is shorter than the minimum required period!","weekdays":"[\"None\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]","stopcheckin":"Check in date is not correct","stopcheckinout":"Check in\/Check out dates are not correct","from":"from","separate_users":"yes","captchakey":"6LfneyYTAAAAAIpnhd5-QwOxcxCWLAJtqLFQeTtk","usecaptcha":"yes","unavailable_check":"Unavailable\/Only Check Out","unavailable":"Unavailable","submission_curency":"USD","direct_price":"To be paid","send_invoice":"Send me the invoice","direct_pay":"Payment info: WP RENTALS Inc.  NY99BONW5558887777 -  Include Invoice number in payment details. ","direct_title":"Direct payment instructions","direct_thx":"Thank you. Please check your email for payment instructions.","guest_any":"any","my_reservations_url":"http:\/\/demo1.wprentals.org\/my-reservations\/","pls_wait":"processing, please wait...","wp_estate_book_down":"0","wp_estate_book_down_fixed_fee":"0","include_expeses":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/control5152.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajaxcalls_vars = {"contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","login_redirect":"http:\/\/demo1.wprentals.org\/my-profile\/","login_loading":"Sending user info, please wait...","userid":"0","prop_featured":"Property is featured","no_prop_featured":"You have used all the \"Featured\" listings in your package.","favorite":"Favorite<i class=\"fa fa-heart\"><\/i>","add_favorite":"Add to Favorites","remove_favorite":"remove from favorites","add_favorite_unit":"add to favorites","saving":"saving..","sending":"sending message..","reserve":"Reserve Period","paypal":"Connecting to Paypal! Please wait...","stripecancel":"subscription will be cancelled at the end of the current period"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/wprentals/js/ajaxcalls5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.minef15.js?ver=4.8'></script>
<script type='text/javascript' src='../www.google.com/recaptcha/api5f02.js?onload=wpestate_onloadCallback&amp;render=explicit&amp;hl=iw%22+async+defer&amp;ver=1.0'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.minef15.js?ver=4.8'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min3c21.js?ver=5.1.1'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min3c21.js?ver=5.1.1'></script>


</div> <!-- end class container -->

<div class="social_share_wrapper">

        <a class="social_share share_facebook_side" href="https://www.facebook.com/wpestate" target="_blank"><i class="fa fa-facebook"></i></a>
        
            <a class="social_share share_twiter_side" href="https://twitter.com/WPESTATE" target="_blank"><i class="fa fa-twitter"></i></a>
        
            <a class="social_share share_google_side" href="https://plus.google.com/u/0/112306178370763368843/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
        
            <a class="social_share share_linkedin_side" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
        
            <a class="social_share share_pinterest_side" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
        
</div>

</div> <!-- end website wrapper -->

    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/attrChange.js') }}"></script>
  <script src="assets/js/tabe.min.js"></script>
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

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

 <script>
    $(document).ready(function(){
      $('.slider').bxSlider();

    });

 
  </script>
  @endsection
@endsection
