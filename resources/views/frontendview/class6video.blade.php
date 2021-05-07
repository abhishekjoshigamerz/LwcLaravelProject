@include('frontendview/include/header')

<div id="rs-categories" class="rs-categories home-style14 pt-100 pb-90 md-pt-70 md-pb-60">
    <div class="container">
        <div class="sec-title6 text-center">
            <div class="img-part mb-10">
                <img src="http://localhost/lwc/public/frontend/images/line.png" alt="">
                 <h2 class="title title2">Class 6 Video 2 Comics</h2>
            </div>
            
            <div class="row">
           
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="categories-items">
                    <div class="cate-images">
                        <a href="#"><img src="{{URL::asset('uploads/subjects/scienglogo.png')}}" alt=""></a>
                    </div>
                    <div class="contents">
                        <div class="img-part">
                           
                        </div>
                        <div class="content-wrap">
                            <h2 class="title"><a href="#">Laws of Reflection</a></h2>
                            <span class="course-qnty">English 
                            <div class="btn2">
                                <a href="{{url('readcomics/class6/video2comics/lawsofreflection')}}">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
           
        </div> 
            
@include('frontendview/include/footer');