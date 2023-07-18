@extends('/frontend/layouts.app')

    @section('content')
    {{-- home page slider --}}
    <div id="home-page-slider" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner welcome-headline">

          <div class="carousel-item active">
            <div class="carousel-caption " style="width: auto; background-color: #0090db;">
                <h1 class="text-white text-bold">Lokalvård och Kontorsservice</h1>
                <p class="px-4">
                  Vår ambition är att leverera professionell städning till rimliga priser. <br> Vi erbjuder allt inom städning i Göteborg med omnejd. <br> Du kan läsa mer om våra tjänster längst upp på vår hemsida.

                </p>
                <a href="{{url('/frontend/pages.contact')}}" class="btn btn-lg btn-block  rounded-pill text-black" style="padding: .5rem 3rem; background-color: #fff;">Kontakta oss</a>
              </div>
          </div>
          
         
        </div>
        
      </div>
    {{-- end slider --}}
    <div class="container text-start" id="staff">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4  logo-circel-image" >
            </div>

            <div class="col-lg-8 col-md-12 p-5 ">
                <h2>Vilka är vi?</h2>
                <p>
                  På Astra Städ är vi proffs på städning. Vi är ett litet personligt städbolag. Varje månad utför vi löpande städuppdrag hos över 40 fasta företag i Göteborg. Vi ser till att det alltid är rent och välstädat. Vi vill ha nöjda kunder, så enkelt är det.
                </p>

          <p>Astra Städ använder städpersonal som är professionellt utbildade med internutbildning eller PRYL- alternativ SRY-certifikat. Vi städar utan underleverantörer, har kollektivavtal och våra anställda har bra villkor.  <a href="{{url('/pages.about')}}">Läs mer</a></p>                
                    <a href="{{url('/frontend/pages.contact')}}" class="btn btn-lg blue-background rounded-pill text-white mb-3" style=" background-color: #0090db;">Kontakta oss</a>
                  </div>
        </div>
          @include('/frontend/pages.service')      
      </div>
      
      @endsection

    