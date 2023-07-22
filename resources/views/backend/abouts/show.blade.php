@extends('layouts.app')

@section('content')
 <div class="container">
     <a href="{{route('abouts.index')}}" class="btn btn-warning mb-2">Skapa om oss sida</a>
    <div class="row">
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="Image Source" class="img-fluid rounded-start" alt="Card title">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">{{$about->title}}</h5>
              <p class="card-text">{{$about->rubrik}}</p>
              <p>{{$about->text}}</p>
              <p class="card-text"><small class="text-muted">{{$about->created_at}}</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
          
 </div>
       
@endsection