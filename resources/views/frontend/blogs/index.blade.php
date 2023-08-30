@extends('frontend.layouts.app')

<style>
  .text-muted{
    display: none;
  }
</style>
@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="row w-75 ">
   @foreach ($blogs as $blog)
        <div class="card mb-2">
        <div class="row g-0">
          <div class="col-lg-4 col-md-12 mb-2">
            <img src="{{ asset('storage/images/'.$blog->blogImage) }}" class="img-fluid rounded-start" style="height: 100%; max-width: 100%;" >
          </div>
          <div class="col-lg-8 col-md-12 ">
            <span class="badge rounded-pill bg-success" style="margin-left: 2rem">Nyhet </span>
            <div class="card-body">
              <h4 class="card-title">{{$blog->title}}</h4>
              <p class="card-text">{{$blog->bodyText}}</p>
              <p>{{$blog->description}}</p>
              <p class="card-text"><small class="text-muted">{{$blog->created_at}}</small></p>
            </div>
          </div>
        </div>
      </div>
   @endforeach
   {{ $blogs->links() }} 
</div>
</div>
   
@endsection