@extends('frontend.layouts.app')

@section('content')
<div class="container">
   <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('storage/images/'.$service->serviceImage) }}" alt="Service bild" style="width: 80%">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>{{$service->title}}</h3>
                    <p>
                        {{$service->bodyText}}
                 </p>
                </div>

                @include('frontend.privateservice.sections.index')
            </div>
</div>
    
@endsection