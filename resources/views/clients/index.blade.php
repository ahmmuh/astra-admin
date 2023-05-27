@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-4">
        <ul class="list-group list-group-numbered">
        <li class="list-group-item active">Kund information</li>
        @foreach ($clients as $client)
            <li class="list-group-item" id="link">
                <a href="{{ route('clients.show',$client->id) }}" id="client">{{ $client->firstName }}</a>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="col">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $client->firstName }}</h4>
                 <p class="card-text">{{ $client->description }}</p>

                
               
    </div>
        </div>
  {{-- Slut parent     --}}      
</div>
</div>

@section('script')

<script>

</script>
    
@endsection
</div>


@endsection



