@include('frontendview/include/header2')
<div class="space40"></div>

	<!-- Main content -->
	<div class="page-wrap container">
		<h3>Quiz</h3>
	
		<div role="main" class="main shop">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						
						
					</div>
					<div class="space20"></div>
					<div class="row">
                        <?php $i=0;?>
						<ul class="products thumb-info-list">
                            @foreach ($record as $item)
                            <li class="col-md-3 product">
                                @if ($i<=8)
                                <a href=""  rel="nofollow">
                                    <span class="onsale">New!</span>
                                    </a>
                                @endif
								
								<span class="thumb-info">
									<a href="{{$item->quiz_link}}"  target="_blank" class="add-to-cart-product">
									<span><i class="icon icon-shopping-cart"></i> Go to Quiz</span>
									</a>
									<a href="{{$item->quiz_link}}" target="_blank"  rel="nofollow">
									<span class="thumb-info-image">
									<span class="thumb-info-act">
									<span class="thumb-info-act-left"><em>Go to</em></span>
									<span class="thumb-info-act-right"><em> Quiz</em></span>
									</span>
									<img alt="img" class="img-responsive" src="{{url('uploads/subjects')}}/{{$item->quizthumbnail_link}}">
									</span>
									</a>
									<span class="thumb-info-content">
										<a href="{{$item->quiz_link}}"  target="_blank"  rel="nofollow">
											<h4>{{$item->quiz_name}}</h4>
											
										</a>
									</span>
								</span>
							</li> 
                            <?php $i++;?>
                            @endforeach
							
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Main content -->

@include('frontendview/include/quizfooter')
