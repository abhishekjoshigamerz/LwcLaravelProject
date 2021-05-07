@include('frontendview/include/header')

<div id="rs-categories" class="rs-categories home-style14 pt-100 pb-90 md-pt-70 md-pb-60">
    <div class="container">
        <div class="sec-title6 text-center">
            <div class="img-part mb-10">
                <img src="http://localhost/lwc/public/frontend/images/line.png" alt="">
            </div>
           <h2 class="title title2">You are looking for {{$tag}}</h2>
        </div>
        @if (count($query)==0)
            <div class="row">
                <div class="col-md-12 col-lg-12 mg-30">
                    <p>Sorry We Could not find what you were looking for</p>
                </div>
            </div>
        @else
        <div class="row">
            @foreach ($query as $item)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="categories-items">
                    <div class="cate-images">
                        <a href="#"><img src="{{URL::asset('uploads')}}/{{$item->comics_thumbnail}}" alt=""></a>
                    </div>
                    <div class="contents">
                        <div class="img-part">
                           
                        </div>
                        <div class="content-wrap">
                            <h2 class="title"><a href="#">{{$item->comics_name}}</a></h2>
                            <span class="course-qnty">{{$item->language}} 
                            <div class="btn2">
                                <a href="comicread/pdfcomics/{{$item->url_slug}}">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            @endforeach

           
        </div> 
        @endif
         
    </div>
</div>
@include('frontendview/include/footer')







