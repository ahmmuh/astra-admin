@extends('layouts.app')
@section('blog')
<div class="container">
    <a name="" id="" class="btn" href="{{route('blogs.index')}}" role="button">
        <i class="fa-solid fa-2xl  fa-chevron-left"></i>
    </a>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$blog->title}}</h4>
                    <p class="card-text">{{$blog->description}}</p>
                </div>
                <div class="col d-flex gap-3">
                <span><strong class="fs-6 text-black p-2">Publicerad {{ $blog->created_at }}  </strong></span> 
            </div>
                <hr>
               <div class="col d-flex gap-3 align-items-center" style="margin-left: 2rem">
                 <a href="{{ route('blogs.edit', $blog->id) }}" class="card-link"><i class="fa-regular fa-pen-to-square"></i></a> 
                <form action="{{ route('blogs.destroy', $blog->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form>                <a href="{{ route('blogs.index') }}" class="card-link"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            </div>
        </div>

    </div>
    <div class="row">
                   
                </div>
</div>
@endsection
