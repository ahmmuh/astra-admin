@extends('layouts.app')

@section('content')
<div class="row">
  @if ($services->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Inga tjänster</h5>
          <a href="{{ route('services.create') }}" class="btn btn-warning">Lägg till ny tjänst</a>
      </div>
      
 </div>
      
  @else
   <div class="col">
        <a href="{{ route('services.create') }}">Lägg till ny tjänst</a>
    <div class="row">
            @foreach ($services as $service)
         <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-3">
            <img class="card-img-top" src="{{ asset('/storage/',$service->serviceImage)}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$service->title}}</h4>
                <p class="card-text">{{ $service->description }}</p>
                <p class="card-text">{{ $service->serviceType }}</p>
                <a href="{{ route('services.show', $service->id) }}">Läs mer</a>

            </div>
        </div>
         </div>
       @endforeach
    </div>
   </div>
      
  @endif
</div>
@endsection