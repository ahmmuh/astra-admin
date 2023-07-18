@extends('frontend.layouts.app')
@section('content')
<style>
  .blue-background{
      background-color: #0090db;
      color: white;
  }
  h4{
    color: white;
  }
</style>
<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
      <div class="carousel-item active" id="butik-bg">
        <div class="carousel-caption d-md-block" style="width: 50%; margin: 0 auto;">
            <h1 class="text-white">Butiksstädning</h1>
            <p>
              Nöjda kunder är bästa reklamen. Intrycket kunden får i butiken och hur välstädat
              det är A och O. Låt oss sköta städet åt er. Vi ger er professionella städare till mycket rimliga priser.
            </p>
            <a href="{{('frontend.pages.contact')}}" class="btn btn-lg blue-background rounded-pill" style="width: 20rem">Kontakta oss</a>
          </div>
      </div>
    </div>
  </div>


    <div class="container text-start ">

            <div class="row text-start">
                <div class="col-lg-5 col-md-12">
                    <img src="{{url('images/images-shaqo/dukaan2.png')}}" style="width: 100%"  alt="Bild">
                </div>

                <div class="col-lg-7 col-md-12">
                    <h1>Butiksstädning av högsta klass</h1>
                    <p>
                      Du som äger eller driver en butik vill givetvis att det 
                      kommer många kunder, att de trivs och att de vill 
                      komma tillbaka. För att de ska göra detta måste din 
                      butik vara ren och fräsch varje gång en kund kommer in.

                      När du anlitar AstraStäd kan du vara säker på att du 
                      kommer bli nöjd med resultatet. Genom att anlita 
                      professionell städpersonal blir städningen både snabb
                      och noggrann. När städningen ska utföras är alltid upp 
                      till kunden att besluta om

                    </p>
                    <a href="{{('frontend.pages.contact')}}" class="btn  blue-background rounded-pill" style="width: 15rem">Kontakta oss</a>
                </div>
            </div>

            
        
        </div>

@endsection
