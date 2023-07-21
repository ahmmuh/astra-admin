@extends('layouts.app')

@section('content')
<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="{{ route('privateservices.index') }}" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a>

</div>
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('privateservices.update', $service) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="col-4 col-form-label">Service titel</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $service->title }}">
                                  @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                     <div class="mb-3 ">
                        <label for="bodyText" class="col-4 col-form-label">Kort text om tjänsten</label>
                            <textarea name="bodyText" class="form-control" id="bodyText" cols="40" rows="10" placeholder="Kort text om tjänsten">{{ $service->bodyText }}</textarea>
                                  @error('bodyText')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                   <div class="mb-3 ">
                        <label for="description" class="col-4 col-form-label">Service beskrivning</label>
                            <textarea name="description" class="form-control" id="description" cols="60" rows="10">{{ $service->description }}</textarea>
                                  @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="serviceType" class="col-4 col-form-label">Servicetyp</label>
                            <input type="text" class="form-control" name="serviceType" id="serviceType" value="{{ $service->serviceType }}">
                                  @error('serviceType')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                     <div class="mb-3 ">
                        <label for="serviceImage" class="col-4 col-form-label">Bild</label>
                            <input type="file" class="form-control" name="serviceImage" id="serviceImage" value="{{ $service->serviceImage }}" placeholder="{{ $service->serviceImage }}">
                                  @error('serviceImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    <div class="mb-3 ">
                            <button type="submit" class="btn btn-success">Uppdatera</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection