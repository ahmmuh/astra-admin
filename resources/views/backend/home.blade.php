@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4>Hej och välkommen {{ Auth::user()->name }}!</h4>
            </div>
        </div>
    </div>
@endsection
