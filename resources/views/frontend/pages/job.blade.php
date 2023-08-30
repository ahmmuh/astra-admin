@extends('frontend.layouts.app')
@section('content')
<style>
  #row{
width: 63%;
margin: 0 auto;
  }
</style>
<div class="row  pt-4" id="row">
  @if ($jobs->count() === 0)
 <div class="col">
      <div class="alert alert-warning" role="alert">
        <h5 class="lead"><span class="badge alert alert-danger">Vi har inga lediga jobb just nu</span></h5>
      </div>
      
 </div>
      
  @else
<div class="row bg-light">
  <div class="col mr-3">
 <h5 class=" text-dark"> <span class="badge bg-primary">lediga jobb: {{$jobs->count()}} </span>  </h5> 
  </div>
</div>
@foreach ($jobs as $job)
        <div class="card mb-2 p-3" >
        <div class="row g-0">
          <div class="col d-flex text-dark justify-content-center align-items-center">
            <h4>{{$job->jobTitle}}</h4>
          </div>
          <div class="col-lg-9 col-md-12">
            <div class="card-body">
               <h4>{{$job->jobTitle}}</h4>
              <p class="card-text">{{$job->jobDescription}}</p>
              <p>{{$job->location}}</p>
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