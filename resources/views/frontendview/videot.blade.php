@include('frontendview/include/header2')
<div class="page-wrap container">
    <h3 class="text-center">Select your Class</h3>
    <!-- Shop Content -->
    <div role="main" class="main shop">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                   
                </div>
                <div class="space20"></div>
                <div class="row">
                    <ul class="products thumb-info-list">
                        @foreach ($records as $item)
                        <li class="col-md-3 product">
                            <a href="shop-product-sidebar.html">
                            {{--  <span class="onsale">Sale!</span>  --}}
                            </a>
                            <span class="thumb-info">
                                <a href="{{url('videotocomics')}}/{{$item->class_slug}}" class="add-to-cart-product">
                                <span><i class="icon icon-shopping-cart"></i> {{$item->class_name}}</span>
                                </a>
                                <a href="{{url('videotocomics')}}/{{$item->class_slug}}">
                                <span class="thumb-info-image">
                                <span class="thumb-info-act">
                                <span class="thumb-info-act-left"><em>Explore </em></span>
                                <span class="thumb-info-act-right"><em>Class</em></span>
                                </span>
                                <img alt="img" class="img-responsive" src="{{URL::asset('uploads/videotocomics.png')}}">
                                </span>
                                </a>
                                <span class="thumb-info-content">
                                    <a href="{{url('videotocomics')}}/{{$item->class_slug}}">
                                        <h4>{{$item->class_name}}</h4>
                                        <span class="price">
                                        <del><span class="amount"></span></del>
                                        <ins><span class="amount"></span></ins>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </li> 
                        @endforeach
                       
                       
                    </ul>
                </div>
              
            </div>
        </div>
    </div>
</div>
@include('frontendview/include/footer')