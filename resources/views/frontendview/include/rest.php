<li class="menu-item-has-children">
    <a href="#">Explore Comics</a>
    @if (count($category)>0)
    <ul class="sub-menu">
        @foreach ($category as $cat)
        <li class="menu-item-has-children right">
            <a href="#">{{$cat->class_name}}</a>
            <?php  $data =  \App\Model\Subject\Subject::where('class_subject_id',$cat->category_id)->get(); ?>
            @if (count($data)>0)
            <ul class="sub-menu right">   @foreach ($data as $dd)
                <li><a href="{{url('/comics/')}}/{{$cat->class_slug}}/{{$dd->subject_url}}">{{$dd->subject_name}}</a></li>

                 @endforeach
                 
            </ul>
            @endif 
        </li>
        @endforeach
    </ul>
    @endif
    
</li>




//menu bar laravel 
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
            
            </li>
             <li class="menu-item-has-children"><a href="{{url('/aboutus')}}">About us</a> </li>
               
             //dyanmic menu starts here


            
             <li class="menu-item-has-children">
             <a href="{{url('/buildinpublic')}}">Build in Public</a>
             </li>
             <li class="menu-item-has-children">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item-has-children right">
                        <a href="#">Team</a>
                        <ul class="sub-menu right">
                            <li><a href="team.html">Team One</a></li>
                            <li><a href="team2.html">Team Two</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                        <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div></ul>
                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
                    <li class="menu-item-has-children">
                        <a href="#">Event</a>
                        <ul class="sub-menu right">
                            <li><a href="events-style1.html">Event One</a></li>
                            <li><a href="events-style2.html">Event Two</a></li>
                            <li><a href="events-style3.html">Event Three</a></li>
                        <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div></ul>
                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
                    <li class="menu-item-has-children">
                        <a href="#">Gallery</a>
                        <ul class="sub-menu right">
                            <li><a href="gallery-style1.html">Gallery One</a></li>
                            <li><a href="gallery-style2.html">Gallery Two</a></li>
                            <li><a href="gallery-style3.html">Gallery Three</a></li>
                        <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div></ul>
                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
                    <li class="menu-item-has-children">
                        <a href="#">Shop</a>
                        <ul class="sub-menu right">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div></ul>
                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
                    <li class="menu-item-has-children">
                        <a href="#">Others</a>
                        <ul class="sub-menu right">
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="error.html">404 Page</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div></ul>
                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
                <div class="sub-menu-close"><i class="fa fa-times" aria-hidden="true"></i>Close</div></ul>
            <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
             <li class="menu-item-has-children">
                 <a href="{{url('/contactus')}}">Contact</a>
             </li>
         </ul> <!-- //.nav-menu -->
      </nav>                                        
    </div> <!-- //.main-menu -->                                
</div>



//next 

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end ">
    <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon justify-content-end"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active rs-mega-menu mega-rs menu-item-has-children current-menu-item">
          <a class="nav-link" href="{{URL::asset('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{URL::asset('/')}}">About us <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Explore Comics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                <li><a class="dropdown-item" href="#">Another submenu action</a></li>
  
  
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                    <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                    <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>


  // the book 

  <!--Preloader area start here-->
  <div id="loader" class="loader orange-color">
           <div class="loader-container">
               <div class='loader-icon'>
                
                   <img src="{{URL::asset('public/frontend/images/learnwithcomics.png')}}" alt="">
               </div>
           </div>
       </div>
       <!--Preloader area End here--> 


        <!--Full width header Start-->
        <div class="full-width-header header-style1 home1-modifiy home14-style">
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
                                      <a href="index.html">
                                          <img src="assets/images/logo-dark.png" alt="">
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
                                            <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"> <a href="index.html">Home</a>
                                                <ul class="mega-menu"> 
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-megamenu">
                                                                <ul class="sub-menu">
                                                                    <li><a href="index.html">Main Demo</a> </li>
                                                                    <li class="active"><a href="index2.html">Online Course</a> </li>
                                                                    <li><a href="index3.html">University 01</a> </li>
                                                                    <li><a href="index4.html">E-Learning</a> </li>
                                                                    <li><a href="index5.html">Distance Learning</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-megamenu">
                                                                <ul class="sub-menu last-sub-menu">
                                                                    <li><a href="index6.html">Personal Demo</a> </li>
                                                                    <li><a href="index7.html">Online Training</a> </li>
                                                                    <li><a href="index8.html">Online Learning</a> </li>
                                                                    <li><a href="index9.html">Kitchen Coach</a> </li>
                                                                    <li><a href="index10.html">University 02</a> </li>
                                                                </ul>
                                                            </div>  
                                                            <div class="single-megamenu">
                                                                <ul class="sub-menu last-sub-menu">
                                                                    <li><a href="index11.html">Kindergarten 01</a> </li>
                                                                    <li><a href="index12.html">Freelancing Course</a> </li>
                                                                    <li><a href="index13.html">Gym Coach</a> </li>
                                                                    <li><a href="index14.html">Courses Archive</a> </li>
                                                                    <li><a href="#">Coming Soon</a> </li>
                                                                </ul>
                                                            </div> 
                                                        </div>
                                                    </li>
                                                </ul> <!-- //.mega-menu -->
                                            </li>
                                             <li class="menu-item-has-children">
                                                 <a href="#">About</a>
                                                 <ul class="sub-menu">
                                                     <li><a href="about.html">About One</a> </li>
                                                     <li><a href="about2.html">About Two</a> </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Courses</a>
                                                 <ul class="sub-menu">
                                                     <li><a href="course.html">Courses One</a> </li>
                                                     <li><a href="course2.html">Courses Two</a> </li>
                                                     <li><a href="course3.html">Courses Three</a> </li>
                                                     <li><a href="course4.html">Courses Four</a> 
                                                     </li>
                                                     <li><a href="course5.html">Courses Five</a> </li>
                                                     <li><a href="course-single.html">Courses Single</a> </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Pages</a>
                                                 <ul class="sub-menu">
                                                     <li class="menu-item-has-children right">
                                                         <a href="#">Team</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="team.html">Team One</a></li>
                                                             <li><a href="team2.html">Team Two</a></li>
                                                             <li><a href="team-single.html">Team Single</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Event</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="events-style1.html">Event One</a></li>
                                                             <li><a href="events-style2.html">Event Two</a></li>
                                                             <li><a href="events-style3.html">Event Three</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Gallery</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="gallery-style1.html">Gallery One</a></li>
                                                             <li><a href="gallery-style2.html">Gallery Two</a></li>
                                                             <li><a href="gallery-style3.html">Gallery Three</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Shop</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="shop.html">Shop</a></li>
                                                             <li><a href="shop-single.html">Shop Single</a></li>
                                                             <li><a href="cart.html">Cart</a></li>
                                                             <li><a href="checkout.html">Checkout</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Others</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="faq.html">FAQ</a></li>
                                                             <li><a href="error.html">404 Page</a></li>
                                                             <li><a href="login.html">Login</a></li>
                                                             <li><a href="register.html">Register</a></li>
                                                         </ul>
                                                     </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Blog</a>
                                                 <ul class="sub-menu">
                                                     <li><a href="blog.html">Blog</a></li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Blog Sidebar</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                             <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Single Post</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="blog-post-left.html">Post Left Sidebar</a></li>
                                                             <li><a href="blog-post-right.html">Post Right Sidebar</a></li>
                                                             <li><a href="blog-single.html">Full Width Post</a></li>
                                                         </ul>
                                                     </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Contact</a>
                                                 <ul class="sub-menu">
                                                    <li><a href="contact.html">Contact One</a> </li>
                                                    <li><a href="contact2.html">Contact Two</a> </li>
                                                    <li><a href="contact3.html">Contact Three</a> </li>
                                                    <li><a href="contact4.html">Contact Four</a> </li>
                                                 </ul>
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
                                        <li class="icon-bar cart-inner no-border mini-cart-active">
                                            <a class="cart-icon">
                                                <!-- <span class="cart-count">2</span> -->
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                            <div class="woocommerce-mini-cart text-left">
                                                <div class="cart-bottom-part">
                                                    <ul class="cart-icon-product-list">
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="cart.html">Law Book</a><br>
                                                                <span class="quantity">1 × $30.00</span>
                                                            </div>
                                                            <div class="product-image">
                                                                <a href="cart.html"><img src="assets/images/shop/1.jpg" alt="Product Image"></a>
                                                            </div>
                                                        </li>
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="cart.html">Spirit Level</a><br>
                                                                <span class="quantity">1 × $30.00</span>
                                                            </div>
                                                            <div class="product-image">
                                                                <a href="cart.html"><img src="assets/images/shop/2.jpg" alt="Product Image"></a>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <div class="total-price text-center">
                                                        <span class="subtotal">Subtotal:</span>
                                                        <span class="current-price">$85.00</span>
                                                    </div>

                                                    <div class="cart-btn text-center">
                                                        <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                                        <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                    </ul>
                                    <span>
                                        <a id="nav-expander" class="nav-expander style3">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </a>
                                    </span>
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
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
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
                <!-- Menu Start -->
                
                <!-- Menu End --> 

                <div id="rs-about" class="rs-about style3 pt-100 md-pt-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h1 class="text-center">About us</h1>
            </div>
        </div>
        <div class="row y-middle">
            <div class="col-lg-4 lg-pr-0 md-mb-30">
                <div class="about-intro">
                    <div class="sec-title">
                        <div class="sub-title orange">About Us</div>
                        <h2 class="title mb-21">Learn with Comics</h2>
                        <div class="desc big">Lets make learning fun is our Motto</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pl-83 md-pl-15">
                <div class="row rs-counter couter-area">
                    <div class="col-md-4 sm-mb-30">
                        <div class="counter-item one">
                            <img class="count-img" src="{{URL::asset('public/frontend/images/about/style3/icons/1.png')}}" alt="">
                            <h2 class="number rs-count kplus">1</h2>
                            <h4 class="title mb-0">Students</h4>
                        </div>
                    </div>
                    <div class="col-md-4 sm-mb-30">
                        <div class="counter-item two">
                            <img class="count-img" src="{{URL::asset('public/frontend/images/about/style3/icons/2.png')}}" alt="">
                            <h2 class="number rs-count">6</h2>
                            <h4 class="title mb-0">Languages</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-item three">
                            <img class="count-img" src="{{URL::asset('public/frontend/images/about/style3/icons/3.png')}}" alt="">
                            <h2 class="number rs-count percent">100 </h2>
                            <h4 class="title mb-0">Learning</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rs-about-video" class="rs-about-video pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="col-md-12">
            <p>Learn With Comics blends science and storytelling to make concepts visual and hence easily understood.



                Chitrakatha  is an ancient Indian art of narrating stories with pictures.
                
                This art is a legacy carried on from  generation to generation, narrating stories of Gods and royals. <br /><br />
                
                
                
                Learn With Comics aims to carry forward this tradition digitally to enable access to anyone anywhere  in the modern digital age 
                
                
                
                This would also encourage children to read more. Engaging young minds thus we are attempting to create a new generation of out of the box thinkers and doers rather than only learning by rote.  <br /><br />
                
                
                
                Today's competitive environment compels students to compete, excel and achieve under conditions of tremendous pressure.
                
                Learn With Comics is an attempt to make learning fun ! 
                
                Curated by  experienced teachers in collaboration with creative artists, scientific concepts are explained simplistically through comic styled art. <br /><br />
                
                
                
                Come with us, as we take you into the realm of comics.  
                
                Help us to change lessons to be learnt for academics  into lessons for life.
                
                <br /><br />
                Happy Reading!!</p>
        </div>
    </div>
</div>

<div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pt-20 pb-30 md-pt-0 md-pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h1 class="text-center">
                    <?php 
                        $class = Request::route('class');
                        $class = ucfirst($class);
                        $subject = Request::route('subject');
                        $subject = ucfirst($subject);
                        $medium = Request::route('language');
                        $medium = ucfirst($medium);
                        
                    ?>
                   {{$class}}  {{$subject}} - {{$medium}} medium
                </h1>
            </div>
        </div>
        <div class="sec-title6 text-center">
            <div class="img-part mb-10">
                <img src="http://localhost/lwc/public/frontend/images/line.png" alt="">
            </div>
           <h2 class="title title2">Start Learning</h2>
        </div>
        <div class="row">
           @if (count($data)==0)
           <div class="col-lg-12 col-md-12 mb-30">
            <p class="text-center">Sorry this category does not have any comics yet! You can check out our other comics in other sections or you can check for new comics tomorrow. We upload on a daily basis.</p>
        </div>
           @endif
            @if (count($data)>0)
            <div class="row">
            @foreach ($data as $record)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="courses-item">
                     <div class="courses-grid">
                         <div class="img-part text-center">
                             <a href="{{url('/comicread/pdfcomics')}}/{{$record->url_slug}}"><img src="{{url('uploads/')}}/{{$record->comics_thumbnail}}" alt=""></a>
                         </div>
                         <div class="content-part">
                             <div class="info-meta">
                                 <ul>     
                                     <?php $lang = $record->language;
                                        $lang = ucfirst($lang);
                                        $subject = $record->subject;
                      $subject = ucfirst($subject);
                      $class = $record->class;
                      $class = ucfirst($class);
                                     ?>
                                     Language: {{$lang}}                              
                                 </ul>
                             </div>
                             <div class="course-price">
                                 <span class="price">New</span>
                             </div>
                             <h3 class="title"><a href="{{url('/comicread/pdfcomics')}}/{{$record->url_slug}}">{{$record->comics_name}}</a></h3>
                             <ul class="meta-part">
                                 <li class="user">
                                     <i class="fa fa-user">{{$class}}</i>
                                     
                                                                    
                                 </li>
                                 <li class="user">
                                     <i class="fa fa-file">{{$subject}}</i>
                                    
                                                                     
                                 </li>
                             </ul>
                         </div>
                     </div>
                </div>
             </div>  
            @endforeach
            </div>
            @endif       
        </div>
    </div>
    </div>


    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70 loaded">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <h1 class="text-center">{{$record->comics_name}}</h1>
                <p> Click the Bell if you like this comic<a href="{{url('/comicread/pdfcomics/readpdfcomics/likes/')}}/{{$record->pdfcomics_id}}" class="bellIcon"><img src="https://img.icons8.com/plasticine/50/000000/bell--v1.png" /></i> </a>      </p>
                @if($errors->any())
                <p class="alert alert-success">{{$errors->first()}}</p>
                @endif
            </div>
            <!-- Content Column -->
            <div class="col-lg-12 md-mb-50">
                <!-- Intro Info Tabs-->
                <div class="intro-info-tabs">
                 <h4>{{$record->comics_name}}</h4>
                    <div class="tab-content tabs-content" id="myTabContent">
                        <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                            <div class="content white-bg pt-30">
                                <!-- Cource Overview -->
                                <div class="course-overview">
                                   
                                    <div class="inner-box"> 
                                    <div class="embed-responsive embed-responsive-1by1" >
                                       
                                     <iframe src="{{$record->comics_pdf_file}}" frameborder="0"   height="500" ></iframe> 
                                     <a href="{{$record->comics_pdf_file}}" class="btn btn-primary">Full Screen</a>
                                                                
                                </div>  <br /><br />
                                      <a href= "{{$record->comics_pdf_file}}" class="btn btn-primary">Full Screen Comic Mode</a>&nbsp;&nbsp;<div class="fb-share-button" data-href="https://learnwithcomics.org/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flearnwithcomics.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> &nbsp;&nbsp;                                                              </div>  
                                    </div>                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
           
                                  
        </div> 
                    
    </div>
    
</section>



<div id="rs-popular-courses" class="rs-popular-courses main-home home12-style ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 mt-10">
                <h1 class="text-center">
                 Video 2 Comics
                </h1>
            </div>
        </div>
        <div class="sec-title6 text-center">
           
           <h2 class="title title2">Start Learning</h2>
        </div>
        <div class="row">
           <?php $i=0;?>
               @foreach ($records as $record)
               <div class="col-lg-4 col-md-6 mb-10" >
                <div class="courses-item">
                     <div class="courses-grid">
                        
                         <?php $comicname = $record->comics_name;
                         $comicname = ucfirst($comicname);
                         $language = $record->languagetovideo;
                         $language = ucfirst($language);
                         $subject = $record->subject;
                         $subject = ucfirst($subject);
                   ?>

                    
                         <div class="img-part text-center">
                             <a href="{{url('/videotocomics/')}}/{{$c}}/{{$record->url_slug}}"><img src="{{url('/uploads/subjects/')}}/{{$record->comicstovideo_thumbnail}}" alt=""></a>
                         </div>
                         <div class="content-part">
                             <div class="info-meta">
                                 <ul>     
                                     Language: {{$language}}                              
                                 </ul>
                             </div>
                             @if ($i<=6)
                             <div class="course-price">
                                <span class="price">New</span>
                            </div>
                             @endif
                             
                             <h3 class="title"><a href="{{url('/videotocomics')}}/{{$c}}/{{$record->url_slug}}">{{$record->comicstovideo_name}}</a></h3>
                             <ul class="meta-part">
                                 <li class="user">
                                     <i class="fa fa-user"><?php $sub=ucfirst($record->subject_url);echo $sub; ?></i>                                 
                                 </li>
                                 <li class="user">
                                     <i class="fa fa-file"><?php $sub=ucfirst($record->subsubject);echo $sub; ?></i>                                
                                 </li>
                             </ul>
                         </div>
                     </div>
                </div>
             </div>  
             <?php $i++;?>
                @endforeach
        </div>
    </div>
    </div>

    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70 loaded">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <h1 class="text-center">{{$record->comicstovideo_name}}</h1>
                <p> Click the Bell if you like this comic<a href="{{url('/comicread/pdfcomics/videotocomics/likes/')}}/{{$record->video_to_comics_id}}" class="bellIcon"><img src="https://img.icons8.com/plasticine/50/000000/bell--v1.png" /></i> </a>      </p>
            </div>
            <!-- Content Column -->
            <div class="col-lg-12 md-mb-50">
                <!-- Intro Info Tabs-->
                <div class="intro-info-tabs">
                    
                 <h4>{{$record->comicstovideo_name}}</h4>
                 @if($errors->any())
                    <p class="alert alert-success">{{$errors->first()}}</p>
                    @endif
                    <div class="tab-content tabs-content" id="myTabContent">
                        <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                            <div class="content white-bg pt-30">
                                <!-- Cource Overview -->
                                <div class="course-overview">
                                    <div class="inner-box"> 
                                    <div class="embed-responsive embed-responsive-1by1" >
                                        <iframe src="<?php echo $record->video_to_comics_iframe_code;?>" frameborder="0" width="1200" height="980"></iframe>
                                                                                                                    </div>  </div>  
                                    </div>  
                                    <a href= "{{$record->comics_pdf_file}}" class="btn btn-primary">Full Screen Comic Mode</a>&nbsp;&nbsp;<div class="fb-share-button" data-href="https://learnwithcomics.org/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flearnwithcomics.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> &nbsp;&nbsp;                                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            
           
                                  
        </div>                
    </div>
</section>