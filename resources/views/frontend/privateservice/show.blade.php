@extends('frontend.layouts.app')

@section('content')
<div class="container">
   <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="https://astrastad.se/images/images-shaqo/kontor1.jpeg" style="width: 80%" alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>{{$service->title}}</h3>
                    <p>
                        {{$service->bodyText}}
                 </p>
                    {{-- <a href="" class="btn blue-background">Kontakta oss</a> --}}
                </div>
            </div>
</div>
    
@endsection