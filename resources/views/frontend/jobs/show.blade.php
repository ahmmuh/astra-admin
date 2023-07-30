@extends('layouts.app')

@section('job')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $job->jobTitle }}</h4>
            <p class="card-text">{{ $job->jobDescription }}</p>
            <select name="location" disabled class="form-control" id="">
                <option value="{{$job->location}}">{{$job->location}}</option>
            </select>
            <div class="col d-flex gap-3">
                <span><strong class="fs-6 text-success p-2">Publicerad{{ $job->publiceradDatum }} </strong></span> | |  
                <span><strong class="fs-6 text-danger p-2"> Sök senast {{ $job->slutDatum }}</strong></span>
            </div>
            <hr>
            <div class="col d-flex gap-3 align-items-center" style="margin-left: 2rem">
                 <a href="{{ route('jobs.edit', $job->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square" data-toggle="tooltip" data-placement="top" title="Redigera"></i></a> 
                <form action="{{ route('jobs.destroy', $job->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn" data-toggle="tooltip" data-placement="top" title="Ta bort"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form> 
                <a href="{{ route('jobs.index') }}" class="card-link"><i class="fa-solid fa-chevron-left" data-toggle="tooltip" data-placement="top" title="Tillbaka"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
