@extends('frontend.layouts.app')

@section('content')
   <div id="home-page-slider" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner welcome-headline">

         @foreach ($services as $service)
              <div class="carousel-item active">
            <div class="carousel-caption " style="width: auto; background-color: #0090db;">
                <h1 class="text-white text-bold">{{$service->title}}</h1>
                <p class="px-4">
                  {{$service->bodyText}}

                </p>
                <a href="https://astrastad.se/pages.contact" class="btn btn-lg btn-block  rounded-pill text-black" style="padding: .5rem 3rem; background-color: #fff;">Kontakta oss</a>
              </div>
          </div>
         @endforeach
          
         
        </div>
        
      </div>
@endsection