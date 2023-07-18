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
      <div class="carousel-item active" id="hem-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Hemstädning</h1>
            <p>
                Låt våra proffs städa ditt hem.

Välj Astra Städ när du vill ha det rent och fräscht hemma.
Alltid utbildad personal med riktiga löner och kollektivavtal. 

Kontakta oss för en kostnadsfri offert!

            </p>
            <a href="{{url('frontend.pages.contact')}}" class="btn  blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
    <div class="container text-start ">
            <div class="row text-start">
                <div class="col-lg-4 col-md-12">
                    <img src="{{url('images/images-shaqo/home.jpg')}}" style="width: 100%"  alt="Bild">
                </div>

                <div class="col-lg-8 col-md-12">
                    <h3>Låt våra proffs städa ditt hem.</h3>
                    <p>
                        

Välj Astra Städ när du vill ha det rent och fräscht hemma.
Alltid utbildad personal med riktiga löner och kollektivavtal. 

Kontakta oss för en kostnadsfri offert

                    </p>
                    <a href="{{url('frontend.pages.contact')}}" class="btn blue-background rounded-pill" style="width: 20rem;">Kontakta oss</a>
                </div>
            </div>

           

            <div class="row">
                @include('frontend.pages.service')
            </div>

            
        </div>

@endsection