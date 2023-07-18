@extends('/frontend/layouts.app')
@section('content')

<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="trapp-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white"> Trappstädning för er med höga krav
            </h1>
            <p>
             Trapphus bli snabbt smutsiga och ofräscha om städningen inte fungerar.
                När vi tar hand om trappstädningen är du garanterad städning av högsta kvalitet och hög servicenivå. Vi borstar, svabbar, dammar, ta bort fläckar och mycket annat. 
                Vi städar trapphus hos BRF och Fastighetsägare och vi gör det riktigt bra!
                                    
            </p>
            <a href="{{url('/frontend/pages.contact')}}" class="btn btn-lg btn-primary rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
    <div class="container text-start ">
        
            <div class="row text-start">
                <div class="col-lg-6 col-md-12 mb-3">
                    <img src="{{url('images/images-shaqo/trapp1.jpg')}}" style="width: 100%; height: 400px"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                  
                    <h2>  Trappstädning för er med höga krav</h2>
                    <p>Trapphus bli snabbt smutsiga och ofräscha om städningen inte fungerar. När vi tar hand om trappstädningen är du garanterad städning av högsta kvalitet och hög servicenivå. Vi borstar, svabbar, dammar, ta bort fläckar och mycket annat. Vi städar trapphus hos BRF och Fastighetsägare och vi gör det riktigt bra!
                    </p>
                    <a href="{{url('/frontend/pages.contact')}}"  class="btn btn-primary">Kontakta oss</a>
                </div>
            </div>

           
        
            @include('/frontendpages.galary')
            
        </div>

@endsection
