@extends('layouts.app')
@section('content')
<form action="{{ route('abouts.update', $about->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                 <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="title" id="title" value="{{$about->title}}">
                              @error('title')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    </div>
                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="rubrik" id="rubrik" value="{{$about->rubrik}}">
                               @error('rubrik')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    </div>
                       <div class="mb-3 col-12">
                            <div class="mb-3">
                              <label for="" class="form-label">Beskrivning</label>
                              <textarea class="form-control" name="text" id="text" cols="50" rows="10" >{{$about->text}}</textarea>
                                @error('text')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                                
                    </div>
                    
                    
                    <div class="mb-3 col-lg-6 col-md-12">
                                <img class="card-img-top"  src="{{ asset('storage/images/'.$about->logo) }}" style="width: 240px" alt="Title">
                            <input type="file" class="form-control" name="logo" id="logo" value="{{$about->logo}}" >
                              @error('logo')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100 mt-4">Uppdatera</button>
                </form>
    
@endsection