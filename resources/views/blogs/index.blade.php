@extends('layouts.app')

@section('content')
<div class="container mb-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

  @if(session()->has('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif
    <a name="" id="" class="btn btn-warning text-primary my-2" href="{{route ('blogs.create')}}" role="button">Skapa blog</a>

    <div class="row">
       @if ($blogs->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Inga nyheter just nu</h5> 
      </div>
      
 </div>
      
  @else     
        <div class="col m-2">
            {{ $blogs->links() }}

            @foreach ($blogs as $blog)
            <div class="card m-2">
                <div class="card-body d-flex gap-3">
                    <div class="col-4">
                        <img class="card-img-top img-thumbnail" style="width: 300px; height: 200px" src="{{ asset('storage/images/'.$blog->blogImage) }}"  alt="Bild">
                    </div>
                    <div class="col">
                            <h4 class="card-title">{{$blog->title}}</h4>
                        <p class="card-text">{{$blog->description}} </p>
                        <a href="{{ route('blogs.show',$blog->id) }}">Mer</a>
                    </div>
                </div>
            </div>
                @endforeach
            </div>
                
            @endif


        </div>
        <hr>
    </div>
</div>
@endsection