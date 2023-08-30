@extends('frontend.layouts.app')

@section('content')
 <div class="container">
       @foreach ($abouts as $about)
        <div class="row p-5">
            <div class="col-lg-5 col-md-12">
            <img src="{{ asset('/storage/images/' .$about->logo)}}" style="width: 160px"  alt="Photo of sunset">

            </div>
            <div class="col-lg-7 col-md-12">
                <h2>{{$about->title}}</h2>
                
                <h4 class="pl-4">{{$about->rubrik}}</h4>
                <p>
                    {{$about->text}}
                   </p>
                </p>
            </div>
        </div>
           
       @endforeach

       <div class="row">
         @include('frontend.services.sections.index')
       </div>
 </div>
       
@endsection