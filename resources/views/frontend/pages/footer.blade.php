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
            @foreach ($contacts as $contact)
        <div class="col-lg-3 col-md-6 mb-3">
            <h5>{{$contact->adress}}</h5>
            <p>{{$contact->postNummer}} <br> {{$contact->ort}} <br> Öppettider: 6:00 - 17:00 <br> helgfria vardagar</p>
        </div>
             @endforeach

        {{-- <div class="col-lg-3 col-md-6 mb-3">
        @foreach ($contacts as $contact)
              <div class="col-md-12 d-flex justify-content-between">
                  <span>{{$contact->adress}} <br> {{$contact->ort}} <br>
                     {{$contact->postNummer}}</span> <br>
                  <p>Orgnr. 559264-4446</p> <br>
                  <p>{{$contact->telefon}}</p> <br>
                  <p>{{$contact->email}}</p> <br>
                </div> --}}
                {{-- <h5>Adress</h5>
                <p>Fabriksgatan 7 <br> 412 50 Göteborg <br>Öppettider: 6:00 - 17:00 <br> helgfria vardagar</p> --}}
           
        {{-- </div> --}}

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="list-group">
                <h5>  Mer info om våra tjänster</h5>
                @foreach ($services as $service)
                 @if (count($services) >= 5) 
                       <a href="#"" class="list-group-item list-group-item-action">
                    {{$service->title}}</a>
                   @endif

                @endforeach
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="list-group" id="footer-list">
                <h5>Sociala medier & Policy</h5>
                <a href="https://se.linkedin.com/in/abdirahman-yussuf-231baa169" target="_blank" class="list-group-item list-group-item-action">Besök oss på Linkedin</a>
                <a href="{{url('/frontend/pages.gdpr')}}" class="list-group-item list-group-item-action">Dataskyddspolicy</a>
                <a href="{{url('/frontend/pages.company-policy')}}" class="list-group-item list-group-item-action">Verksamhetspolicy</a>
            <a class="list-group-item list-group-item-action" href="{{ url('blogs') }}">Nyhet</a>

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
    