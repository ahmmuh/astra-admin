@extends('frontend.layouts.app')


@section('content')
<div class="container">
    <div class="row">
      @foreach ($blogs as $blog)
          <div class="col-lg-4">
            <div class="card">
                {{-- <img class="card-img-top" src="{{$blog->blogImage}}"> --}}
                <div class="card-body">
                    <h4 class="card-title">{{$blog->title}}</h4>
                    <p class="card-text">{{$blog->bodyText}}</p>
                    <p>{{$blog->created_at}}</p>
                </div>
            </div>
          </div>
      @endforeach
    </div>
</div>
   
@endsection