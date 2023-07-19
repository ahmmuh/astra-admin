@extends('layouts.app')

@section('content')

<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="/blogs" role="button">
        <i class="fa-solid fa-2xl  fa-chevron-left"></i>
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tittle</label>
                        <input type="text" name="title" id="title" class="form-control">
                              @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    </dvi>

                     <div class="form-group">
                        <div class="mb-3">
                            <label for="bodyText" class="form-label">Brödtext</label>
                            <textarea class="form-control" name="bodyText" id="bodyText" rows="3"></textarea>
                         @error('bodyText')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        </dvi>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="" class="form-label">Beskrivning</label>
                            <textarea class="form-control" name="description" id="" rows="3"></textarea>
                                  @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                        </div>
                        </dvi>
                        <div class="mb-3">
                            <label for="blogImage" class="form-label">Bild</label>
                            <input type="file" name="blogImage" id="blogImage" class="form-control">
                                  @error('blogImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        
                        <button type="submit" name="" id="" class="btn btn-success">Skapa</button>

            </form>
            
        </div>
        
    </div>
</div>

@endsection
