@extends('layouts.app')

@section('job')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <h5 class="card-title">{{ $application->firstName }} {{ $application->lastName }} söker jobb </h5>
            <div class="col d-flex gap-3">
                <p class="card-text">{{ $application->description }}</p>
            </div>
            <hr>
            <div class="col d-flex gap-3 align-items-center" style="margin-left: 2rem">
                <span><strong class="fs-6 text-danger p-2"> Sökt {{ $application->updated_at }}</strong></span>
                 <a href="{{ route('applications.edit', $application->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square" data-toggle="tooltip" data-placement="top" title="Redigera"></i></a> 
                <form action="{{ route('applications.destroy', $application->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn" data-toggle="tooltip" data-placement="top" title="Ta bort"><i class="fa-solid fa-trash fa-2 text-primary"></i></button>
                    </form>   
                    <a href="{{ route('applications.index') }}" class="card-link"><i class="fa-solid fa-chevron-left" data-toggle="tooltip" data-placement="top" title="Tillbaka"></i></a>
            </div>
        </div>
    </div>
    
</div>
@endsection
