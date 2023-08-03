@extends('layouts.app')

@section('content')
<div class="container-fluid ml-4">
    {{-- <a name="" id="" class="btn" href="{{ route('privateservices.index') }}" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a> --}}
<h3 class="text-success">Du uppdaterar {{$service->serviceType}}</h3>
</div>
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('privateservices.update', $service) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="col-4 col-form-label"></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $service->title }}">
                                  @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title2" class="col-4 col-form-label">Rubrik nivå 2</label>
                            <input type="text" class="form-control" name="title2" id="title2" value="{{ $service->title2 }}">
                            @error('title2')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>



                     <div class="mb-3">
                        <label for="menyNamn" class="col-4 col-form-label">Meny namn</label>
                            <input type="text" class="form-control" name="menyNamn" id="menyNamn" value="{{ $service->menyNamn }}">
                            @error('menyNamn')
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
                        <label for="descriptionImage" class="col-4 col-form-label"></label>
                            <input type="file" class="form-control" name="descriptionImage" id="descriptionImage">
                                  @error('descriptionImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                          <img class="card-img-top"  src="{{ asset('storage/images/'.$service->descriptionImage) }}" style="width: 240px" >

                    </div>

                     <div class="mb-3 ">
                        <label for="serviceType" class="col-4 col-form-label">Servicetyp</label>
                            <input type="text" class="form-control" name="serviceType" id="serviceType" value="{{ $service->serviceType }}">
                                  @error('serviceType')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                      <div class="mb-3 ">
                        <label for="extra" class="col-4 col-form-label">Dessa ingår i tjänsten</label>
                            <input type="text" class="form-control" name="extra[]" id="extra">
                                  @error('extra')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="serviceImage" class="col-4 col-form-label"></label>
                            <input type="file" class="form-control" name="serviceImage" id="serviceImage" value="{{ $service->serviceImage }}" value="{{ $service->serviceImage }}">
                                  @error('serviceImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                                          <img class="card-img-top"  src="{{ asset('storage/images/'.$service->serviceImage) }}" style="width: 240px" alt="Title">

                    </div>
                    <div class="mb-3 ">
                            <button type="submit" class="btn btn-success">Uppdatera</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection