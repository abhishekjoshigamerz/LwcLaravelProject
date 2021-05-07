<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138298814-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138298814-2');
</script>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="description" content="Learn with comics">
	<meta name="author" content="">

	<title>Learnwithcomics - We make learning fun </title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{URL::asset('public/frontend/images/favicon.ico')}}">

	<!-- Google Webfonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,600italic,700italic,800,800italic,300italic,300" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Sanchez:400,400italic" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="{{URL::asset('public/frontend/js/libs/respond.min.js')}}"></script>
	<![endif]-->

	<!-- Bootstrap core CSS -->
	<link href="{{URL::asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="{{URL::asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/css/theme-shop.css')}}" rel="stylesheet">
	<link href="{{URL::asset('public/frontend/css/elements.css')}}" rel="stylesheet">
	<link href="{{URL::asset('public/frontend/fonts/icomoon/iconmoon.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
	
    <!-- Plugins CSS -->
    <link href="{{URL::asset('public/frontend/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/js/flexslider/flexslider.css')}}" rel="stylesheet">
	<link href="{{URL::asset('public/frontend/css/isotope.css')}}" rel="stylesheet">
	<link href="{{URL::asset('public/frontend/js/slickNav/slicknav.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/frontend/js/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    
    <!--[if lt IE 9]>
        <script src="{{URL::asset('public/frontend/js/libs/respond.min.js')}}"></script>
        <![endif]-->
        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/fe1fbcd079fa265e5852362c4/b969a2135db97088a0e763b56.js");</script>
        <script>(function(f,b){if(!b.__SV){var e,g,i,h;window.mixpanel=b;b._i=[];b.init=function(e,f,c){function g(a,d){var b=d.split(".");2==b.length&&(a=a[b[0]],d=b[1]);a[d]=function(){a.push([d].concat(Array.prototype.slice.call(arguments,0)))}}var a=b;"undefined"!==typeof c?a=b[c]=[]:c="mixpanel";a.people=a.people||[];a.toString=function(a){var d="mixpanel";"mixpanel"!==c&&(d+="."+c);a||(d+=" (stub)");return d};a.people.toString=function(){return a.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
for(h=0;h<i.length;h++)g(a,i[h]);var j="set set_once union unset remove delete".split(" ");a.get_group=function(){function b(c){d[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));a.push([e,call2])}}for(var d={},e=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<j.length;c++)b(j[c]);return d};b._i.push([e,f,c])};b.__SV=1.2;e=f.createElement("script");e.type="text/javascript";e.async=!0;e.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
MIXPANEL_CUSTOM_LIB_URL:"file:"===f.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";g=f.getElementsByTagName("script")[0];g.parentNode.insertBefore(e,g)}})(document,window.mixpanel||[]);
mixpanel.init("a18b6ca309354395ceb46c5efd539426", {batch_requests: true})</script>
</head>
<body id="home">
    <div class="body">
        <div class="top-wrap">
            <div class="overlay-bg"></div>
            <!-- Header -->
            <header>
                <div class="container">
                    <div class="col-md-12">
    
                        <!-- Logo -->
                        <h1 class="logo"><a href="{{url('/')}}"><img src="{{URL::asset('public/frontend/images/logo2.png')}}" class="img-responsive" alt="img"></a></h1>
    
                        <!-- Nav Menu -->
                        <div id='cssmenu'>
                            <ul>
                                <li class='has-sub active'>
                                    <a href='{{url('/')}}'><span>Home</span></a>
                                    <ul>
                                        <li><a href='{{url('aboutus')}}'><span>About us</span></a></li>
                                        <li><a href='{{url('team')}}'><span>Team</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'><span>Explore Comics</span></a>
                                    <ul>
                                        <li><a href='{{url('class')}}'><span>Regular Comics</span></a></li>
                                        <li><a href='{{url('videotocomics')}}'><span>Video To Comics</span></a></li>
                                        <li><a href='{{url('talkingcomics')}}'><span>Talking Comics</span></a></li>
                                    </ul>
                                    
                                </li>
    
                                <li class='has-sub'>
                                    <a href='{{url('quiz')}}'><span>Quiz</span></a>
                                    
                                </li>
    
                                <li class='has-sub'>
                                    <a href='#'><span>Our Resources</span></a>
                                    <ul>
                                        <li><a href='{{url('resources/students')}}'><span>Student Resource</span></a></li>
                                        <li><a href='{{url('resources/teachers')}}'><span>Teacher Resource</span></a></li>
                                    </ul>
                                </li>
    
                                <li class='has-sub'>
                                    <a href='{{url('buildinpublic')}}'><span>Build in Public</span></a>
                                    <ul>
                                       
                                        
                                    </ul>
                                </li>
                                <li class='last'><a href='{{url('contactus')}}'><span>Contact Us</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            