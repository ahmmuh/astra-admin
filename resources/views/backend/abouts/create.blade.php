@extends('layouts.app')
@section('content')
<form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="title" id="title"  placeholder="Om Astrastäd">
                              @error('title')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    </div>
                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="rubrik" id="rubrik"  placeholder="Rubrik till texten">
                               @error('rubrik')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <div class="mb-3">
                              <label for="" class="form-label">Beskrivning</label>
                              <textarea class="form-control" name="text" id="text" rows="3"></textarea>
                                @error('text')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                                
                    </div>
                       
                  
                          <div class="mb-3 col-lg-6 col-md-12">
                            <input type="file" class="form-control" name="logo" id="logo"  placeholder="Logo">
                              @error('logo')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Spara</button>
                </form>
    
@endsection