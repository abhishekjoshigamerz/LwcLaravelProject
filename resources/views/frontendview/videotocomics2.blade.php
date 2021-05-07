@include('frontendview/include/header2')
<div class="space40"></div>

	<!-- Main content -->
	<div class="page-wrap container">
		<h3>Comics </h3>
		<!-- Shop Content -->
		<div role="main" class="main shop">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						
						
					</div>
					<div class="space20"></div>
					<div class="row">
						<ul class="products thumb-info-list">
                           @if (count($data)>0)
                           <?php $i=0;?>
                           @foreach ($data as $record)
                           <li class="col-md-3 product">
                               @if ($i<7)
                               <a href="{{url('/comicread/pdfcomics')}}/{{$record->url_slug}}">
                                   <span class="onsale">New</span>
                                   </a>
                               @endif
                               
                               <span class="thumb-info">
                                   <a href="{{url('/videotocomics/')}}/{{$record->class_slug}}/{{$record->url_slug}}" class="add-to-cart-product">
                                   <span><i class="icon icon-shopping-cart"></i> ReadComics</span>
                                   </a>
                                   <a href="{{url('/videotocomics/')}}/{{$record->class_slug}}/{{$record->url_slug}}">
                                   <span class="thumb-info-image">
                                   <span class="thumb-info-act">
                                   <span class="thumb-info-act-left"><em>Read</em></span>
                                   <span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Explore</em></span>
                                   </span>
                                   <img alt="img" class="img-responsive" src="{{url('uploads/subjects')}}/{{$record->comicstovideo_thumbnail}}">
                                   </span>
                                   </a>
                                   <span class="thumb-info-content">
                                       <a href="{{url('/videotocomics/')}}/{{$record->class_slug}}/{{$record->url_slug}}">
                                        <?php 
                                        $string = strip_tags($record->comicstovideo_name);
                                    if (strlen($string) > 18) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 18);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= ' ..';
                                    }
                                  

                                        ?>
                                           <h4>{{$string}}</h4>
                                           
                                       </a>
                                   </span>
                               </span>
                           </li>
                           <?php $i++;?>
                           @endforeach
                           @else
                               <p>Sorry no comics available for this section. You can look for other subjects for which we have added the comics</p>
                           @endif
                           
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Main content -->
@include('frontendview/include/footer')