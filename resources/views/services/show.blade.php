@extends('layouts.app')

@section('service')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $service->title }}</h4>
            <p class="card-text">{{ $service->description }}</p>
        </div>

         <div class="col d-flex gap-3 align-items-center" style="margin-left: 2rem">
                 <a href="{{ route('services.edit', $service->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square"></i></a> 
                <form action="{{ route('services.destroy', $service->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form>                <a href="{{ route('services.index') }}" class="card-link"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
    </div>
</div>
@endsection