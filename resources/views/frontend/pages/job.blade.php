@extends('frontend.layouts.app')
@section('content')
<div class="row w-75 m-auto pt-4">
  @if ($jobs->count() === 0)
 <div class="col">
      <div class="alert alert-warning" role="alert">
          <h5 class="lead">Vi har inga lediga jobb just nu</h5>
      </div>
      
 </div>
      
  @else
       
<div class="row bg-light">
  <div class="col">
 <h5 class=" text-primary">Vi har {{$jobs->count()}} lediga jobb</h5>
  </div>
</div>
@foreach ($jobs as $job)
        <div class="card mb-2 p-3">
        <div class="row g-0">
          <div class="col-lg-4 col-md-12 d-flex bg-secondary text-white justify-content-center align-items-center">
            <h4>{{$job->jobTitle}}</h4>
          {{-- <img class="card-img-top " style="width: 80%;" src="{{url('images/astra-logos/logo5.png')}}"  alt="Bild"> --}}

          </div>
          <div class="col-lg-8 col-md-12">
            <div class="card-body">
               <h4>{{$job->jobTitle}}</h4>
              <p class="card-text">{{$job->jobDescription}}</p>
              <p class="card-text text-danger" >Sök senast {{$job->slutDatum}}</p>
              <a  href="{{ route('applications.create') }}" class="btn btn-warning ml-5">Sök tjänsten</a>
            </div>
          </div>
        </div>
      </div>
   @endforeach
      
  @endif
</div>
@endsection