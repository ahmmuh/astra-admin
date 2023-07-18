@extends('frontend.layouts.app')
@section('content')
<style>
    .blue-background{
        background-color: #0090db;
        color: white;
    }
</style>
<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="bygg-bg">
        <div class="carousel-caption  d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Byggstädning</h1>
            <p>
                Vill du ha hjälp med att städa upp efter ett bygge eller en renovering? Astra Städ är superproffs på byggstäd. Givetvis till bästa pris.
            </p>
            <a href="{{('/frontend/pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>

    <div class="container text-start ">
            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/images-shaqo/bygg.jpeg')}}" style="width: 100%"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>Vi gör byggstäd också</h3>
                    <p>
                    Kan dela upp byggstädningen i två delar - en grovstädning och en finstädning.
Grovstädning utförs direkt efter att byggarbetarna är klara. Finstädning utförs efter att hela byggprojektet är klart. 
Vill du ha hjälp med byggstädning?  Mejla eller ring oss! Astra Städ är superproffs på byggstäd. 
                    </p>
                    <a href="{{('frontend.pages.contact')}}" class="btn blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @include('frontend.pages.service')
                </div>
            </div>

            
        </div>

@endsection
