@extends('layouts.app')

@section('content')
 <div class="container">
     <a href="{{route('abouts.create')}}" class="btn btn-warning mb-2">Skapa om oss sida</a>
    @foreach ($abouts as $about)
    <div class="row">
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
           <img class="card-img-top"  src="{{ asset('storage/images/'.$about->logo) }}" style="width: 240px" alt="Title">
          </div>
          <div class="col-md-9" style="padding-left: .5rem">
            <div class="card-body">
              <h5 class="card-title">{{$about->title}}</h5>
              <p class="card-text">{{$about->rubrik}}</p>
              <p>{{$about->text}}</p>
              <p class="card-text"><small class="text-muted">{{$about->created_at}}</small></p>
            </div>
          </div>
        </div>
         <div class="col d-flex justify-content-center gap-3 align-items-center" style="margin-left: 2rem">
                 <a href="{{ route('abouts.edit', $about->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square" data-toggle="tooltip" data-placement="top" title="Redigera"></i></a> 
                <form action="{{ route('abouts.destroy', $about->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn" data-toggle="tooltip" data-placement="top" title="Ta bort"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form> 
            </div>
      </div>
      
     
    </div>
    @endforeach
          
 </div>
       
@endsection