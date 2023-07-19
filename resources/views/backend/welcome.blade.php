@extends('layouts.app');
@section('content')
 <div class="col-8">
      <h2>Vänligen logga in för att förtsätta</h2>
    <a href="{{ route('login') }}" class="btn btn-success">Logga in</a>
 </div>
 <hr>

@endsection