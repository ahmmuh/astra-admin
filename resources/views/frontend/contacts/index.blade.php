@extends('frontend.layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-4">
     <ul class="list-group">
       <li class="list-group-item blue-background" aria-current="true">Kontaktuppgifter</li>

       @foreach ($contacts as $contact)
       <li class="list-group-item">{{$contact->adress}}<br></li>
       <li class="list-group-item">{{$contact->postNummer}} {{$contact->ort}}</li>
       <li class="list-group-item">{{$contact->telefon}}</li>
       <li class="list-group-item">{{$contact->email}}<br>
        @endforeach 
     </ul>      
    </div>
    <div class="col-md-8">
      <h3>Kontakta oss</h3>
      <p>
        Du är varmt välkommen att kontakta oss om du har funderingar kring våra städtjänster.
      </p>

              
        <form method="POST" action="https://astrastad.se/emails.contact">
       
          <input type="hidden" name="_token" value="3UcuhhFf8acgyvhIUEQkwX1U0yrixwwiou6iDIZf">          <div class="mb-3 form-group d-flex flex-column">
            <input type="text" class="form-control" name="firstname" placeholder="Förnamn" id="firstname" aria-describedby="emailHelp">
                        <span class="text-danger">Förnamn saknas</span>
                      </div>

          <div class="mb-3 form-group d-flex flex-column">
            <input type="text" class="form-control" name="lastname" placeholder="Efternamn" id="lastname">
                        <span class="text-danger">Efternamn saknas</span>

                      </div>

          <div class="mb-3 d-flex flex-column">
            <input type="email" class="form-control" name="email" placeholder="E-post" id="email">
                        <span class="text-danger">E-postadress saknas</span>

                      </div>

          <div class="mb-3 d-flex flex-column">
            <input type="number" class="form-control" name="telefon" placeholder="Telefon" id="telefon">
                        <span class="text-danger">Telefonnummer saknas</span>

                      </div>

          <div class="mb-3">
            <textarea class="form-control" name="message" id="meddelande" rows="3" placeholder="Skriv ditt meddelande här....">            </textarea>
                        <span class="text-danger">Meddelande saknas</span>

                    </div>
        <div class="d-grid gap-2">
          <button class="btn  mb-3 rounded-pill blue-background text-white" id="submit-btn" type="submit">Skicka</button>
        </div>
        </form>
    </div>
  </div>

   <div class="row ">
      <div class="col mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2131.6157865712466!2d11.98893837671756!3d57.70599717386924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff582100ba669%3A0xa481bdfaa80667cd!2sAstraSt%C3%A4d!5e0!3m2!1sen!2sse!4v1689791332694!5m2!1sen!2sse" width="600" height="450" style="border:0;" allowfullscreen=""
         loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
     </div>
</div>

    
@endsection