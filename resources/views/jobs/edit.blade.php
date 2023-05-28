@extends('layouts.app')

@section('content')
<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="/" role="button">
        <i class="fa-solid fa-2xl fa-chevron-left"></i>

    </a>

</div>

<div class="container">
    <div class="row">
        <h3><strong class="text-danger">Du håller på ClientContact:</strong> {{$ClientContact->firstName}} med ID {{$blog->id}}</h3>

        @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
        @endif
        <div class="col">
            <form  action="{{ url('jobs.update', $ClientContact->id)}}" method="POST">
                @csrf
                @method('PUT')
               <div class="mb-3 row">
                        <label for="jobtitle" class="col-4 col-form-label">Jobb titel</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="jobtitle" id="jobtitle" value="{{ $job->jobtitle }}" placeholder="Vad är det för jobb?">
                        </div>
                    </div>
                   <div class="mb-3 row">
                        <label for="jobDescription" class="col-4 col-form-label">Jobb titel</label>
                        <div class="col-8">
                            <textarea name="jobDescription" id="jobDescription" value="{{ $job->jobDescription }}"  cols="30" rows="10"></textarea>
                        </div>
                    </div>

                     <div class="mb-3 row">
                        <label for="location" class="col-4 col-form-label">Ort</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="location" value="{{ $job->location }}"  id="location" placeholder="Ort">
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label for="publiceradDatum" class="col-4 col-form-label">Publicerings datum</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="publiceradDatum" value="{{ $job->publiceradDatum }}"   id="publiceradDatum" placeholder="Name">
                        </div>
                    </div>
                        <div class="mb-3 row">
                        <label for="slutDatum" class="col-4 col-form-label">Sista ansöknings datum</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="slutDatum" value="{{ $job->slutDatum }}" id="slutDatum" placeholder="slutDatum">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="submit" class="btn btn-primary">Uppdatera</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection

