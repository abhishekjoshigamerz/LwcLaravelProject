@include('frontendview/include/header2')

<div class="space30"></div>
	<!-- Main content -->
	<div class="page-wrap container">
		<h3>About</h3>
		<div class="space30"></div>
		<div class="col-md-12 no-padding">
			<div class="row">
				<div class="col-md-12">
					<!-- Video content -->
					
						<iframe src="{{$record->comics_pdf_file}}" class="" width="100%" height="800"></iframe>
				
					<!-- Video content -->
				</div>
                <div class="col-sm-12 col-md-4"><a href= "{{$record->comics_pdf_file}}" class="btn btn-primary">Full Screen Comic Mode</a></div><div class="col-sm-12"></div>
                <div class="col-sm-12 col-md-4"><div class="fb-share-button" style="float:left;" data-href="https://learnwithcomics.org/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flearnwithcomics.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div><div style="float:right;padding:2px;"><a class="twitter-share-button"
                    href="https://twitter.com/intent/tweet?text=Hello%20world"
                    data-size="large">
                  Tweet</a></div></div>
                <div class="col-sm-12 col-md-4">
                    <span class="bell fa fa-bell" id="bellIcon" onclick="bellaction()"></span>
                </div>
            </div>
        </div>
    </div>
</div>



    


@include('frontendview/include/footer')

<script>
    let audioSound = '{{url('/uploads/smallbell.mp3')}}';
    let redirectURL = '{{url('/comicread/pdfcomics/readpdfcomics/likes/')}}/{{$record->pdfcomics_id}}';
    function bellaction(){
        var delay = 3000;
        var element = document.getElementById('bellIcon');
        element.classList.add("bell2");
        var audio = new Audio(audioSound);
        audio.play();
        setTimeout(function(){
            window.location.href=redirectURL;
        },delay)

    }

</script>






