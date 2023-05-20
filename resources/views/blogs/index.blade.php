@extends('layouts.app')

@section('content')

<style>
    .row .col-left {
        top: 0;
        left: 0;
        bottom: 0;
        height: 100vh;

    }

    .list-group {
        left: 0;
        top: 0;
        height: 100vh;
    }

</style>

<div class="container">
    <a name="" id="" class="btn text-primary my-2" href="{{route ('blogs.create')}}" role="button">Skapa blog</a>

    <div class="row">
        <div class="col-3 col-left">

            <div class="list-group">
                <h3 class="list-group-item active">Menu</h3>
                <a href="#" class="list-group-item list-group-item-action ">Active item</a>
                <a href="#" class="list-group-item list-group-item-action">Item</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
            </div>
        </div>

        <div class="col">
            @foreach ($blogs as $blog)
            <div class="card m-2">
                <div class="card-body">
                    <img class="card-img-top img-thumbnail" style="width: 300px; height: 200px" src="{{asset($blog->blogImage)}}" alt="bild">
                    <div>
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <p class="card-text">{{$blog->description}} </p>
                        <span>{{$blog->created_at}}</span>
                    </div>

                    <a name="" id="" class="btn" href="{{route('blogs.edit' , $blog->id)}}" role="button"><i class="fa-regular fa-pen fa-2xl"></i></a>
                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST"
                      @csrf
                      @method('DELETE')
                      <a name="" id="" class="btn btn-danger" href="{{route('blogs.index' , $blog->id)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                    </form>
                    {{-- <a name="" id="" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Läs mer" href="{{route('blogs.show' ,$blog->id)}}" role="button">
                        <i class="fa-brands fa-readme"></i>
                    </a> --}}
                </div>

                @endforeach
            </div>

            {{ $blogs->links() }}

        </div>
    </div>
</div>
@endsection
