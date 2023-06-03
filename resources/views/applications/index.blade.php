@extends('layouts.app')

@section('content')
<div class="row">
  @if ($jobs->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Vi har inga annonserade lediga jobb just nu</h5>
          <a href="{{ route('jobs.create') }}" class="btn btn-warning">Lägg till ny annons</a>
      </div>
      
 </div>
      
  @else
  <div class="col">
    <a href="{{ route('applications.create') }}" class="btn btn-success text-white mb-3">Annonsera nytt jobb</a>
        <!-- Hover added -->
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action bg-info text-white">Aktiva jobbannonser</a>
         @foreach ($jobs as $job)
         <h5><a href="{{ route('jobs.show', $job->id) }}" class="list-group-item text-primary">{{ $job->jobTitle }}</a>
</h5>

         @endforeach
        </div>
   </div>
      
  @endif
</div>
@endsection