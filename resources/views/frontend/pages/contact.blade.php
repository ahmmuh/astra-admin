@extends('frontend.layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-4">
     <ul class="list-group">
       <li class="list-group-item blue-background" aria-current="true">Kontaktuppgifter</li>
       <li class="list-group-item">Tel: 010-333 05 57 <br></li>
       <li class="list-group-item">Mobil: 0760 251170</li>
       <li class="list-group-item">info@astrastad.se</li>
       <li class="list-group-item">abdirahman@astrastad.se</li>
       <li class="list-group-item">Fabriksgatan 7 <br>
        412 50 Göteborg </li>
     </ul>      
    </div>
    <div class="col-md-8">
      <h3>Kontakta oss</h3>
      <p>
        Du är varmt välkommen att kontakta oss om du har funderingar kring våra städtjänster.
      </p>

      @if(session()->has('message-success'))
      <div class="alert alert-success">
          {{ session()->get('message-success') }}
      </div>
  @endif
        
        <form method="POST" action="{{route('contact')}}">
       
          @csrf
          <div class="mb-3 form-group d-flex flex-column">
            <input type="text" class="form-control" name="firstname" placeholder="Förnamn" id="firstname" aria-describedby="emailHelp">
            @if ($errors->first('firstname'))
            <span class="text-danger">{{ $errors->first('firstname') }}</span>
            @endif
          </div>

          <div class="mb-3 form-group d-flex flex-column">
            <input type="text" class="form-control" name="lastname" placeholder="Efternamn" id="lastname">
            @if ($errors->first('lastname'))
            <span class="text-danger">{{ $errors->first('lastname') }}</span>

            @endif
          </div>

          <div class="mb-3 d-flex flex-column">
            <input type="email" class="form-control" name="email" placeholder="E-post" id="email">
            @if ($errors->first('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>

            @endif
          </div>

          <div class="mb-3 d-flex flex-column">
            <input type="number" class="form-control" name="telefon" placeholder="Telefon" id="telefon">
            @if ($errors->first('telefon'))
            <span class="text-danger">{{ $errors->first('telefon') }}</span>

            @endif
          </div>

          <div class="mb-3">
            <textarea class="form-control" name="message" id="meddelande" rows="3" placeholder="Skriv ditt meddelande här....">
            </textarea>
            @if ($errors->first('message'))
            <span class="text-danger">{{ $errors->first('message') }}</span>

            @endif
        </div>
        <div class="d-grid gap-2">
          <button class="btn  mb-3 rounded-pill blue-background text-white" id="submit-btn" type="submit"
          >Skicka</button>
        </div>
        </form>
    </div>
  </div>
</div>



 
@endsection