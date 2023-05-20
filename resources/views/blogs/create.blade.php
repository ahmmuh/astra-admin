@extends('layouts.app')

@section('content')

<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="/blogs" role="button">
        <i class="fa-solid fa-2xl  fa-chevron-left"></i>
    </a>
</div>
<div class="container">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col">
            <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">Tittle</label>
                        <input type="text" name="title" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    </dvi>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="" class="form-label">Beskrivning</label>
                            <textarea required class="form-control" name="description" id="" rows="3"></textarea>

                        </div>
                        </dvi>
                        <div class="mb-3">
                            <label for="" class="form-label">Bild</label>
                            <input type="file" name="blogImage" id="" required class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        
                        <button type="submit" name="" id="" class="btn btn-success">Skapa</button>

            </form>
            
        </div>
        
    </div>
</div>

@endsection
