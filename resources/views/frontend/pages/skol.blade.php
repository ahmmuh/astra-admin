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
      <div class="carousel-item active" id="bg-skola">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Förstklassig skolstädning och en kundservice i särklass</h1>
            <p>Behov av skolstädning? Vi håller er skola välstädad och fin! Vi har goda rutiner för 

                skolstädning, allt ifrån från städteknik och frekvens till miljövänliga städprodukter.
                
            </p>
            <a href="{{url('/frontend/pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>



            <div class="container mt-5">
                <div class="row mt-4">
                    <div class="col-lg-5 col-md-12 ">
                        <img src="{{url('images/images-shaqo/skola1.jpeg')}}" alt="bild" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <h4>Skolstädning</h4>
                        <p>
                            AstraStäd har
                            professionell och erfaren personal som utför städning av skolor. Det ställs höga krav
                            på bra hygien i skolan och dess lokaler. Bara ordentlig utförd städning förhindrar 
                            spridning  av sjukdomar och allergier. Vår arbetsbeskrivning anpassas efter kundens önskemål, 
                            och det som beställs levereras på rätt städdagar och med överenskommen städmetod. 

    Behov av skolstädning? Vi håller er skola välstädad och fin! Vi har goda rutiner för skolstädning, allt ifrån från städteknik och frekvens till miljövänliga städprodukter.
                        </p>
                        <a href="{{url('/frontend/pages.contact')}}" class="btn  blue-background border rounded-pill w-25" >Kontakta oss</a>
                    </div>
                </div>
               
</div>

@endsection
