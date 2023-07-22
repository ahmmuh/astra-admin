@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="row ">
         <div class="col">
<a class="btn btn-warning mb-2" href="{{ route('logos.create') }}">Lägg till ett logo</a>
          @foreach ($logos as $logo)
               <div class="card">
            <div class="card-body">
             <img class="card-img-top"  src="{{ asset('storage/images/'.$logo->logo) }}" style="width: 240px">

            </div>
            <div class="d-flex align-items-center">
                <form action="{{ route('logos.destroy', $logo->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form>   
                    <a href="{{ route('logos.edit', $logo->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square"></i></a> 
            </div>
          </div>

          @endforeach

         
         </div>
     </div>
    </div>
    
@endsection