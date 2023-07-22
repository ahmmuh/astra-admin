@extends('layouts.app')

@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

    @if(session()->has('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif
<div class="row">
  @if ($services->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Inga tjänster</h5>
          <a href="{{ route('privateservices.create') }}" type="button" class="btn btn-warning">Lägg till ny tjänst</a>
      </div>
      
 </div>
      
  @else
   <div class="col">
    <a href="{{ route('privateservices.create') }}" type="button" class="btn btn-warning">Lägg till ny tjänst</a>

    <div class="row mt-3">
            @foreach ($services as $service)
         <div class="col-12">
                <div class="card mb-3">
            <img class="card-img-top" src="{{ asset('/storage/',$service->serviceImage)}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$service->title}}</h4>
                <p class="card-text">{{ $service->description }}</p>
                <p class="card-text">{{ $service->serviceType }}</p>
                <a href="{{ route('privateservices.show', $service->id) }}">Läs mer</a>

            </div>
        </div>
         </div>
       @endforeach
    </div>
   </div>
      
  @endif
</div>
@endsection