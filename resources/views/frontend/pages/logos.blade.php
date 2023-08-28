<div class="container">
        <div class="row">
        <h3>Några av våra kunder</h3>
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
		</div>
		</div>
			</div>
		</div>
	</div>
</div>
 
