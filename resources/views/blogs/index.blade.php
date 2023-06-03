@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <a name="" id="" class="btn text-primary my-2" href="{{route ('blogs.create')}}" role="button">Skapa blog</a>

    <div class="row">
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
                    <p>echo asset('storage/1685787678.jpg');</p>
                    <img class="card-img-top img-thumbnail" style="width: 300px; height: 200px" src="{{ asset('storage/app/public/1685787678.jpg'.$blog->blogImage) }}"  alt="Bild">
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <p class="card-text">{{$blog->description}} </p>
                        <a href="{{ route('blogs.show',$blog->id) }}">Mer</a>
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