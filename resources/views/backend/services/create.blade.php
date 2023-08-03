@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="col-4 col-form-label">Service titel</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Service titel">
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

 <div class="mb-3">
                        <label for="startsida" class="col-4 col-form-label text-muted" style="font-size: .9rem; color: red !important;">Skriv ordet "startsida" med små bokstäver (bara om du publicerar text på startsida</label>
                            <input type="text" class="form-control" name="startsida" id="startsida" placeholder="start sida">
                            @error('startsida')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>


                     <div class="mb-3">
                        <label for="menyNamn" class="col-4 col-form-label">Meny namn</label>
                            <input type="text" class="form-control" name="menyNamn" id="menyNamn" placeholder="Meny namn">
                            @error('menyNamn')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="bodyText" class="col-4 col-form-label">Kort text om tjänsten</label>
                            <textarea name="bodyText" class="form-control" id="bodyText" cols="40" rows="10" placeholder="Kort text om tjänsten"></textarea>
                                  @error('bodyText')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    
                   <div class="mb-3 ">
                        <label for="description" class="col-4 col-form-label">Service beskrivning</label>
                            <textarea name="description" class="form-control" id="description" cols="60" rows="10" placeholder="Service beskrivning"></textarea>
                                  @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="descriptionImage" class="col-4 col-form-label">Bild</label>
                            <input type="file" class="form-control" name="descriptionImage" id="descriptionImage">
                                  @error('descriptionImage')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="serviceType" class="col-4 col-form-label">Servicetyp</label>
                            <input type="text" class="form-control" name="serviceType" id="serviceType" placeholder="Vilken tjänst?">
                                  @error('serviceType')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 ">
                        <label for="extra" class="col-4 col-form-label">Dessa ingår i tjänsten</label>
                            <input type="text" class="form-control" name="extra[]" id="extra" >
                                  @error('extra')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                    {{-- <input type="text" name="day[]" class="form-control" value="{{ $days[$i] }}" readonly/> --}}

                     <div class="mb-3 ">
                        <label for="serviceImage" class="col-4 col-form-label">Bild</label>
                            <input type="file" class="form-control" name="serviceImage" id="serviceImage">
                                  @error('serviceImage')
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

