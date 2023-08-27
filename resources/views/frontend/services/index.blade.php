@extends('frontend.layouts.app')
@section('header')
<style>
  .header-container{
    height: auto;
 
  }
 @media only screen and (max-width: 600px) {
  .btns {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: .4rem;
    .btn{
      width: 100%;
    }
    .btn:nth-child(2){
      margin-top: 1rem;
    }
  }
}
.header-container img{
  z-index: 1;

}
.header-container h3 {
  font-size: 2.7rem;
  font-weight: bold;

}
.header-container h3 strong{
  color: rgba(218, 57, 111, 0.904);
}
.header-container p{
  font-size: 1.2rem;
  font-family: Arial, Helvetica, sans-serif;
  letter-spacing: .1rem;
  padding-top: .2rem;
}
.header-container .btn{
  border-radius: 2rem;
  padding: .6rem;
  flex: 1;
}
div.btns{
  display: flex;
  justify-content: space-center;
  align-items: center;
}
/* Make it responsive for mobile */
div.btns a:nth-child(1){
  margin-right: .7rem;
}
.header-container .btn:hover {
  background-color: rgba(24, 5, 5, 0.893);
  color: white;
  transition: .8s ease-in;
}
  header-container .btn:focus {
    outline-color: transparent;
    outline-style:solid;
    box-shadow: 0 0 0 4px #5a01a7;
    transition: 0.5s;
}
html {
  scroll-behavior: smooth;
}

</style>

<div class="container header-container">
 <header>
   <div class="row">
      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
       @foreach ($services as $service)
        @if ($service->startsida === 'startsida')
          <h3 class="title">{{$service->title}} <strong> Lorem ipsum dolor sit amet.</strong></h3>
        <p>{{$service->description}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, iusto!</p>
        @endif
           
       @endforeach
        <div class="btns">
          <a href="#services" class="btn btn-lg btn-warning mr-1">Företagsjänster</a>
          <a href="{{ url('privateservices') }}" class="btn btn-lg btn-warning">Privattjänster</a>
        </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
          <img src="{{asset('images/images-shaqo/fonster.png')}}" alt="bild"
          style="max-width: 100%; z-index:1;">
        </div>
      </div>
 </header>
  </div>

  
  <div class="container mt-4">
    <hr>
    <div class="row">
  @foreach ($services as $service)
  @if ($service->startsida === 'startsida')
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <img src="{{ asset('storage/images/'.$service->descriptionImage) }}" style="max-height: 100%; z-index: -1; max-width: 100%;" alt="" >
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <h4 class="text-danger">{{$service->title2}}</h4>
    <p>{{$service->description}}</p>
    <a href="{{ url('contacts') }}" class="btn btn-warning">Kontakta oss</a>
  </div>
  @endif
 @endforeach
 </div>
  </div>
{{-- 
  <div class="container" id="services">
  <div class="row">
  @include('frontend.services.sections.index');
 </div>
</div> --}}
@endsection
