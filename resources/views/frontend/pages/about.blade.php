@extends('frontend.layouts.app')

@section('content')

<div class="" id="about">
    <div class="container">
        <div class="row " id="about-first-section">
            <div class="col-lg-5 col-md-12">
                <img src="{{url('')}}" alt="Image"> Image
                
            </div>
            <div class="col-lg-7 col-md-12">
                <h2>Om Astra Städ AB</h2>
                <p>

                <h4>Vilka är vi?</h4>
                    
                    På Astra Städ är vi proffs på städning. Vi är ett litet personligt städbolag. Varje månad utför vi löpande städuppdrag hos över 40 fasta företag i Göteborg. Vi ser till att det alltid är rent och välstädat. Vi vill ha nöjda kunder, så enkelt är det. Välkommen till oss! 
                   </p>
                  <h5> Vår städpersonal</h5>
                  <p>Astra Städ använder städpersonal som är professionellt utbildade med internutbildning eller PRYL- alternativ SRY-certifikat. Vi städar utan underleverantörer, har kollektivavtal och våra anställda har bra 
                </p>
                   <h5> Våra tjänster</h5>
                   <p>Vår ambition är att leverera professionell städning till rimliga priser. Vi erbjuder allt inom städning i Göteborg med omnejd.  Du kan läsa mer om våra tjänster längst upp på vår hemsida. 
                </p>
            </div>
        </div>
       

        
    </div>

  

    <div class="container">
       <div class="row">
        @include('frontend.pages.service')
        @include('frontend.pages.galary')
       </div>
        
        </div>
    </div>
</div>
    
@endsection