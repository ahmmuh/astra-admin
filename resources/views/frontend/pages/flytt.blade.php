
@extends('frontend.layouts.app')
@section('content')
<style>
    .blue-background{
        background-color: #0090db; color: white;"
    }
</style>
<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="flytt-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">flyttstädning</h1>
            <p>
                Vi utför flyttstädning i hela Göteborgområdet med omnejd. Våra medarbetare är duktiga på flyttstäd i alla former. Från mindre lägenhet till stora hus eller kontor!
            </p>
            <a href="{{url('/frontend/pages.contact')}}" class="btn btn-lg blue-background rounded-pill">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
{{-- end slider --}}

    <div class="container text-start ">

            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/images-shaqo/flytt2.jpeg')}}" style="width: 100%"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h5>Ska du flytta ut? låt oss hjälpa dig med städningen</h5>
                    <p>
                        Vi utför flyttstädning i hela Göteborgområdet med omnejd. Våra medarbetare är duktiga på flyttstäd i alla former. Från mindre lägenhet till stora hus eller kontor!
                    </p>
                    <a class="blue-background btn" href="{{url('frontend.pages.contact')}}">Kontakta oss</a>
                </div>
            </div>

          
            <div class="row text-start">
              

                <div class="col-12">
                    @include('frontend.pages.service')


                </div>
                
            </div>

        </div>

@endsection
