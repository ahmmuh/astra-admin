@extends('layouts.app')
@section('content')
<div class="container">
    <a name="" id="" class="btn" href="{{route('blogs.index')}}" role="button">
        <i class="fa-solid fa-2xl  fa-chevron-left"></i>
    </a>

    <div class="row">
        <div class="col-sm-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$blog->title}}</h4>
                    <p class="card-text">{{$blog->description}}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
