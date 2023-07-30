@extends('layouts.app')

@section('content')
 <div class="container">
     {{-- <a href="{{route('.create')}}" class="btn btn-warning mb-2">Skapa om oss sida</a> --}}
    @foreach ($emails as $email)
    <div class="row">
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-9">
            <div class="card-body">
                <h4>{{$email->subject}}</h4>
              <p>{{$email->message}}</p>
              <h6 class="card-title">{{$email->firstname}} {{$email->lastname}}</h6>
                 <p>{{$email->email}}</p>
              <p>{{$email->telefon}}</p>
              <p class="card-text"><strong>Skickats {{$email->created_at}}</strong></p>
            </div>
            
          </div>
           <form action="{{ route('sending.destroy', $email->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  onclick="return confirm('Är du säker på att vill ta bort?')" type="submit" class="btn" data-toggle="tooltip" data-placement="top" title="Ta bort"><i class="fa-solid fa-trash fa-2"></i></button>
                    </form> 
        </div>
      </div>
      
     
    </div>
    @endforeach
          
 </div>
       
@endsection