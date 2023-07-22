@extends('frontend.layouts.app')

@section('content')
 <div class="container">
       @foreach ($abouts as $about)
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <img src="{{url('')}}" alt=""> 
            </div>
            <div class="col-lg-7 col-md-12">
                <h2>{{$about->title}}</h2>
                
                <h4>{{$about->rubrik}}</h4>
                <p>
                    {{$about->text}}
                   </p>
                </p>
            </div>
        </div>
           
       @endforeach
 </div>
       
@endsection