

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="container">
                <form action="{{ route('jobs.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="jobtitle" class="col-4 col-form-label">Jobb titel</label>
                            <input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Vad är det för jobb?">
                    </div>
                   <div class="mb-3 ">
                        <label for="jobDescription" class="col-4 col-form-label">Jobb beskrivning</label>
                            <textarea name="jobDescription" class="form-control" id="jobDescription" cols="60" rows="10"></textarea>
                    </div>

                     <div class="mb-3 ">
                        <label for="location" class="col-4 col-form-label">Ort</label>
                            <input type="text" class="form-control" name="location" id="location" placeholder="Göteborg">
                    </div>
                     <div class="mb-3 ">
                        <label for="publiceradDatum" class="col-4 col-form-label">Publicerings datum</label>
                            <input type="date" class="form-control" name="publiceradDatum" id="publiceradDatum" placeholder="Name">
                    </div>
                        <div class="mb-3 ">
                        <label for="slutDatum" class="col-4 col-form-label">Sista ansöknings datum</label>
                            <input type="date" class="form-control" name="slutDatum" id="slutDatum" placeholder="slutDatum">
                    </div>
                    <div class="mb-3 ">
                            <button type="submit" class="btn btn-primary">Skapa</button>
                </form>
            </div>
        </div>
    </div>
@endsection

