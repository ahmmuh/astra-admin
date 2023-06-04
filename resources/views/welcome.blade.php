@extends('layouts.app');
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @auth
            <h4>Hej och välkommen {{ Auth::user()->name }}!</h4>
            @endauth
        </div>
    </div>
</div>
@endsection