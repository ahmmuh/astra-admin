@extends('layouts.app')

@section('content')

<div class="container-fluid ml-4">
    <a name="" id="" class="btn" href="/blogs" role="button">
        <i class="fa-solid fa-2xl  fa-chevron-left"></i>
    </a>
</div>
<div class="container">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col">
            <form action="{{route('clients.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">Firstname</label>
                        <input type="text" name="firstName" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    </dvi>
                     <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">lastname</label>
                        <input type="text" name="lastName" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    </dvi>
                      <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">email</label>
                        <input type="text" name="email" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    </dvi>
                      <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">Telefon</label>
                        <input type="text" name="telefon" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    </dvi>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="" class="form-label">Beskrivning</label>
                            <textarea required class="form-control" name="description" id="" rows="3"></textarea>

                        </div>
                        </dvi>
                        <button type="submit" name="" id="" class="btn btn-primary">Spara</button>

            </form>
        </div>
    </div>
</div>

@endsection
