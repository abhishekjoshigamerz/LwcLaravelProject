<!DOCTYPE html>
<html lang="en">  
    <head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138298814-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138298814-2');
</script>


        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Learn with Comics</title>
        <meta name="description" content="We are making learning fun again with the help of comics. Come here and start learning your school syllabus with the help of Learn with comics all for free.">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('public/frontend/images/fav-orange.png') }}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/frontend/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/font-awesome.min.css')}} ">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/animate.css')}}">
        <!-- owl.carousel css -->   
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{URL::asset('public/frontend/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/frontend/css/responsive.css')}}">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta property="og:url"           content="https://learnwithcomics.org/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Learnwithcomics" />
<meta property="og:description"   content="Learn with comics is a website which makes learning fun by the use of comics." />
<meta property="og:image"         content="" />
    </head>
    <body class="defult-home">
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="jVHGX4r5"></script>
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 


        <!--Full width header Start-->
        <div class="full-width-header header-style1 home1-modifiy">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area home11-topbar modify1">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-5">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="">learnwithcomicsorg@gmail.com</a>
                                    </li>
                                  
                                </ul>
                            </div>
                            <div class="col-md-7 text-right">
                                    <ul class="toolbar-sl-share">
                                        <li class="opening"> <i class="flaticon-location"></i> Mumbai, Maharasthra </li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/learnwithcomics"><i class="fa fa-twitter"></i></a></li>
                                       
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                              <div class="logo-cat-wrap">
                                  <div class="logo-part">
                                      <a href="{{url('/')}}">
                                          <img src="{{URL::asset('public/frontend/images/learnwithcomics.png')}}" />
                                      </a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-8 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                      <div class="mobile-menu">
                                          <a class="rs-menu-toggle">
                                              <i class="fa fa-bars"></i>
                                          </a>
                                      </div>
                                      <nav class="rs-menu">
                                         <ul class="nav-menu">
                                            <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"> <a href="{{url('/')}}">Home</a>
                                               <ul class="sub-menu">
                                                <li class="menu-item-has-children right">
                                                    <a href="{{url('/aboutus')}}">About</a>
                                                </li>
                                               </ul>
                                            </li>
                                             

                                             <li class="menu-item-has-children">
                                                 <a href="#">Explore Comics</a>
                                                 <ul class="sub-menu">
                                                     <li class="menu-item-has-children right">
                                                         <a href="#">Regular Comics</a>
                                                         @if (count($category)>0)
                                                        <ul class="sub-menu">
                                                        @foreach ($category as $cat)
                                                            <li class="menu-item-has-children right">
                                                                <a href="{{url('/')}}/class/{{$cat->class_slug}}">{{$cat->class_name}}</a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        @endif
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                        <a href="#">Video2Comics</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($category as $cat)
                                                            <li class="menu-item-has-children right">
                                                                <a href="{{url('/videotocomics')}}/{{$cat->class_slug}}">{{$cat->class_name}}</a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                 </ul>
                                               
                                             </li> 
                                             <li class="menu-item-has-children">
                                                <a href="#">Resources</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children right"><a href="{{url('/resources/students')}}">Student Resources</a></li>
                                                    <li class="menu-item-has-children right"><a href="{{url('/resources/teachers')}}">Teacher Resources</a></li>
                                                </ul>
                                            </li>
                                             <li class="menu-item-has-children">
                                                <a href="{{url('/buildinpublic')}}">Build in Public</a>
                                            </li>
                                             <li class="menu-item-has-children">
                                                 <a href="{{url('/contactus')}}">Contact</a>
                                                
                                             </li>
                                         </ul> <!-- //.nav-menu -->
                                      </nav>                                         
                                    </div> <!-- //.main-menu -->                                
                                </div>
                            </div>
                            <div class="col-lg-2 text-right">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End --> 

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="assets/images/logo-dark.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We are making learning fun again with the help of comics./p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/1.jpg"><img src="assets/images/gallery/1.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/2.jpg"><img src="assets/images/gallery/2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/3.jpg"><img src="assets/images/gallery/3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/4.jpg"><img src="assets/images/gallery/4.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/5.jpg"><img src="assets/images/gallery/5.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/6.jpg"><img src="assets/images/gallery/6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="assets/images/map.jpg" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>