@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('startsida.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="col-4 col-form-label">Rubrik nivå 1 under meny</label>
                            <input type="text" class="form-control" name="title" id="title">
                            @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                <div class="mb-3">
                        <label for="title2" class="col-4 col-form-label">Rubrik nivå 2</label>
                            <input type="text" class="form-control" name="title2" id="title2">
                            @error('title2')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                     <div class="mb-3 ">
                        <label for="bodyText" class="col-4 col-form-label">Välkommen text under meny</label>
                            <textarea name="bodyText" class="form-control" id="bodyText" cols="40" rows="10"></textarea>
                                  @error('bodyText')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    
                   <div class="mb-3 ">
                        <label for="description" class="col-4 col-form-label">Text 2 på startsida</label>
                            <textarea name="description" class="form-control" id="description" cols="60" rows="10"></textarea>
                                  @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="descriptionImage" class="col-4 col-form-label">Första bild under meny </label>
                            <input type="file" class="form-control" name="descriptionImage" id="descriptionImage">
                                  @error('descriptionImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                     <div class="mb-3 ">
                        <label for="welcomeImage" class="col-4 col-form-label">Bild</label>
                            <input type="file" class="form-control" name="welcomeImage" id="welcomeImage">
                                  @error('welcomeImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    <div class="mb-3 ">
                            <button type="submit" class="btn btn-primary">Spara</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

