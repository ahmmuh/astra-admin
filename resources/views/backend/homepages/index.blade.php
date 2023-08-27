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
  @if ($homePages->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Du har ingen text på startsida</h5>
          <a href="{{ route('startsida.create') }}" type="button" class="btn btn-warning">Publicera text på startsida</a>
      </div>
      
 </div>
      
  @else
   <div class="col">
    <a href="{{ route('startsida.create') }}" type="button" class="btn btn-warning">Publicera text på startsida</a>

    <div class="row mt-3">
            @foreach ($homePages as $homePage)
         <div class="col-12">
            <div class="card mb-3">
          <img class="card-img-top"  src="{{ asset('storage/images/'.$homePage->welcomeImage) }}" style="width: 240px" alt="Title">
             <div class="card-body">
                <h4 class="card-title">{{$homePage->title}}</h4>
                <p class="card-text">{{ $homePage->bodyText }}</p>

                <h4 class="card-title">{{$homePage->title2}}</h4>
                <p class="card-text">{{ $homePage->description }}</p>
                <img class="card-img-top"  src="{{ asset('storage/images/'.$homePage->descriptionImage) }}" style="width: 240px" alt="Title">
            </div>
            <a href="{{ route('startsida.show', $homePage->id) }}" style="margin-left: 1rem">Läs mer</a>
        </div>
         <div class="mt-1 bg-success">
     <hr class="" style="height: .2rem">
   </div>
         </div>
       @endforeach
    </div>
  
   </div>
      
  @endif
</div>
@endsection
