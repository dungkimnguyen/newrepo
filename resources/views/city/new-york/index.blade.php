@extends('layouts.home')

@section('header')
   
        <title>Zinterim :: Search</title>
<meta name='robots' content='noindex,follow' />
    <link href="{{ asset('css/font-awesome.min.css') }}"  rel="stylesheet">


<link rel='dns-prefetch' href='city/new-york/maps.googleapis.com' />
<link rel='dns-prefetch' href='city/new-york/www.google.com' />
<link rel='dns-prefetch' href='city/new-york/fonts.googleapis.com' />
<link rel='dns-prefetch' href='city/new-york/s.w.org' />
<link rel="alternate" type="application/rss+xml" title="demo 1 &raquo; Feed" href="../../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="demo 1 &raquo; Comments Feed" href="../../comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="demo 1 &raquo; New York City Feed" href="feed/index.html" />
    <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"../../http/demo1wprentalsorg/wp-includes/js/MS_341.js"}};
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
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../../wp-content/plugins/revslider/public/assets/css/MS_127.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

<link rel='stylesheet' id='chld_thm_cfg_parent-css'  href='wp-content/themes/wprentals/styleef15.css?ver=4.8' type='text/css' media='all' />

<link rel='stylesheet' id='wpestate_media-css'  href='wp-content/themes/wprentals/css/my_media5152.css?ver=1.0' type='text/css' media='all' />



<link rel='stylesheet' id='wpestate_media-css'  href='../../wp-content/themes/wprentals/css/MS_56.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate_style-css'  href='../../wp-content/themes/wprentals-child/MS_122.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate_jquery.ui.theme-css'  href='../../wp-content/themes/wprentals/css/MS_130.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate-railway-css'  href='../../http/fontsgoogleapiscom/MS_137.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpestate-opensans-css'  href='../../http/fontsgoogleapiscom/MS_121.css' type='text/css' media='all' />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' id='bsf-Defaults-css'  href='../../wp-content/uploads/smile_fonts/Defaults/MS_123.css' type='text/css' media='all' />
<script type='text/javascript' src='../../wp-includes/js/jquery/MS_128.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/MS_120.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/MS_108.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_98.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_97.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_59.js'></script>
<link rel='https://api.w.org/' href='../../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../MS_57.html" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml.html" /> 
<meta name="generator" content="WordPress 4.8.1" />
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


 </style><meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo1.wprentals.org/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.5.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;         
          if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})          
        }catch(d){console.log("Failure at Presize of Slider:"+d)}
      };</script>
<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><link rel="shortcut icon" href="../../wp-content/themes/wprentals/img/favicon.gif" type="image/x-icon" />        
        
        
        
        
    </head>

    @endsection



    @section('bodyClass') class="home page-template-default page page-id-444 wpb-js-composer js-comp-ver-5.1.1 vc_responsive" @endsection 
    @section('wrapperClass')
     <div class="website-wrapper  is_half_map "  id="all_wrapper">
            <div class="container main_wrapper  wide  ">
               <div class="master_header master_  wide  google_map_list_header master_header_wide_no hover_type_1">
               @endsection

@section('navClass') style="background-image: url('img/acct_admin_header1.jpg');position: absolute;min-width: 100%"  @endsection
@section('navBrandClass') style="margin-left:-8px" @endsection
     @section('content')
        
        

   


                </div> 




  <div class="full_map_container">
<div class="row">
    <div  id="google_map_prop_list_wrapper" class="google_map_prop_list half_header_type1">
        <div id="gmap-control-list">
    <span  id="gmapzoomplus"></span>
    <span  id="gmapzoomminus"></span>
    <span  id="geolocation-button"></span>
    <span  id="gmap-full"></span>
    <span  id="gmap-prev"></span>
    <span  id="gmap-next"></span>
</div>

<div  id="google_map_prop_list">
    <div id="gmap-loading">Loading Maps        <div class="spinner map_loader" id="listing_loader_maps">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
       </div>
    </div>
</div>     </div>    
    
    
    <div id="google_map_prop_list_sidebar" class="half_header_type1">
        
<div  id="a_filter_action" data-value="All Sizes"> </div>           
<div  id="a_filter_categ"  data-value="All Types "> </div>           
<div  id="a_filter_cities" data-value="New York"> </div>           
<div  id="a_filter_areas"  data-value="All Areas">  </div>           

                                               
        
<div id="advanced_search_map_list">
    <div class="advanced_search_map_list_container">
 
 <form id="searchF" method="POST">
   {{ csrf_field() }}
        <div class="col-md-3 map_icon">
             <input type="hidden" class="stype" id="stype" name="stype" value="tax"> 
             <input type="text"   id="search_location_filter_autointernal" class="form-control search_location_city" name="title" placeholder="Keywords ?" value="" >              
            <input type="hidden" id="search_location_city" value="" >
            <input type="hidden" id="search_location_area" value="" >
            <input type="hidden" id="search_location_country"    value="" >              
            <input type="hidden" id="property_admin_area" name="property_admin_area"  value="" >
           
        </div>

        <div class="col-md-3 map_icon">
        
             <input type="text"   id="search_location_filter_autointernal" class="form-control search_location_city" name="zip" placeholder="Zip Code ?" value="" >  </div>
        
                        
        <div class="col-md-3 has_calendar calendar_icon ">
            <input type="text" id="check_in_list"        class="form-control" name="start_date"  placeholder="Check in" value="" >       
        </div>


        <div class="col-md-3 has_calendar calendar_icon ">
            <input type="text" id="check_out_list"       class="form-control" name="end_date" placeholder="Check Out" value="">
        </div>


        <div class="col-md-3">
           <div class="dropdown form-control">
                <div data-toggle="dropdown"  class="filter_menu_trigger" 
                    data-value="all"> 
                <div id="experience_show" > Experience  </div>   
                <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="experience" id="experience" value="">
                <ul  class="dropdown-menu filter_menu"  id="guest_no_main_list" role="menu" aria-labelledby="guest_no">
                    <li class="dropDown"  data-filter="experience" role="presentation" data-value="0">any</li>
                    <li class="dropDown"  data-filter="experience" role="presentation" data-value="1-5 years">1-5 years</li>
                    <li class="dropDown"  data-filter="experience" role="presentation" data-value="5-10 years">5-10 years</li>
                    <li class="dropDown" data-filter="experience" role="presentation" data-value="10-15 years" >10-15 years</li>
                    <li class="dropDown" data-filter="experience" role="presentation" data-value="15+ years" >15+ years</li>               </ul>        
            </div>
        </div>
        
        <div class="col-md-3">
           <div class="dropdown form-control">
                <div data-toggle="dropdown" id="education_show" class="filter_menu_trigger" 
                    data-value="all"> 
                Education     
                <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="education" id="education" value="">
                <ul  class="dropdown-menu filter_menu"  id="guest_no_main_list" role="menu" aria-labelledby="guest_no">
                   <li class="dropDown"  data-filter="education" role="presentation" data-value="highschool">Highschool </li>
                   <li class="dropDown"  data-filter="education" role="presentation" data-value="college">College</li>
                   <li class="dropDown"  data-filter="education" role="presentation" data-value="other">other</li> 
                               </ul>        
            </div>
        </div>

        <div class="col-md-3">
           <div class="dropdown form-control">
                <div data-toggle="dropdown" id="military_show" class="filter_menu_trigger" 
                    data-value="all"> 
                Military     
                <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="military" id="military" value="">
                <ul  class="dropdown-menu filter_menu"  id="guest_no_main_list" role="menu" aria-labelledby="guest_no">
                   <li class="dropDown"  data-filter="military"  role="presentation" data-value="yes">yes </li>
                   <li class="dropDown"  data-filter="military"  role="presentation" data-value="no">no</li>  
                             </ul>        
            </div>
        </div>


        <div class="col-md-3 map_icon">
        
             <input type="text"   id="search_location_filter_autointernal" class="form-control search_location_city" name="skills" placeholder="Skills" value="" >  </div>

        <div class="col-md-3">
<h4>Employment Type</h4>
  <div class=""><input type="checkbox" id="contract" name="contract" value="Contract" ><label for="washer">Contract</label></div>
  <div class=""><input type="checkbox" id="temp" name="temp" value="Temporary" ><label for="washer">Temporary</label></div>
  <div class=""><input type="checkbox" id="temp_perm" name="temp_perm" value="Temp to Perm" ><label for="washer">Temp to Perm</label></div>
  <div class=""><input type="checkbox" id="fullTime" name="fullTime" value="Full Time" ><label for="washer">Full Time</label></div>
  <div class=""><input type="checkbox" id="partTime" name="partTime" value="Part Time" ><label for="washer">Part Time</label></div>
</div>

        <div class="col-md-6">
<h4>Schedule</h4>
        <div class="col-md-6">

  <div class=""><input type="checkbox" id="morning" name="morning" value="morning" ><label for="washer">Day: 8am - 5pm</label></div>
  <div class=""><input type="checkbox" id="evening" name="evening" value="evening" ><label for="washer">Mid: 5pm - 12pm</label></div>
  <div class=""><input type="checkbox" id="night" name="night" value="night" ><label for="washer">Night: 12am - 8am</label></div>

</div>

        <div class="col-md-6">

  <div class=""><input type="checkbox" id="holidays" name="holidays" value="holidays" ><label for="washer">Holidays</label></div>
  <div class=""><input type="checkbox" id="weekends" name="weekends" value="weekends" ><label for="washer">Weekends</label></div>
  <div class=""><input type="checkbox" id="sameDay" name="sameDay" value="sameDay" ><label for="washer">Same-Day Start</label></div>

</div>
</div>

        <div class="col-md-3">
<h4>Vertification</h4>
  <div class=""><input type="checkbox" id="vSkills" name="vSkills" value="vSkills" ><label for="washer">Verified Skills</label></div>
  <div class=""><input type="checkbox" id="vRef" name="vRef" value="vRef" ><label for="washer">Verified References</label></div>

</div>
        <div class="col-md-12 ">

        <div class="col-md-3 ">
<button class="col-md-12 wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" id="advanced_submit_2" value="Search" type="submit" > Search </button>
</div>
</div>
</form>
        <!--
        <div class="col-md-3">
            <div class="dropdown form-control rooms_icon" >
                <div data-toggle="dropdown" id="rooms_no" class="filter_menu_trigger" data-value="all"> Rooms <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="rooms_no"  id="rooms_no_input" value="">
                <ul  class="dropdown-menu filter_menu" role="menu" aria-labelledby="rooms_no">
                    <li role="presentation" data-value="0">any</li><li role="presentation" data-value="1">1 room</li><li role="presentation" data-value="2">2 rooms</li><li role="presentation" data-value="3">3 rooms</li><li role="presentation" data-value="4">4 rooms</li><li role="presentation" data-value="5">5 rooms</li><li role="presentation" data-value="6">6 rooms</li><li role="presentation" data-value="7">7 rooms</li><li role="presentation" data-value="8">8 rooms</li><li role="presentation" data-value="9">9 rooms</li><li role="presentation" data-value="10">10 rooms</li><li role="presentation" data-value="11">11 rooms</li><li role="presentation" data-value="12">12 rooms</li><li role="presentation" data-value="13">13 rooms</li><li role="presentation" data-value="14">14 rooms</li>                </ul>
            </div>
        </div>
            
        
        <div class="col-md-3">
            <div class="dropdown form-control types_icon" id="categ_list" >
                <div data-toggle="dropdown" id="adv_categ" class="filter_menu_trigger" data-value="all"> All Types <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="filter_search_type[]" value="">
                <ul  class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
                    <li role="presentation" data-value="all">All Types</li><li role="presentation" data-value="apartment">Apartment (3)</li><li role="presentation" data-value="b-b">B &amp; B (2)</li><li role="presentation" data-value="cabin">Cabin (2)</li><li role="presentation" data-value="condos">Condos (3)</li><li role="presentation" data-value="dorm">Dorm (2)</li><li role="presentation" data-value="house">House (2)</li><li role="presentation" data-value="villa">Villa (2)</li>                </ul>        
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="dropdown form-control actions_icon">
                <div data-toggle="dropdown" id="adv_actions" class="filter_menu_trigger" data-value="all"> All Sizes <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="filter_search_action[]" value="">
                <ul  class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_actions">
                     <li role="presentation" data-value="all">All Sizes</li><li role="presentation" data-value="entire-home">Entire Home (7)</li><li role="presentation" data-value="private-room">Private Room (5)</li><li role="presentation" data-value="shared-room">Shared Room (4)</li>                </ul>        
            </div>
        </div>
     

       
        
        <div class="col-md-3">
            <div class="dropdown form-control bedrooms_icon" >
                <div data-toggle="dropdown" id="beds_no" class="filter_menu_trigger" data-value="all">Bedrooms <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="beds_no" id="beds_no_input" value="">
                <ul  class="dropdown-menu filter_menu" role="menu" aria-labelledby="beds_no">
                    <li role="presentation" data-value="0">any</li><li role="presentation" data-value="1">1 bedroom</li><li role="presentation" data-value="2">2 bedrooms</li><li role="presentation" data-value="3">3 bedrooms</li><li role="presentation" data-value="4">4 bedrooms</li><li role="presentation" data-value="5">5 bedrooms</li><li role="presentation" data-value="6">6 bedrooms</li><li role="presentation" data-value="7">7 bedrooms</li><li role="presentation" data-value="8">8 bedrooms</li><li role="presentation" data-value="9">9 bedrooms</li><li role="presentation" data-value="10">10 bedrooms</li><li role="presentation" data-value="11">11 bedrooms</li><li role="presentation" data-value="12">12 bedrooms</li><li role="presentation" data-value="13">13 bedrooms</li><li role="presentation" data-value="14">14 bedrooms</li>                </ul>
            </div>
        </div>
                 
        <div class="col-md-3">
            <div class="dropdown form-control baths_icon" >
                <div data-toggle="dropdown" id="baths_no" class="filter_menu_trigger" data-value="all">Baths <span class="caret caret_filter"></span> </div>           
                <input type="hidden" name="baths_no" id="baths_no_input"  value="">
                <ul  class="dropdown-menu filter_menu" role="menu" aria-labelledby="baths_no">
                    <li role="presentation" data-value="0">any</li><li role="presentation" data-value="1">1 bath</li><li role="presentation" data-value="2">2 baths</li><li role="presentation" data-value="3">3 baths</li><li role="presentation" data-value="4">4 baths</li><li role="presentation" data-value="5">5 baths</li><li role="presentation" data-value="6">6 baths</li><li role="presentation" data-value="7">7 baths</li><li role="presentation" data-value="8">8 baths</li><li role="presentation" data-value="9">9 baths</li><li role="presentation" data-value="10">10 baths</li><li role="presentation" data-value="11">11 baths</li><li role="presentation" data-value="12">12 baths</li><li role="presentation" data-value="13">13 baths</li><li role="presentation" data-value="14">14 baths</li>                </ul>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="adv_search_slider">
                <p>
                    <label>Price range:</label>
                    <span id="amount"  style="border:0; color:#f6931f; font-weight:bold;">€ 0 to € 1.000</span>
                </p>
                <div id="slider_price"></div>
                <input type="hidden" id="price_low"  name="price_low"  value="0" />
                <input type="hidden" id="price_max"  name="price_max"  value="1000" />
            </div>
        </div>
        
        <div class="extended_search_check_wrapper" id="extended_search_check_filter"> 
        <div class="secondrow">
            
            
        </div><span id="adv_extended_close_adv"><i class="fa fa-times"></i></span><div class="extended_search_checker"><input type="checkbox" id="kitchen" name="kitchen" value="1" ><label for="kitchen">Kitchen</label></div><div class="extended_search_checker"><input type="checkbox" id="internet" name="internet" value="1" ><label for="internet">Internet</label></div><div class="extended_search_checker"><input type="checkbox" id="smoking_allowed" name="smoking_allowed" value="1" ><label for="smoking_allowed">Smoking Allowed</label></div><div class="extended_search_checker"><input type="checkbox" id="tv" name="tv" value="1" ><label for="tv">TV</label></div><div class="extended_search_checker"><input type="checkbox" id="wheelchair_accessible" name="wheelchair_accessible" value="1" ><label for="wheelchair_accessible">Wheelchair Accessible</label></div><div class="extended_search_checker"><input type="checkbox" id="elevator_in_building" name="elevator_in_building" value="1" ><label for="elevator_in_building">Elevator in Building</label></div><div class="extended_search_checker"><input type="checkbox" id="indoor_fireplace" name="indoor_fireplace" value="1" ><label for="indoor_fireplace">Indoor Fireplace</label></div><div class="extended_search_checker"><input type="checkbox" id="heating" name="heating" value="1" ><label for="heating">Heating</label></div><div class="extended_search_checker"><input type="checkbox" id="essentials" name="essentials" value="1" ><label for="essentials">Essentials</label></div><div class="extended_search_checker"><input type="checkbox" id="doorman" name="doorman" value="1" ><label for="doorman">Doorman</label></div><div class="extended_search_checker"><input type="checkbox" id="pool" name="pool" value="1" ><label for="pool">Pool</label></div><div class="extended_search_checker"><input type="checkbox" id="washer" name="washer" value="1" ><label for="washer">Washer</label></div><div class="extended_search_checker"><input type="checkbox" id="hot_tub" name="hot_tub" value="1" ><label for="hot_tub">Hot Tub</label></div><div class="extended_search_checker"><input type="checkbox" id="dryer" name="dryer" value="1" ><label for="dryer">Dryer</label></div><div class="extended_search_checker"><input type="checkbox" id="gym" name="gym" value="1" ><label for="gym">Gym</label></div><div class="extended_search_checker"><input type="checkbox" id="free_parking_on_premises" name="free_parking_on_premises" value="1" ><label for="free_parking_on_premises">Free Parking on Premises</label></div><div class="extended_search_checker"><input type="checkbox" id="wireless_internet" name="wireless_internet" value="1" ><label for="wireless_internet">Wireless Internet</label></div><div class="extended_search_checker"><input type="checkbox" id="pets_allowed" name="pets_allowed" value="1" ><label for="pets_allowed">Pets Allowed</label></div><div class="extended_search_checker"><input type="checkbox" id="familykid_friendly" name="familykid_friendly" value="1" ><label for="familykid_friendly">Family/Kid Friendly</label></div><div class="extended_search_checker"><input type="checkbox" id="suitable_for_events" name="suitable_for_events" value="1" ><label for="suitable_for_events">Suitable for Events</label></div><div class="extended_search_checker"><input type="checkbox" id="non_smoking" name="non_smoking" value="1" ><label for="non_smoking">Non Smoking</label></div><div class="extended_search_checker"><input type="checkbox" id="phone_boothlines" name="phone_boothlines" value="1" ><label for="phone_boothlines">Phone (booth/lines)</label></div><div class="extended_search_checker"><input type="checkbox" id="projectors" name="projectors" value="1" ><label for="projectors">Projector(s)</label></div><div class="extended_search_checker"><input type="checkbox" id="bar__restaurant" name="bar__restaurant" value="1" ><label for="bar__restaurant">Bar / Restaurant</label></div><div class="extended_search_checker"><input type="checkbox" id="air_conditioner" name="air_conditioner" value="1" ><label for="air_conditioner">Air Conditioner</label></div><div class="extended_search_checker"><input type="checkbox" id="scanner__printer" name="scanner__printer" value="1" ><label for="scanner__printer">Scanner / Printer</label></div><div class="extended_search_checker"><input type="checkbox" id="fax" name="fax" value="1" ><label for="fax">Fax</label></div></div>        <!--
        <div class="col-md-2">
            <input name="submit" type="submit" class="wpb_btn-info wpb_btn-small wpestate_vc_button  vc_button" id="advanced_submit_2" value="Search">
        </div>
         
  
        <div class="adv_extended_options_text" id="adv_extended_options_text_adv" data-pageid="141">More Options</div>
      -->
        <script type="text/javascript">
        //<![CDATA[
        jQuery(document).ready(function(){
            var availableTags = [ { label: "Baltimore", category: "tax" }, { label: "Boston", category: "tax" }, { label: "Philadelphia", category: "tax" }, { label: "Jersey City", category: "tax" }, { label: "New York", category: "tax" }, { label: "Washington", category: "tax" }, { label: "Glover Park", category: "tax" }, { label: "Manhattan", category: "tax" }, { label: "Glover Park, Washington", category: "tax" }, { label: "Historic Center", category: "tax" }, { label: "Liberty State Park", category: "tax" }, { label: "Bakery Park", category: "tax" }, { label: "Arlington", category: "tax" }, { label: "Brightwood", category: "tax" }, { label: "East Side", category: "tax" }, { label: "Mattapan", category: "tax" }, { label: "Wesley Heights", category: "tax" }, { label: "united states", category: "meta" }, { label: "uganda", category: "meta" }, { label: "MD", category: "meta" }, { label: "WA", category: "meta" }, { label: "MA", category: "meta" }, { label: "PA", category: "meta" }, { label: "NY", category: "meta" }, { label: "", category: "meta" }, { label: "Maryland", category: "meta" }, { label: "Washington County ", category: "meta" }, { label: "Suffolk County", category: "meta" }, { label: "Philadelphia", category: "meta" }, { label: "New York County", category: "meta" }, { label: "", category: "meta" },];
            jQuery("#search_location_autointernal,#search_location_mobile_autointernal,#search_location_filter_widget_autointernal,#search_location_filter_shortcode_autointernal,#search_location_filter_autointernal").autocomplete({
                source: function(request, response) {
                    var results = jQuery.ui.autocomplete.filter(availableTags, request.term);
                    response(results.slice(0, 10));
                },
                select: function (a, b) {
                    jQuery(".stype").val(b.item.category);    
                
                    if (document.getElementById("search_location_filter_autointernal")) {
                   
                        jQuery("#search_location_filter_autointernal").val(b.item.label);
                        start_filtering_ajax_map(1);
                    }
                }
            });
        });
        //]]>
    </script>       
       

    </div>
</div>


<div id="advanced_search_map_list_hidden">
    <div class="col-md-2">
        <div class="show_filters" id="adv_extended_options_show_filters">Search Options</div>
    </div>  
</div>    

        <div class="loader-inner ball-pulse" id="listing_loader">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div> 
            

        <div id="listing_ajax_container" class="ajax-map"> 
            <h1 class="entry-title title_prop">Search Results</h1>

<div id="resultsPane" style="min-width: 100%;">

 @if(Count($employees)>=1)
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


</div>

        </div>
        <!-- Listings Ends  here --> 
        
        
        
               
    
    </div><!-- end 8col container-->

</div>  
 </div><!-- end content_wrapper started in header or full_width_row from prop list -->

@section('scripts')


        <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>


<a href="#" class="backtop "><i class="fa fa-chevron-up"></i></a><script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_41.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_43.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_42.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_39.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_37.js'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_36.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_344.js'></script>
<script type='text/javascript' src='../../wp-includes/js/MS_31.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/MS_35.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_34.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_33.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_44.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_32.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_40.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_38.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_29.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/i18n/MS_27.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_17.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var googlecode_regular_vars = {"general_latitude":"40.781711","general_longitude":"-73.955927","path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals\/\/css\/css-images","markers":"[]","idx_status":"0","page_custom_zoom":"5","generated_pins":"1","on_demand_pins":"yes"};
var googlecode_regular_vars2 = {"markers2":"[[\"Huge%20Sunny%20Villa%20%26%238211%3B%20East%20Side\",\"40.7185382\",\"-73.9833874\",1,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo384-400x314.jpg\",\"%20%E2%82%AC%20500%20\",\"villa\",\"entire-home\",\"villaentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fhuge-sunny-villa-east-side%2F\",137,\"new-york\",\"east-side\",500,\"3\",\"12\",\"2,500\",\"Villa\",\"Entire%20Home\",\"normal\"],[\"Modern%20Spacious%20Villa\",\"40.7184746\",\"-73.9882516\",2,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2FApartment-by-the-Beach-03-400x314.jpg\",\"%20%E2%82%AC%20110%20\",\"villa\",\"entire-home\",\"villaentire-home\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fmodern-spacious-villa%2F\",141,\"new-york\",\"east-side\",110,\"2\",\"5\",\"2,500\",\"Villa\",\"Entire%20Home\",\"verified\"],[\"Nice%20Terrace%20Condo%20Penn%20Station\",\"40.7274893\",\"-73.9950182\",3,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo1114-400x314.jpg\",\"%20%E2%82%AC%20200%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2Fterrace-condo-penn-station%2F\",133,\"new-york\",\"manhattan\",200,\"2\",\"8\",\"1,200\",\"Condos\",\"Private%20Room\",\"normal\"],[\"2%20Bedrooms%20Video\",\"40.7067600713\",\"-74.0175533295\",4,\"http%3A%2F%2Fdemo1.wprentals.org%2Fwp-content%2Fuploads%2F2015%2F04%2Fdemo56-400x314.jpg\",\"%20%E2%82%AC%20150%20\",\"condos\",\"private-room\",\"condosprivate-room\",\"http%3A%2F%2Fdemo1.wprentals.org%2Fproperties%2F2-bedrooms-condo%2F\",129,\"new-york\",\"bakery-park\",150,\"2\",\"7\",\"1,000\",\"Condos\",\"Private%20Room\",\"normal\"]]","taxonomy":"property_city","term":"new-york"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/google_js/MS_14.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/google_js/MS_26.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mapfunctions_vars = {"path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals\/\/css\/css-images","pin_images":"{\"entire-home\":\"\",\"private-room\":\"\",\"shared-room\":\"\",\"apartment\":\"\",\"b-b\":\"\",\"cabin\":\"\",\"condos\":\"\",\"dorm\":\"\",\"house\":\"\",\"villa\":\"\",\"apartmententire-home\":\"\",\"b-bentire-home\":\"\",\"cabinentire-home\":\"\",\"condosentire-home\":\"\",\"dormentire-home\":\"\",\"houseentire-home\":\"\",\"villaentire-home\":\"\",\"apartmentprivate-room\":\"\",\"b-bprivate-room\":\"\",\"cabinprivate-room\":\"\",\"condosprivate-room\":\"\",\"dormprivate-room\":\"\",\"houseprivate-room\":\"\",\"villaprivate-room\":\"\",\"apartmentshared-room\":\"\",\"b-bshared-room\":\"\",\"cabinshared-room\":\"\",\"condosshared-room\":\"\",\"dormshared-room\":\"\",\"houseshared-room\":\"\",\"villashared-room\":\"\",\"userpin\":\"\"}","geolocation_radius":"1000","adv_search":"0","in_text":" in ","zoom_cluster":"15","user_cluster":"yes","open_close_status":"0","open_height":"650","closed_height":"550","generated_pins":"1","geo_no_pos":"The browser couldn't detect your position!","geo_no_brow":"Geolocation is not supported by this browser.","geo_message":"m radius","show_adv_search":"yes","custom_search":"no","listing_map":"top","slugs":[],"hows":[],"measure_sys":"m","close_map":"close map","show_g_search_status":"no","slider_price":"no","slider_price_position":"0","map_style":"[{\"featureType\":\"administrative\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"administrative\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#716464\"},{\"weight\":\"0.01\"}]},{\"featureType\":\"administrative.country\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"landscape.natural\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"landscape.natural.landcover\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"poi.attraction\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"simplified\"},{\"color\":\"#a05519\"},{\"saturation\":\"-13\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fff100\"}]},{\"featureType\":\"road.local\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"transit\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"transit.station\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"},{\"color\":\"#84afa3\"},{\"lightness\":52}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"visibility\":\"on\"}]},{\"featureType\":\"water\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"}]}]","is_tax":"1","is_property_list":"0","bypass_fit_bounds":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/google_js/MS_24.js'></script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/google_js/MS_18.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var control_vars = {"searchtext":"SEARCH","searchtext2":"Search here...","path":"http:\/\/demo1.wprentals.org\/wp-content\/themes\/wprentals","search_room":"Type Bedrooms No.","search_bath":"Type Bathrooms No.","search_min_price":"Type Min. Price","search_max_price":"Type Max. Price","contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","zillow_addres":"Your Address","zillow_city":"Your City","zillow_state":"Your State Code (ex CA)","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","login_redirect":"http:\/\/demo1.wprentals.org\/my-profile\/","login_loading":"Sending user info, please wait...","street_view_on":"Street View","street_view_off":"Close Street View","userid":"0","show_adv_search_map_close":"yes","close_map":"close map","open_map":"open map","fullscreen":"Fullscreen","default":"Default","addprop":"Please wait while we are processing your submission!","deleteconfirm":"Are you sure you wish to delete?","terms_cond":"You must to agree with terms and conditions!","slider_min":"0","slider_max":"1000","bookconfirmed":"Booking request sent. Please wait for owner's confirmation!","bookdenied":"The selected period is already booked. Please choose a new one!","to":"to","curency":"\u20ac","where_curency":"before","price_separator":".","datepick_lang":"en-GB","custom_price":"{\"1484524800\":79,\"1484611200\":79,\"1484697600\":79,\"1484784000\":79,\"1484870400\":79,\"1484956800\":79,\"1485043200\":79,\"1485129600\":79,\"1485216000\":79,\"1485302400\":79,\"1485388800\":79,\"1485475200\":79,\"1485561600\":79,\"1485648000\":79,\"1485734400\":79,\"1485820800\":79,\"1486944000\":55,\"1487030400\":55,\"1487116800\":55,\"1487203200\":55,\"1487289600\":55,\"1487376000\":55,\"1487462400\":55,\"1487548800\":55,\"1487635200\":55,\"1487721600\":55,\"1487808000\":55,\"1487894400\":55,\"1487980800\":55,\"1488067200\":55,\"1488153600\":55,\"1488240000\":55,\"1489363200\":32,\"1489449600\":32,\"1489536000\":32,\"1489622400\":32,\"1489708800\":32,\"1489795200\":32,\"1489881600\":32,\"1489968000\":32,\"1490054400\":32,\"1490140800\":32,\"1490227200\":32,\"1491868800\":10,\"1491955200\":10,\"1492041600\":10,\"1492128000\":10,\"1492214400\":10,\"1492300800\":10,\"1492387200\":10,\"1492473600\":10,\"1492560000\":10}","booking_array":"{\"0\":1447718400,\"1\":1447718400,\"2\":1435276800,\"3\":1435276800,\"1457568000\":2769,\"1457654400\":2769,\"1457740800\":2769,\"1457827200\":2769,\"1457913600\":2769,\"1458000000\":2769,\"1458086400\":2769,\"1458172800\":2769,\"1485302400\":9658,\"1487116800\":9677,\"1487203200\":9677,\"1487289600\":9677,\"1487376000\":9677,\"1487462400\":9677,\"1487548800\":9677,\"1487635200\":9677,\"1487721600\":9677,\"1487808000\":9677,\"1487894400\":9677,\"1487980800\":9677,\"1488067200\":9677,\"1488153600\":9677,\"1485475200\":9701,\"1485561600\":9701,\"1485648000\":9701,\"1485734400\":9701,\"1486684800\":9945,\"1486771200\":9945,\"1488412800\":10020,\"1488499200\":10020,\"1488585600\":10020,\"1488672000\":10020,\"1488758400\":10020,\"1488844800\":10020,\"1488931200\":10020,\"1489017600\":10020,\"1489104000\":10020,\"1489190400\":10020,\"1489276800\":10020,\"1489363200\":10020,\"1489449600\":10020,\"1489536000\":10020,\"1493856000\":10134,\"1493942400\":10134,\"1494028800\":10134,\"1494115200\":10134,\"1494201600\":10134,\"1494288000\":10134,\"1494374400\":10134,\"1494460800\":10134,\"1494547200\":10134,\"1494633600\":10134,\"1494720000\":10134,\"1494806400\":10134,\"1494892800\":10134,\"1494979200\":10134,\"1489708800\":10190,\"1489795200\":10190,\"1489881600\":10190,\"1489968000\":10190,\"1490054400\":10190,\"1490140800\":10190,\"1490227200\":10190,\"1490313600\":10190,\"1491177600\":10229,\"1491264000\":10229,\"1491350400\":10229,\"1491436800\":10229,\"1491523200\":10229,\"1491609600\":10229,\"1491696000\":10229,\"1491782400\":10229,\"1491868800\":10229,\"1491955200\":10229,\"1492041600\":10229,\"1492128000\":10229,\"1492214400\":10229,\"1492300800\":10229,\"1492387200\":10229,\"1492473600\":10229,\"1492560000\":10229,\"1492646400\":10229,\"1492732800\":10229,\"1495152000\":10381,\"1495238400\":10381,\"1495324800\":10381,\"1495411200\":10381,\"1490745600\":10396,\"1490832000\":10396,\"1495670400\":11178,\"1495756800\":11178,\"1495843200\":11178,\"1495929600\":11178,\"1496016000\":11178,\"1493510400\":11206,\"1493596800\":11206,\"1496966400\":11498,\"1497052800\":11498,\"1497139200\":11498,\"1497225600\":11498,\"1497312000\":11498,\"1497398400\":11498,\"1497484800\":11498,\"1497571200\":11498}","default_price":"110","transparent_logo":"../../http/demo1wprentalsorg/wp-content/uploads/2015/08/MS_345.png","normal_logo":"","cleaning_fee_per_day":"0","city_fee_per_day":"0","price_per_guest_from_one":"0","checkin_change_over":"0","checkin_checkout_change_over":"0","min_days_booking":"2","extra_price_per_guest":"0","price_per_weekeend":"120","setup_weekend_status":"0","mega_details":"{\"1484524800\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1484611200\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1484697600\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1484784000\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1484870400\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1484956800\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485043200\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485129600\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485216000\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485302400\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485388800\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485475200\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485561600\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485648000\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485734400\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1485820800\":{\"period_min_days_booking\":3,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":89,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":0},\"1486944000\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487030400\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487116800\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487203200\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487289600\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487376000\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487462400\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487548800\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487635200\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487721600\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487808000\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487894400\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1487980800\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1488067200\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1488153600\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1488240000\":{\"period_min_days_booking\":7,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":5,\"period_checkin_checkout_change_over\":5},\"1489363200\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489449600\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489536000\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489622400\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489708800\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489795200\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489881600\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1489968000\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1490054400\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1490140800\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1490227200\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":0,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1491868800\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1491955200\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492041600\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492128000\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492214400\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492300800\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492387200\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492473600\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0},\"1492560000\":{\"period_min_days_booking\":1,\"period_extra_price_per_guest\":0,\"period_price_per_weekeend\":22,\"period_checkin_change_over\":0,\"period_checkin_checkout_change_over\":0}}","mindays":"The selected period is shorter than the minimum required period!","weekdays":"[\"None\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]","stopcheckin":"Check in date is not correct","stopcheckinout":"Check in\/Check out dates are not correct","from":"from","separate_users":"yes","captchakey":"6LfneyYTAAAAAIpnhd5-QwOxcxCWLAJtqLFQeTtk","usecaptcha":"yes","unavailable_check":"Unavailable\/Only Check Out","unavailable":"Unavailable","submission_curency":"USD","direct_price":"To be paid","send_invoice":"Send me the invoice","direct_pay":"Payment info: WP RENTALS Inc.  NY99BONW5558887777 -  Include Invoice number in payment details. ","direct_title":"Direct payment instructions","direct_thx":"Thank you. Please check your email for payment instructions.","guest_any":"any","my_reservations_url":"http:\/\/demo1.wprentals.org\/my-reservations\/","pls_wait":"processing, please wait...","wp_estate_book_down":"0","wp_estate_book_down_fixed_fee":"0","include_expeses":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_20.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajaxcalls_vars = {"contact_name":"Your Name","contact_email":"Your Email","contact_phone":"Your Phone","contact_comment":"Your Message","adv_contact_name":"Your Name","adv_email":"Your Email","adv_phone":"Your Phone","adv_comment":"Your Message","adv_search":"Send Message","admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","login_redirect":"http:\/\/demo1.wprentals.org\/my-profile\/","login_loading":"Sending user info, please wait...","userid":"0","prop_featured":"Property is featured","no_prop_featured":"You have used all the \"Featured\" listings in your package.","favorite":"Favorite<i class=\"fa fa-heart\"><\/i>","add_favorite":"Add to Favorites","remove_favorite":"remove from favorites","add_favorite_unit":"add to favorites","saving":"saving..","sending":"sending message..","reserve":"Reserve Period","paypal":"Connecting to Paypal! Please wait...","stripecancel":"subscription will be cancelled at the end of the current period"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_3.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajaxcalls_add_vars = {"admin_url":"http:\/\/demo1.wprentals.org\/wp-admin\/","tranport_custom_array":"[\"check-in-hour\",\"check-out-hour\",\"breakfast-included\",\"late-check-in\",\"optional-services\",\"outdoor-facilities\",\"extra-people\",\"cancellation\"]","transport_custom_array_amm":"[\"kitchen\",\"internet\",\"smoking_allowed\",\"tv\",\"wheelchair_accessible\",\"elevator_in_building\",\"indoor_fireplace\",\"heating\",\"essentials\",\"doorman\",\"pool\",\"washer\",\"hot_tub\",\"dryer\",\"gym\",\"free_parking_on_premises\",\"wireless_internet\",\"pets_allowed\",\"familykid_friendly\",\"suitable_for_events\",\"non_smoking\",\"phone_boothlines\",\"projectors\",\"bar__restaurant\",\"air_conditioner\",\"scanner__printer\",\"fax\"]","wpestate_autocomplete":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/wprentals/js/MS_45.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var property_vars = {"plsfill":"Please fill all the forms:","sending":"Sending Request...","logged_in":"no","notlog":"You need to log in order to book a listing!","viewless":"View less","viewmore":"View more","nostart":"Check in date cannot be bigger than Check out date","noguest":"Please select the number of guests","guestoverload":"The number of guests is greater than the property capacity - ","guests":"guests","early_discount":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='../../https/wwwgooglecom/recaptcha/MS_4.js'></script>
<script type='text/javascript' src='../../wp-includes/js/MS_12.js'></script>


</div> <!-- end class container -->

<div class="social_share_wrapper">

        <a class="social_share share_facebook_side" href="https://www.facebook.com/wpestate" target="_blank"><i class="fa fa-facebook"></i></a>
        
            <a class="social_share share_twiter_side" href="https://twitter.com/WPESTATE" target="_blank"><i class="fa fa-twitter"></i></a>
        
            <a class="social_share share_google_side" href="https://plus.google.com/u/0/112306178370763368843/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
        
            <a class="social_share share_linkedin_side" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
        
            <a class="social_share share_pinterest_side" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
        
</div>

</div> <!-- end website wrapper -->


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
        

   </div>


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

   <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/search.js') }}"></script>
@endsection

@endsection