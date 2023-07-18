@extends('layouts.app')
@section('content')
<style>
    .blue-background{
        background-color: #0090db;
        color: white;
    }
</style>
  <div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="fonster-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Vi putsar alla fönster. Privat som företag</h1>
            <p>Fönsterputs av högsta Kvalitet!
                Behöver ditt företag fönsterputs? Vi har supersnabba professionella 
fönsterputsare, som garanterar ett proffsigt resultat. Ni kan välja
mellan engångsputsning eller så kan ni teckna ett abonnemang.
Alltid skinande rent! Alltid bra priser!
                
            </p>
            <a href="{{url('/pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>



            <div class="container mt-5">
                <h3 class="text-center py-3 border rounded-pill" style="background-image: linear-gradient(to left, rgba(245, 237, 237, 0.247),rgba(221, 226, 228, 0.404))">Vi putsar alla fönster. Privat som företag.</h3>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-12 ">
                        <img src="{{url('images/fonster1.jpeg')}}" alt="bild" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h5>Vi är duktiga på fönsterputs</h5>
                        <p>Vill du ha hjälp med fönsterputsning? Våra erfarna fönsterputsare ser till att du får glasklara fönsterrutor till ett riktigt bra pris. Fyll i dina uppgifter nedan så återkommer vi till dig.</p>
                        <a href="{{url('/pages.contact')}}" class="btn  blue-background border rounded-pill " >Kontakta oss</a>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-lg-6 col-md-12">
                        <h3>Fönsterputs för företag:</h3>
                        <p>
                            Behöver ditt företag fönsterputs? Vi har supersnabba professionella 
                            fönsterputsare, som garanterar ett proffsigt resultat. Ni kan välja
                            mellan engångsputsning eller så kan ni teckna ett abonnemang.
                            Alltid skinande rent! Alltid bra priser!
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <h3>Fönsterputs privat</h3>
                        <p>Behöver du fönsterputs? Som privatkund kan ni använda  
                            RUT-avdraget som ger er halva priset. Ni kan välja mellan 
                            engångsputsning eller så kan ni teckna ett abonnemang. 
                            Alltid skinande rent! Alltid bra priser!</p>
                    </div>
                    <a target="_blank" href="{{url('https://www.skatteverket.se/privat/fastigheterochbostad/rotochrutarbete.4.2e56d4ba1202f95012080002966.html')}}" >Läs mer om rotavdraget</a>

                </div>

</div>

@endsection
