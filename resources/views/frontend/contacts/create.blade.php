@extends('layouts.app')
{{-- [	'telefon',	'email',	'adress',	'postNumber',	'ort']; --}}
@section('content')
<form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="telefon" id="telefon"  placeholder="telefon">
                    </div>
                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="email" id="email"  placeholder="E-post">
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="adress" id="adress"  placeholder="Address">
                                
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="number" class="form-control" name="postNumber" id="postNumber"  placeholder="Postnummer">
                    </div>
                  
                          <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="ort" id="ort"  placeholder="Ort">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Spara</button>
                </form>
    
@endsection