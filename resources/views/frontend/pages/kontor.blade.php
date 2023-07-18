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
      <div class="carousel-item active" id="kontor-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Vi håller ert kontor rent och fint året runt!
            </h1>
            <p>

Med oss får ni städning till rimliga priser. Alltid samma höga kvalitet tack vare våra professionella städare. Oavsett hur stort det är. 
Kontakta oss för en kostnadsfri offert och svar på dina frågor.

            </p>
            <a href="{{('/pages.contact')}}"  class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
    <div class="container text-start ">
                   <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/images-shaqo/kontor1.jpeg')}}" style="width: 80%"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>Vi håller ert kontor rent och fint året runt!</h3>
                    <p>
                        
                        Med oss får ni städning till rimliga priser. Alltid samma höga kvalitet tack vare våra professionella städare. Oavsett hur stort det är. 
                        Kontakta oss för en kostnadsfri offert och svar på dina frågor.

                    </p>
                    <a href="{{('frontend.pages.contact')}}" class="btn blue-background">Kontakta oss</a>
                </div>
            </div>

            <div class="row text-start mb-2">
                <div class="col-lg-8 col-md-12">
                    <h3>Vår fokus ligger på kvalité</h3>
                    <p>
                        Vårt fokus är att leverera lokalvård av hög kvalitet och med högsta 
möjliga service. Vi fokuserar alltid på det som är bäst för dig som kund.
                    </p>
                </div>
            </div>
            <hr>
        
           @include('frontend.pages.service')
        </div>

@endsection