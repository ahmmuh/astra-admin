@extends('/frontend/layouts.app')
@section('content')
<style>
    .blue-background{
        background-color: #0090db;
        color: white;
    }
</style>
<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="golv-bg">
        <div class="carousel-caption  d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white"> Behöver era golv fräschas upp?
            </h1>
            <p>



Välj golvvård från vårt professionella team. Vi behandlar och rengör alla typer av golv: stengolv, linoleum, trägolv och betong Vi kan även se till att ni alltid har nytvättade, fräscha mattor på kontoret. Alltid bra priser. Alltid bra kvalité. Tveka inte att kontakta oss för kostnadsfri offert!

            </p>
            <a href="{{url('frontend.pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>
    <div class="container text-start ">
        
            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/images-shaqo/golv.jpeg')}}" style="width: 100%"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>Vi städar när ni har möjlighet</h3>
                    <p>
                        Behöver era golv fräschas upp? Välj golvvård från vårt professionella team. Vi behandlar och rengör alla typer av golv: stengolv, linoleum, trägolv och betong Vi kan även se till att ni alltid har nytvättade, fräscha mattor på kontoret. Alltid bra priser. Alltid bra kvalité. Tveka inte att kontakta oss för kostnadsfri offert!
                    </p>
                    <a href="{{url('frontend.pages.contact')}}" class="btn blue-background">Kontakta oss</a>
                </div>
            </div>


           @include('frontend.pages.galary')
        </div>

@endsection
