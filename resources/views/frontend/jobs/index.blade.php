{{-- @extends('frontend.layouts.app')
@section('content')
<div class="row w-75 m-auto pt-4"> --}}
  {{-- @if ($jobs->count() === 0)
 <div class="col">
      <div class="alert alert-warning" role="alert">
          <h5 class="lead">Vi har lediga jobb just nu</h5>
      </div>
      
 </div>
      
  @else --}}
  {{-- <div class="col">        
          <h5 class=" text-success">Vi har {{$jobs->count()}} lediga jobb Ahmed</h5>
          <div class="accordion mb-2" id="accordionExample">
           @foreach ($jobs as $index => $job)
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <a class="accordion-button" type="button" data-bs-toggle="collapse" 
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                href="#headingOne-{{ $index }}"
                >
                  {{$job->jobTitle}}
                </a>
              </h2>
              <div id="headingOne-{{ $index }}" class="accordion-collapse collapse show" aria-labelledby="headingOne"
               data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <p>{{$job->jobDescription}}</p>
                 <strong>{{$job->location}}</strong> <br>
                 <span class="text-danger"><a href="{{route('applications.create', $job->id)}}">Sök tjänsten</a> innan {{$job->slutDatum}}</span> <br>
                 
                </div>
              </div>
            </div>
            
            @endforeach
          </div>
        </div> --}}
      
  {{-- @endif --}}
{{-- </div>
@endsection --}}