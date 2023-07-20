@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="row ">
         <div class="col">
<a class="btn btn-warning mb-2" href="{{ route('contacts.create') }}">Ny kontakt</a>
          @foreach ($contacts as $contact)
               <div class="card">
            <div class="card-body">
              <h6 class="card-title">{{$contact->adress}}, <br> 412 50 Göteborg</h6>
              <p>07006677889</p>
              <p class="card-text">info@astrastad.se</p>
            </div>
              <form action="{{ route('contacts.destroy', $contact->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form>   
          </div>
          @endforeach

         
         </div>
     </div>
    </div>
    
@endsection