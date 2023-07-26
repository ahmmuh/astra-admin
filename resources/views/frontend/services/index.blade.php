@extends('frontend.layouts.app')

@section('header')
<div class="container-fluid" style="background-color: #f8f3f3">
  <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 headerSlider mt-2 ">
      <img src="{{asset('images/abdi.jpg')}}" alt="" style="max-width: 100%; height:auto%; margin-left: -1rem; display: block">
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 p-3">
      <h1>Välkommen till Astra städ Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, incidunt.</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem facilis perferendis harum magnam dolore aliquam temporibus quae. Odit expedita iste corrupti ipsam nostrum quos dolore corporis. Minima facilis quaerat laboriosam?</p>
      <div class=" mb-3 d-flex .justify-content-md-between align-items-center">
           <a href="{{ route('services.index') }}" class="btn  btn-lg btn-block text-white" 
            style="width: 25rem; margin-right: 1rem; background-color: #dfb11bef;" type="button" id=""><i class="fas fa-hand-point-right"></i> Se våra företagstjänster</a>
        <a href="{{ route('privateservices.index') }}" class="btn btn-lg btn-block text-white" type="button"
         style="width: 25rem; background-color: #dfb11bef" id=""><i class="fas fa-hand-point-right"></i> Se våra privattjänster</a>
      </div>
    </div>

  </div>

 
  @include('frontend.services.sections.index')


 
</div>                       

@endsection


