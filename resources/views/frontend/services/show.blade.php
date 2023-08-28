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
        <a  href="{{ url('contacts') }}" class="btn btn-warning p-2">Kontakta oss </a>
    </div>
</div>
<hr>
    <div class="row p-3">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{ asset('storage/images/'.$service->descriptionImage) }}" alt="Service bild" style="max-width: 100%">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <h4>{{$service->title2}}</h4>
                    <p>
                        {{$service->description}}
                 </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
            <div class="col-lg-8 my-3">
                <h4>Dessa ingår i tjänsten {{$service->menyNamn}} </h4>
            @foreach ($service->extra as $item)
            <span class="font-weight-bold" style="font-size: 1.2rem; font-style: italic; color: black;"> <i class="fa-solid fa-check fa-2xl text-success"></i> {{$item}} <br></span>
            @endforeach
            <hr style="border-bottom: 2px solid red;">
        </div>
            </div>
 @include('frontend.services.sections.index')
</div>    
@endsection

