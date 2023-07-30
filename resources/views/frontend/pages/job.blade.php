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
  <div class="col-11 d-flex justify-content-center align-items-center m-auto">        

@foreach ($jobs as $job)
        <div class="card mb-2 p-3">
        <div class="row g-0">
          <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center bg-secondary text-white">
            <h4>{{$job->jobTitle}}</h4>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="card-body">
               <h4>{{$job->jobTitle}}</h4>
              <p class="card-text">{{$job->jobDescription}}</p>
              <p class="card-text text-danger" >Sista ansökningsdag {{$job->slutDatum}}</p>
              <a  href="{{ route('applications.create') }}" class="btn btn-warning ml-5">Sök tjänsten</a>
            </div>
          </div>
        </div>
      </div>
   @endforeach
  </div>
      
  @endif
</div>
@endsection