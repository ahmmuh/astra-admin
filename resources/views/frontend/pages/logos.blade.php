 
  
    <div class="container">
        <div class="row">
        <h3>Våra kunder</h3>
		<div class="col-md-12" style="background-color: white">
			<div class="lc-block">
				<div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">

					<div class="carousel-inner px-5">
                         @foreach($logos->chunk(4) as $logosCollections)
                <div class="carousel-item active">

                    <div class="row">
                        @foreach($logosCollections as $logo)
                         <div class="col-3 align-self-center">
						<img class="d-block w-100 px-3 mb-3" src="{{asset('/storage/images/' .$logo->logo)}}" style="max-height: 140px" width="100%" alt="">
								</div>
                                
                        @endforeach
                    </div>

                </div>
            @endforeach

                        {{-- @foreach ($logos as $key => $logo)
						<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
							<div class="row">
								<div class="col-6 col-lg-2 align-self-center">
									<img class="d-block w-100 px-3 mb-3" src="{{asset('/storage/images/' .$logo->logo)}}" style="max-height: 100%" alt="">

                                    
								</div>
                                
							</div>
                            
						</div>
                        @endforeach --}}
                        
						{{-- <div class="carousel-item">
							<div class="row">
								<div class="col-6 col-lg-2 align-self-center">
									<img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
								</div>
							</div>

						</div> --}}

					</div>

					<!--
	<ol class="carousel-indicators position-relative mt-3">
		<li data-bs-target="#carouselLogos" data-bs-slide-to="0" class="active bg-dark carousel-control-prev-icon"></li>
		<li data-bs-target="#carouselLogos" data-bs-slide-to="1" class="bg-dark"></li>
	</ol>
	-->

					{{-- <div class="w-100 px-3 text-center mt-4">
						<a class="carousel-control-prev position-relative d-inline me-4" href="#carouselLogos" data-bs-slide="prev">
							<svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
							</svg>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next position-relative d-inline" href="#carouselLogos" data-bs-slide="next">
							<svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
							</svg>
							<span class="visually-hidden">Next</span>
						</a>





					</div>
 --}}

				</div>
			</div>
		</div>
	</div>
</div>
 
 
{{--   
  <div class="container">
    <div class="row-fluid my-5">
    <div id="productSlider" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner row w-100 mx-auto">
            @foreach($logos->chunk(7) as $logosCollections)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    <div class="row">
                        @foreach($logosCollections as $logo)
                         <div class="col mx-1 my-5">
                            <img class="img-fluid" width="200" heibght="350" src="{{ asset('storage/images/' . $logo->logo) }}" alt="{{ $logo->logo }}">
                         </div>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#productSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
  </div> --}}