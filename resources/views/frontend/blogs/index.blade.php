@extends('frontend.layouts.app')


@section('content')
<div class="container">
    <div class="row">
   @foreach ($blogs as $blog)
        <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="Image Source" class="img-fluid rounded-start" alt="Card title">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">{{$blog->title}}</h5>
              <p class="card-text">{{$blog->bodyText}}</p>
              <p>{{$blog->description}}</p>
              <p class="card-text"><small class="text-muted">{{$blog->created_at}}</small></p>
            </div>
          </div>
        </div>
      </div>
   @endforeach

</div>
</div>
   
@endsection