@extends('frontend.layouts.app')

@section('content')

<div class="container">
  <div class="row">
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
                   @error('firstName')
                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
          </div>

          <div class="mb-3 form-group d-flex flex-column">
            <input type="text" class="form-control" name="lastname" placeholder="Efternamn" id="lastname">
                   @error('lastname')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
          </div>

          <div class="mb-3 d-flex flex-column">
            <input type="email" class="form-control" name="email" placeholder="E-post" id="email">
            @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
          </div>

          <div class="mb-3 d-flex flex-column">
            <input type="number" class="form-control" name="telefon" placeholder="Telefon" id="telefon">
            @error('telefon')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
          </div>

          <div class="mb-3">
            <textarea class="form-control" name="message" id="meddelande" rows="3" placeholder="Skriv ditt meddelande här....">
            </textarea>
            @error('message')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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