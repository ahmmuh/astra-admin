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
      <div class="carousel-item active" id="lager-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Lagersstädning</h1>
            <p>
                Med Astra Städ får ni professionell industristädning, oavsett er storlek och bransch. Bland våra kunder finns både stora och små företag. I oss får ni en pålitlig städpartner med snabb och bra support.
Prata med oss för offert och personlig genomgång!

            </p>
            <a href="{{url('frontend.pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
    <div class="container text-start ">
        
            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/astra-logos/logo12.jpg')}}" style="width: 80%"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>Vi städar när ni har möjlighet</h3>
                    <p>
                        Vi städar allt! Med Astra Städ får ni professionell industristädning, oavsett er storlek och bransch. Bland våra kunder finns både stora och små företag. I oss får ni en pålitlig städpartner med snabb och bra support. Prata med oss för offert och personlig genomgång!
                    </p>
                    <a href="{{url('frontend.pages.contact')}}" class="btn blue-background">Kontakta oss</a>
                </div>
            </div>

          
            

            @include('frontend.pages.galary')
        </div>

@endsection
