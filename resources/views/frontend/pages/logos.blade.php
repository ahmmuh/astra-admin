{{-- logos --}}

<style>
#logo-slider-container .row .col-md-3{
    height: 200px;
    overflow:auto;
    z-index: 9999;

}

    #logo-slider-container .row .col-md-3 a span img{
        height: 200px;
         padding: 2rem;

    }
</style>
<div id="logo-slider-container" class="carousel slide mt-4 " data-bs-ride="carousel">
    <div class="container">
        <h4 class="text-center mb-5">Några av våra kunder - <i class="fa-solid fa-users-line"></i></h4>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#logo-slider-container" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
        <button type="button" data-bs-target="#logo-slider-container" data-bs-slide-to="1" aria-label="Slide 1"></button>
      </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @foreach ($logos as $logo)
                    <div class="col-md-3 col-sm-6 mb-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{ asset('storage/images/'.$logo->logo) }}"   alt="">
                        </span>
                    </a>
                  
                </div>
                @endforeach
            </div>
        </div>
       
        
      
    </div>
    
    </div>
</div>
