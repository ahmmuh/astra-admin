@extends('frontend.layouts.app')
@section('content')

<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="matt-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">En ren och fräsch entré!</h1>
            <p>



En välskött entrématta fångar upp smuts och håller entrén och kontoret renare och fräschare. Entrémattor minskar dessutom behovet av golvvård och städning. Vi kan byta mattorna varje vecka, varannan vecka eller en gång i månaden.  Kontakta oss idag för en offert. Du kan maila eller ringa oss.

            </p>
            <a href="{{url('frontend.pages.contact')}}" class="btn btn-lg btn-primary rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
    <div class="container text-start ">
        
            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/images-shaqo/matt2.jpeg')}}" style="width: 100%; height: 300px"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>En ren och fräsch entré!</h3>
                    <p>En välskött entrématta fångar upp smuts och håller entrén och kontoret renare och fräschare. Entrémattor minskar dessutom behovet av golvvård och städning. Vi kan byta mattorna varje vecka, varannan vecka eller en gång i månaden.  Kontakta oss idag för en offert. Du kan maila eller ringa oss.
                    </p>
                    <a href="{{url('frontend.pages.contact')}}" class="btn blue-background">Kontakta oss</a>
                </div>
            </div>

         
        
            @include('frontend.pages.galary')
            
        </div>

@endsection
