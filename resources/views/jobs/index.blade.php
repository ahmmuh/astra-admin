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
        <a href="{{ route('jobs.create') }}">Annonsera nytt jobb</a>
        <ul class="list-group">
  <li class="list-group-item "><a href="#">Cras justo odio</a></li>
  <li class="list-group-item">

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, eius ducimus asperiores omnis dolorem porro ipsa sequi officia? Exercitationem amet est fugit excepturi provident dolore ratione! Libero id soluta sit!</p>
  </li>
        
</ul>
   </div>
      
  @endif
</div>
@endsection