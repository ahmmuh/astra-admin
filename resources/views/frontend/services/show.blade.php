@extends('frontend.layouts.app')

@section('content')
<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" id="kontor-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Vi håller ert kontor rent och fint året runt!
            </h1>
            <p>
            Med oss får ni städning till rimliga priser. Alltid samma höga kvalitet tack vare våra professionella städare. Oavsett hur stort det är. 
            Kontakta oss för en kostnadsfri offert och svar på dina frågor.

            </p>
            <a href="/pages.contact" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
<div class="container">
   <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('storage/images/'.$service->serviceImage) }}"  style="width: 80%" alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>{{$service->title}}</h3>
                    <p>
                        {{$service->bodyText}}
                 </p>
                    <a  href="{{ url('clientcontacts') }}" class="btn blue-background">Kontakta oss</a>
                </div>
                <p class="mt-4">{{$service->description}}</p>
            </div>
</div>
    
@endsection