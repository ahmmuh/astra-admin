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
      <div class="carousel-item active" id="frukt-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Frukt till ert företag.
            </h1>
            <p>
                Göteborgs bästa fruktkorgar", ekologisk frukt, snabb och enkel leverans!
            </p>
            <a href="{{url('frontend.pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>



            <div class="container mt-5">
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-12 ">
                        <img src="{{url('images/images-shaqo/frukt.jpg')}}" alt="bild" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p>Göteborgs bästa fruktkorgar", ekologisk frukt, snabb och enkel leverans!.</p>
                        <a href="{{url('frontend.pages.contact')}}" class="btn  blue-background border rounded-pill " style="width: 10rem; padding: .5rem">Kontakta oss</a>
                    </div>
                </div>

                <div class="row py-5">
                   @include('frontend.pages.service')
                </div>
            </div>

@endsection
