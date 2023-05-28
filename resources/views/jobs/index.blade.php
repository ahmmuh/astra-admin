@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-lg-4">
       <!-- Some borders are removed -->
       <ul class="list-group list-group-flush">
           <li class="list-group-item active">Item</li>
           <li class="list-group-item">Item</li>
           <li class="list-group-item">Item</li>
           <li class="list-group-item">Item</li>
           <li class="list-group-item">Item</li>
         </ul>
   </div>
  @if ($jobs->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Vi har inga lediga jobb just nu</h5>
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