@include('frontendview/include/header')

<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="{{URL::asset('uploads/download.png')}}" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">Download Comics</h1>
        <ul>
          
            <li>Download Comics</li>
        </ul>
    </div>
</div>
<div id="rs-popular-courses" class="rs-popular-courses style1 orange-color modify1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title6 text-center">
            <div class="img-part mb-10">
                <img src="images/line.png" alt="">
            </div>
           <h2 class="title">Download Comics</h2>
        </div>
        <!-- <div class="gridFilter style2 text-center mb-30">
            <button class="active" data-filter="*">All</button>
            <button data-filter=".filter1">Class 5</button>
            <button data-filter=".filter2">Class 6</button>
            <button data-filter=".filter3">General Education</button>
            <button data-filter=".filter4">High School</button>
        </div> -->
        <div class="row grid" style="position: relative; height: 332.703px;">
            <div class="col-lg-4 col-md-6 grid-item filter1" style="position: absolute; left: 0%; top: 0px;">
                <div class="courses-item mb-30">
                    <div class="img-part">
                        <img src="{{URL::asset('public/frontend/images/learnwithcomics.png')}}" alt="">
                    </div>
                    <div class="content-part">
                        <ul class="meta-part">
                           <a href="{{URL::asset('public/downloads/english/atmosphere.pdf')}}" target="_blank"> <li><span class="price">Download Now</span></li></a>
                        </ul>
                        <h3 class="title"><a href="">Atmosphere - English </a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter4 filter1" style="position: absolute; left: 33.3333%; top: 0px;">
                <div class="courses-item mb-30">
                    <div class="img-part">
                        <img src="{{URL::asset('public/frontend/images/learnwithcomics.png')}}" alt="">
                    </div>
                    <div class="content-part">
                        <ul class="meta-part">
                        <a href="{{URL::asset('public/downloads/english/AIR.pdf')}}" target="_blank"> <li><span class="price">Download Now</span></li></a>
                        </ul>
                        <h3 class="title"><a href="">Air - English</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter3 filter2" style="position: absolute; left: 66.6667%; top: 0px;">
                <div class="courses-item mb-30">
                    <div class="img-part">
                        <img src="{{URL::asset('public/frontend/images/learnwithcomics.png')}}" alt="">
                    </div>
                    <div class="content-part">
                        <ul class="meta-part">
                        <a href="{{URL::asset('public/frontend/downloads/english/watercycle.pdf')}}" target="_blank"> <li><span class="price">Download Now</span></li></a>
                        </ul>
                        <h3 class="title"><a href=""> Watercycle - English </a></h3>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@include('frontendview/include/footer')