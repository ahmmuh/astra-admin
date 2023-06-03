@extends('layouts.app')

@section('content')
<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="{{ route('services.index') }}" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a>

</div>
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('services.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="col-4 col-form-label">Service titel</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $service->title }}">
                    </div>
                   <div class="mb-3 ">
                        <label for="description" class="col-4 col-form-label">Service beskrivning</label>
                            <textarea name="description" class="form-control" id="description" cols="60" rows="10">{{ $service->description }}</textarea>
                    </div>

                     <div class="mb-3 ">
                        <label for="serviceType" class="col-4 col-form-label">Servicetyp</label>
                            <input type="text" class="form-control" name="serviceType" id="serviceType" value="{{ $service->serviceType }}">
                    </div>
                     <div class="mb-3 ">
                        <label for="serviceImage" class="col-4 col-form-label">Bild</label>
                            <input type="file" class="form-control" name="serviceImage" id="serviceImage" value="{{ $service->serviceImage }}">
                    </div>
                    <div class="mb-3 ">
                            <button type="submit" class="btn btn-success">Uppdatera</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection