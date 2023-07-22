@extends('layouts.app')
@section('content')
<form action="{{ route('logos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row">
                          <div class="mb-3 col-lg-6 col-md-12">
                            <input type="file" class="form-control" name="logo" id="ort"  placeholder="logo">
                             @error('logo')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Spara</button>
                </form>
    
@endsection