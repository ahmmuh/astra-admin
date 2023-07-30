@extends('frontend.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2>Jobbansökan</h2
        <div class="col">
            <div class="container">
                <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
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
                   <div class="mb-3 col-12 ">
                   <textarea name="description" class="form-control" id="description"  cols="60" rows="10" placeholder="Kort om dig själv"></textarea>
                         @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    {{-- Ge användare möjlighet att välja ort och typ av tjänst --}}
                    {{-- <div class="mb-3 col-lg-6 col-md-12">
                        <label for="" class="form-label">Vilken tjänst?</label>
                        <select class="form-select form-select-lg" name="jobType"  id="jobType" >
                            <option value="">Välj</option>
                            @foreach ($jobs as $job)
                            <option value="{{ $job->jobTitle }}">{{ $job->jobTitle }}</option>
                            @endforeach
                        </select>
                              @error('jobType')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div>

                     <div class="mb-3 col-lg-6 col-md-12">
                        <label for="" class="form-label">Vilken ort?</label>
                        <select class="form-select form-select-lg" name="location"  id="location">
                            <option value="">Välj</option>
                            @foreach ($jobs as $job)
                            <option value="{{ $job->location }}">{{ $job->location }}</option>
                            @endforeach
                        </select>
                              @error('location')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                    </div> --}}
                    
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Sök tjänsten</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

