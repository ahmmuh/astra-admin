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
                <p>{{$service->description}}</p>

                    <a  href="{{ url('clientcontacts') }}" class="btn btn-warning">Kontakta oss </a>
                </div>
                <p class="p-3">{{$service->description}}</p>
            </div>

          <div class="row">
            @include('frontend.services.sections.index')
          </div>
</div>

    
@endsection

