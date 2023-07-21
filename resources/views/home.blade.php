@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
             @if (Auth::check())
                 <h4>Hej och välkommen {{ Auth::user()->name }}!</h4>
            @else
                 <h5 class="lead">Vänligen logga in för att förtsätta</h5>
                <a href="{{ route('login') }}" class="btn btn-success">Logga in</a>
            @endif
        </div>
        <div class="col-md-4">
           
            </div>
        </div>
    </div>
@endsection
