@extends('layouts.app')

@section('content')
<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="/" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a>

</div>

<div class="container">
    <div class="row">

        @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
        @endif
        <div class="col">
            <form  action="{{ route('jobs.update', $job->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               <div class="mb-3">
                        <label for="jobtitle" hidden class="col-4 col-form-label">Jobb titel</label>
                        <div class="col">
                            <input type="text" class="form-control" name="jobTitle" id="jobtitle" value="{{ $job->jobTitle }}" placeholder="Vad är det för jobb?">
                                         @error('jobTitle')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        </div>
                    </div>
                   <div class="mb-3">
                        <label for="jobDescription" hidden class="col-4 col-form-label">Job beskrivning</label>
                        <div class="col">
                            <textarea name="jobDescription" id="jobDescription" class="form-control"   cols="60" rows="10">{{ $job->jobDescription }}</textarea>
                                         @error('jobDescription')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        </div>
                    </div>

                     <div class="mb-3">
                        <label for="location" hidden class="col-4 col-form-label">Ort</label>
                        <div class="col">
                            <input type="text" class="form-control" name="location" value="{{ $job->location }}"  id="location" >
                                         @error('location')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        </div>
                    </div>
                     <div class="mb-3">
                        <label for="publiceradDatum" hidden class="col-4 col-form-label">Publicerings datum</label>
                        <div class="col">
                            <input type="date" class="form-control" name="publiceradDatum" value="{{ $job->publiceradDatum }}"   id="publiceradDatum" >
                                         @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                        <div class="mb-3">
                        <label for="slutDatum" hidden class="col-4 col-form-label">Sista ansöknings datum</label>
                        <div class="col ">
                            <input type="date" class="form-control" name="slutDatum" value="{{ $job->slutDatum }}" id="slutDatum" placeholder="slutDatum">
                           @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        </div>
                            <button type="submit" class="btn btn-danger">Uppdatera</button>
                    </div>
                    
                 
            </form>
        </div>
    </div>
</div>
@endsection

