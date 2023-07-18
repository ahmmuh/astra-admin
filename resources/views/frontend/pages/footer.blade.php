{{-- @extends('layouts.app') --}}
<footer class="footer text-white">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-3">
            <img style="width: 120px" src="{{url('../images/astra-logos/logo3.png')}}" alt="Astra-logo">
            <p>
                På Astra Städ är vi proffs på städning. Vi är ett litet personligt städbolag. Varje månad utför vi löpande städuppdrag hos över 40 fasta företag i Göteborg.
            </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <h5>Adress</h5>
            <p>Fabriksgatan 7 <br> 412 50 Göteborg <br>Öppettider: 6:00 - 17:00 <br> helgfria vardagar</p>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="list-group">
                <h5>  Mer info om våra tjänster</h5>

                <a href="{{url('/frontend/pages.kontor')}}" class="list-group-item list-group-item-action">Kontorsstädning</a>
                <a  href="{{ url('/frontend/pages.butik') }}" class="list-group-item list-group-item-action">Butikstädning</a>
                <a href="{{ url('/frontend/pages.lager') }}" class="list-group-item list-group-item-action">Lagerstädning</a>
                <a href="{{ url('/frontend/pages.bygg') }}" class="list-group-item list-group-item-action">Byggstädning</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="list-group" id="footer-list">
                <h5>Sociala medier & Policy</h5>
                <a href="https://se.linkedin.com/in/abdirahman-yussuf-231baa169" target="_blank" class="list-group-item list-group-item-action">Besök oss på Linkedin</a>
                <a href="{{url('/frontend/pages.gdpr')}}" class="list-group-item list-group-item-action">Dataskyddspolicy</a>
                <a href="{{url('/frontend/pages.company-policy')}}" class="list-group-item list-group-item-action">Verksamhetspolicy</a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between">
            <p>Astra Alltjänst AB</p>
            <p>Orgnr. 559264-4446</p>
            <p>info@astrastad.se<br></p>
        </div>

    </div>
</div>
</footer>
    