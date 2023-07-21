@extends('frontend.layouts.app')

@section('content')
<div class="container mt-4">
  <div class="row ">
    <div class="col-lg-4 col-md-12">
    @foreach ($contacts as $contact)
        <h6 class="card-title">{{$contact->adress}} <br> {{$contact->ort}} {{$contact->postNummer}}</h6>
              <span>{{$contact->telefon}}</span> <br>
              <span>{{$contact->email}}</span>
    @endforeach
        
       
      </div>
      <div class="col mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2131.6157865712466!2d11.98893837671756!3d57.70599717386924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff582100ba669%3A0xa481bdfaa80667cd!2sAstraSt%C3%A4d!5e0!3m2!1sen!2sse!4v1689791332694!5m2!1sen!2sse" width="600" height="450" style="border:0;" allowfullscreen=""
         loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
     </div>
    </div>
    
@endsection