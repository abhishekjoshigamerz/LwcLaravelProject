@include('frontendview/include/header')
<!-- Header -->
    
            <!-- Slider1 -->
            <div class="slider-content container">
                <div id="carousel">
                    <a href="{{url('videotocomics/class-6/science/english/chemistry')}}"><img src="{{URL::asset('public/frontend/images/chemistry.png')}}" id="item-1" alt="img" /></a>
                    <a href="{{url('videotocomics/class-6/science/english/physics')}}"><img src="{{URL::asset('public/frontend/images/physics.png')}}" id="item-2" alt="img" /></a>
                    <a href="{{url('videotocomics/class-5/maths/english/maths')}}"><img src="{{URL::asset('public/frontend/images/Maths.png')}}" id="item-3" alt="img" /></a>
                    <a href="{{url('videotocomics/class-6/social-science/english/geography')}}"><img src="{{URL::asset('public/frontend/images/Social.png')}}" id="item-4" alt="img" /></a>
                    <a href="{{url('videotocomics/class-6/science/english/biology')}}"><img src="{{URL::asset('public/frontend/images/sciencebiology.png')}}" id="item-5" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/space.png')}}" id="item-6" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster2.jpg')}}" id="item-7" alt="img" /></a>
                </div>
                <div class="scroll-btns">
                    <a href="#" id="s-prev">Prev</a> | <a href="#" id="s-next">Next</a>
                </div>
            </div>
            <!-- Slider1 -->
    
            <div class="space40"></div>
    
            <!-- Welcome Content -->
            <div class="container welcome">
                <
                <div class="space50"></div>
               
            </div>
            <!-- Welcome Content -->
        </div>
	<!-- Services -->
	
	<!-- Services -->

	<div class="divider"></div>

	<div class="main-wrap">

		<!-- Wrap info -->
		<div class="container no-padding">
			
			<div class="home-mission">
				<div class="row">
					<div class="col-md-6">
						<img src="{{URL::asset('uploads/makeyourcomics.png')}}" class="img-responsive" alt="img">
						<h4>Make your own Comics</h4>
						<p>Wanna Make your own comics. This feature is coming soon! Stay connected </span></p>
						<button type="button" class="btn btn-primary btn-orange btn-sm uppercase center-block">Find out more</button>
					</div>
					<div class="col-md-6">
						<img src="{{URL::asset('uploads/contactus.png')}}" class="img-responsive" alt="img">
						<h4>Contact us</h4>
						<p>Do you have any query?? Feel free to reach us Start Learning</span></p>
						<button type="button" class="btn btn-primary btn-orange btn-sm uppercase center-block">Find out more</button>
					</div>
				</div>
			</div>
		</div>
	</div>


@include('frontendview.include.footer')