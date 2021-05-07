<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home home14-style">
          <div class="footer-top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                          <div class="footer-logo mb-30">
                              <!-- <a href="index.html"><img src="images/dark-logo.png" alt=""></a> -->
                              <img src="{{URL::asset('public/frontend/images/learnwithcomics.png')}}" alt="" />
                          </div>
                            <div class="textwidget pr-60 md-pr-15" ><p>A Social impact initiative by Community Health Research Trust and Dr. Aniruddha Malpani.</p>
                            </div>
                            <ul class="footer_social">  
                                <li> 
                                    <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                </li>
                                <li> 
                                    <a href="https://twitter.com/learnwithcomics " target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
                                </li>
                                <li> 
                                    <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                                </li>
                                                                         
                            </ul>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                          <h3 class="widget-title">Address</h3>
                          <ul class="address-widget">
                              <li>
                                  <i class="flaticon-location"></i>
                                  <div class="desc">5th floor, SBS Road

Opp Sahakari Bhandar

Near Sassoon Dock Colaba Bus Depot,

Mumbai 400005</div>
                              </li>
                              
                              <li>
                                  <i class="flaticon-email"></i>
                                  <div class="desc">
                                      <a href="mailto:">learnwithcomicsorg@gmail.com</a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                          <h3 class="widget-title">Menu</h3>
                          <ul class="site-map">
                              <li><a href="{{url('/')}}">Home</a></li>
                              <li><a href="{{url('/aboutus')}}">About us</a></li>
                              <li><a href="{{url('/')}}">Our Team</a></li>
                              <li><a href="{{url('/buildinpublic')}}">Be a Volunteer</a></li>
                              
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                          <h3 class="widget-title">Our Vision</h3>
                          <div class="recent-post mb-20">
                              
                              <div class="post-item">
                                <div class="post-desc">
                                    
                                        Our mission is to make learning fun again!
                                    
                                </div>
                                
                            </div>
                              
                            
                          </div> 
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="footer-bottom">
              <div class="container">                    
                  <div class="row y-middle">
                      <div class="col-lg-12 md-mb-20">
                          <div class="copyright">
                              <p>&copy; 2020 All Rights Reserved. Developed By <a href="">Learnwithcomics Team</a></p>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer End -->
      <!-- start scrollUp  -->
      <div id="scrollUp" class="orange-color">
          <i class="fa fa-angle-up"></i>
      </div>
      <!-- End scrollUp  -->


      <!-- Search Modal Start -->
      <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
          </button>
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="search-block clearfix">
                      <form method="POST" action="{{'search'}}">
                          <div class="form-group">
                            {{ csrf_field() }}
                              <input class="form-control" name="search" placeholder="Search Here..." type="text">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- Search Modal End -->
      
      <!-- modernizr js -->
      <!-- Modal -->
    @if ($popup==1)
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
             <a href="https://docs.google.com/forms/d/e/1FAIpQLSe1XMlOHBuuzSydGzD7atA9TqvP16x9sjjlrsQre3aqY_g4gQ/viewform?usp=sf_link" target="_blank" ><img src="{{URL::asset('uploads/ginnyimage.jpg')}}" class="img-responsive" /></a>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSe1XMlOHBuuzSydGzD7atA9TqvP16x9sjjlrsQre3aqY_g4gQ/viewform?usp=sf_link" class="btn btn-primary" target="_blank">Enroll Now</a>
            </div>
          </div>
        </div>
      </div>
    @endif 


      <script src="{{URL::asset('public/frontend/js/modernizr-2.8.3.min.js')}}"></script>
      <!-- jquery latest version -->
      <script src="{{URL::asset('public/frontend/js/jquery.min.js')}}"></script>
      <!-- Bootstrap v4.4.1 js -->
      <script src="{{URL::asset('public/frontend/js/bootstrap.min.js')}}"></script>
      <!-- Menu js -->
      <script src="{{URL::asset('public/frontend/js/rsmenu-main.js')}}"></script> 
      <!-- op nav js -->
      <script src="{{URL::asset('public/frontend/js/jquery.nav.js')}}"></script>
      <!-- owl.carousel js -->
      <script src="{{URL::asset('public/frontend/js/owl.carousel.min.js')}}"></script>
      <!-- Slick js -->
      <script src="{{URL::asset('public/frontend/js/slick.min.js')}}"></script>
      <!-- isotope.pkgd.min js -->
      <script src="{{URL::asset('public/frontend/js/isotope.pkgd.min.js')}}"></script>
      <!-- imagesloaded.pkgd.min js -->
      <script src="{{URL::asset('public/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
      <!-- wow js -->
      <script src="{{URL::asset('public/frontend/js/wow.min.js')}}"></script>
      <!-- Skill bar js -->
      <script src="{{URL::asset('public/frontend/js/skill.bars.jquery.js')}}"></script>
      <script src="{{URL::asset('public/frontend/js/jquery.counterup.min.js')}}"></script>        
       <!-- counter top js -->
      <script src="{{URL::asset('public/frontend/js/waypoints.min.js')}}"></script>
      <!-- video js -->
      <script src="{{URL::asset('public/frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
      <!-- magnific popup js -->
      <script src="{{URL::asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- tilt js -->
      <script src="{{URL::asset('public/frontend/js/tilt.jquery.min.js')}}"></script>      
      <!-- plugins js -->
      <script src="{{URL::asset('public/frontend/js/plugins.js')}}"></script>
      <!-- contact form js -->
      <script src="{{URL::asset('public/frontend/js/contact.form.js')}}"></script>
      <!-- main js -->
      <script src="{{URL::asset('public/frontend/js/main.js')}}"></script>
      <script type="text/javascript">
        $(document).ready(function(){
            $("#exampleModal").modal('show');
        });
    </script>
    
  </body>
</html>


