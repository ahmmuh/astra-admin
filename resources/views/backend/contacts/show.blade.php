@extends('frontend.layouts.app')

@section('content')
<div class="row mt-2 d-flex justify-content-center align-items-center flex-grow-1">
      @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
   <div class="col-lg-10">
     <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $job->jobTitle }}</h4>
            <p class="card-text">{{ $job->jobDescription }}</p>
            <div class="col d-flex gap-3">
               
            <hr>
            <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="firstName" id="firstName"  placeholder="Förnamn">
                                  @error('firstName')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="lastName" id="lastName"  placeholder="Efternamn">
                                  @error('lastName')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="email" id="email"  placeholder="E-post">
                                  @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="telefon" id="telefon"  placeholder="Telefon">
                                  @error('telefon')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                      <div class="mb-3">
                                    <select name="location" class="form-control" id="" >
                                        <option>{{$job->location}}</option>
                                    </select>
                                  @error('location')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    <div class="mb-3">
                        <strong class="text-danger">Sök senast</strong>
                            <input type="text" class="form-control" name="slutDatum" value="{{$job->slutDatum}}" disabled id="slutDatum" >
                                  @error('slutDatum')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                   <div class="mb-3 col-12 ">
                   <textarea name="description" class="form-control" id="description"  cols="60" rows="10" placeholder="Kort om dig själv"></textarea>
                         @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Sök tjänsten</button>
                </form>
    
        </div>
    </div>
   </div>
</div>
@endsection
