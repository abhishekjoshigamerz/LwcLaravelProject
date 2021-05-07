@include('frontendview/include/header')
<!-- Header -->
    
            <!-- Slider1 -->
            <div class="slider-content container">
                <div id="carousel">
                    <a href="#"><img src="{{URL::asset('public/frontend/images/caveman.jpg')}}" id="item-1" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster_1.png')}}" id="item-2" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster2.jpg')}}" id="item-3" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster4.jpg')}}" id="item-4" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster5.jpg')}}" id="item-5" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster6.jpg')}}" id="item-6" alt="img" /></a>
                    <a href="#"><img src="{{URL::asset('public/frontend/images/monster5.jpg')}}" id="item-7" alt="img" /></a>
                </div>
                <div class="scroll-btns">
                    <a href="#" id="s-prev">Prev</a> | <a href="#" id="s-next">Next</a>
                </div>
            </div>
            <!-- Slider1 -->
    
            <div class="space40"></div>
    
            <!-- Welcome Content -->
            <div class="container welcome">
                <h2>Welcome to <span>LearnwithComics</span>, We make learning fun again!</h2>
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
			<h3 class="head-title text-center" >Our Mission</h3>
			<div class="home-mission">
				<div class="row">
					<div class="col-md-6">
						<img src="http://placehold.it/450x150" class="img-responsive" alt="img">
						<h4>Make your own Comics</h4>
						<p>Wanna Make your own comics. This feature is coming soon! Stay connected </span></p>
						<button type="button" class="btn btn-primary btn-orange btn-sm uppercase center-block">Find out more</button>
					</div>
					<div class="col-md-6">
						<img src="http://placehold.it/450x150" class="img-responsive" alt="img">
						<h4>Contact us</h4>
						<p>Do you have any query?? Feel free to reach us Start Learning</span></p>
						<button type="button" class="btn btn-primary btn-orange btn-sm uppercase center-block">Find out more</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://learnwithcomics.us1.list-manage.com/subscribe/post?u=fe1fbcd079fa265e5852362c4&amp;id=f2f91ded45" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fe1fbcd079fa265e5852362c4_f2f91ded45" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
	<div class="modal" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
					/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="https://learnwithcomics.us1.list-manage.com/subscribe/post?u=fe1fbcd079fa265e5852362c4&amp;id=f2f91ded45" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
					<label for="mce-EMAIL">Subscribe</label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fe1fbcd079fa265e5852362c4_f2f91ded45" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
				</div>
				
				<!--End mc_embed_signup-->
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-primary">Save changes</button>
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>

@include('frontendview.include.footer')
<script>
	$(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>