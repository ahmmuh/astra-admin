@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <a name="" id="" class="btn text-primary my-2" href="{{route ('blogs.create')}}" role="button">Skapa blog</a>

    <div class="row">
        <div class="col-3 col-left">

            <div class="list-group">
                <h3 class="list-group-item active">Menu</h3>
                <a href="#" class="list-group-item list-group-item-action ">Active item</a>
                <a href="{{ route('clients.create') }}" class="list-group-item list-group-item-action">Create</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
            </div>
        </div>
       @if ($blogs->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Inga nyheter just nu</h5>
      </div>
      
 </div>
      
  @else
            
        <div class="col">
            @foreach ($blogs as $blog)
            <div class="card m-2">
                <div class="card-body">
                    <img class="card-img-top img-thumbnail" style="width: 300px; height: 200px" src="{{ asset('storage/images/'.$blog->blogImage) }}"  alt="Bild">
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <p class="card-text">{{$blog->description}} </p>
                        <span>{{$blog->created_at}}</span>
                </div>
                <div class="row">
                    <div class="col">
                        <a  class="btn" href="{{ route('blogs.edit', $blog->id) }}"><i class="fa-solid fa-pencil fa-2xl"></i></a>

                    {{-- </form> --}}
                    </div>
                    <div class="col">
                         <form action="{{ route('blogs.destroy', $blog->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn"><i class="fa-solid fa-trash fa-2xl"></i></button>
                    </form>
                    </div>
                </div>
            </div>
                @endforeach
            </div>
                
            @endif

            {{ $blogs->links() }}

        </div>
        <hr>
    </div>
</div>
@endsection