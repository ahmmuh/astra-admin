@extends('layouts.app')
@section('content')
<form action="{{ route('contacts.update',$contact) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                       @method('PUT')
                 <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="telefon" id="telefon"  value="{{ $contact->telefon }}">
                    </div>
                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="email" id="email" value="{{ $contact->email }}">
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="adress" id="adress"  value="{{ $contact->adress }}">
                                
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="number" class="form-control" name="postNummer" id="postNumber"  value="{{ $contact->postNummer }}">
                    </div>
                  
                          <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="ort" id="ort" value="{{ $contact->ort }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block w-100">Uppdatera</button>
                </form>
    
@endsection