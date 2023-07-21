@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="row ">
         <div class="col">
<a class="btn btn-warning mb-2" href="{{ route('contacts.create') }}">Ny kontakt</a>
          @foreach ($contacts as $contact)
               <div class="card">
            <div class="card-body">
              <h6 class="card-title">{{$contact->adress}} <br> {{$contact->ort}} {{$contact->postNummer}}</h6>
              <span>{{$contact->telefon}}</span> <br>
              <span>{{$contact->email}}</span>
            </div>
            <div class="d-flex align-items-center">
                <form action="{{ route('contacts.destroy', $contact->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form>   
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square"></i></a> 
            </div>
          </div>

          @endforeach

         
         </div>
     </div>
    </div>
    
@endsection