@extends('layouts.app')
@section('content')
<form action="{{ route('logos.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row">
                          <div class="mb-3 col-lg col-md-12">
                            <img  src="{{ asset('storage/images/'.$logo->logo) }}"  alt="">
                            <input type="file" class="form-control" name="logo" id="ort"  placeholder="logo">
                             @error('logo')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block w-100">Uppdatera</button>
                </form>
    
@endsection