@extends('layouts.app')
@section('content')

 <div class="table-responsive">
       <a name="" id="" class="btn" href="{{route('clients.index')}}" role="button">
        <i class="fa-solid fa-2xl  fa-chevron-left"></i>
    </a>
            <table class="table table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Förnamn</th>
                        <th scope="col">Efternamn</th>
                        <th scope="col">E-post</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tbody">
                        <td>{{ $client->firstName }}</td>
                        <td>{{ $client->lastName }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telefon }}</td>
                        <td>
                        <form action="{{ route('clients.destroy', $client->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn "><i class="fa-solid fa-trash fa-2xl"></i></button>
                    </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
@endsection

{{--  <ul class="list-group list-group-numbered">
    <li class="list-group-item active">{{ $client->firstName }}</li>

</ul>  --}}