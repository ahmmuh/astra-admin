@extends('layouts.app')

@section('content')
<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="/blogs" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a>

</div>

<div class="container">
    <div class="row">
        <h3><strong class="text-danger">Du håller på uppdatera:</strong> {{$blog->title}} med ID {{$blog->id}}</h3>

        @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
        @endif
        <div class="col">
            <form  action="{{ url('BlogController@update', ['id' => $blog->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <div class="form-group">
                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <div class="form-group">
                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $blog->description }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block mt-2 w-100">Spara</button>
            </form>
        </div>
    </div>
</div>
@endsection
