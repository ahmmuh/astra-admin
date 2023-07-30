@extends('frontend.layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-12">
        <img  src="{{ asset('/storage/images/' .$service->serviceImage) }}" height="auto"  style="width: 100%" alt="Bild">
    </div>

    <div class="col-lg-6 col-md-12 ">
        <h3>{{$service->title}}</h3>
        <p>
            {{$service->bodyText}}
        </p>
        <a  href="{{ url('contacts') }}" class="btn btn-warning">Kontakta oss </a>
    </div>
</div>
<hr>

    <div class="row p-3">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{ asset('storage/images/'.$service->descriptionImage) }}" alt="Service bild" style="max-width: 100%">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <h3>{{$service->title}}</h3>
                    <p>
                        {{$service->description}}
                 </p>
                </div>
            </div>
            
          <div class="row">
            @include('frontend.services.sections.index')
          </div>
</div>

    
@endsection

