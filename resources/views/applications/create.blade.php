

@extends('layouts.app')
@section('content')
<h2>Jobbansökan</h2
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('applications.store') }}" method="POST">
                    @csrf
                 <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Förnamn">
                    </div>
                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Efternamn">
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-post">
                    </div>
                       <div class="mb-3 col-lg-6 col-md-12">
                            <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Telefon">
                    </div>
                      <div class="mb-3 col-lg-6 col-md-12">
                            <input type="file" class="form-control" name="cv" id="cv" placeholder="CV">
                    </div>
                   <div class="mb-3 col-12 ">
                   <textarea name="jobDescription" class="form-control" id="jobDescription" cols="60" rows="10">Kort om dig själv</textarea>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-12">
                        <label for="" class="form-label">Vilken tjänst?</label>
                        <select class="form-select form-select-lg" name="" id="">
                            <option selected>Välj</option>
                            @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->jobTitle }}</option>
                            @endforeach
                        </select>
                    </div>

                     <div class="mb-3 col-lg-6 col-md-12">
                        <label for="" class="form-label">Vilken ort?</label>
                        <select class="form-select form-select-lg" name="" id="">
                            <option selected>Välj</option>
                            @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-success btn-block w-100">Sök</button>
                </form>
            </div>
        </div>
    </div>
@endsection

