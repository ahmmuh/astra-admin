@extends('layouts.app')

@section('service')
<div class="row">
    <div class="card">
   <img class="card-img-top"  src="{{ asset('storage/images/'.$startsida->welcomeImage) }}" style="width: 240px" alt="Title">
        <div class="card-body">
                <h4 class="card-title">{{$startsida->title}}</h4>
                <p class="card-text">{{ $startsida->bodyText }}</p>

                <h4 class="card-title">{{$startsida->title2}}</h4>
                <p class="card-text">{{ $startsida->description }}</p>
                <img class="card-img-top"  src="{{ asset('storage/images/'.$startsida->descriptionImage) }}" style="width: 240px" alt="Title">
            </div>

         <div class="col d-flex gap-3 align-items-center" style="margin-left: 2rem">
                 <a href="{{ route('startsida.edit', $startsida->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square"></i></a> 
                <form action="{{ route('startsida.destroy', $startsida->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form>                <a href="{{ route('startsida.index') }}" class="card-link"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
    </div>
</div>
@endsection