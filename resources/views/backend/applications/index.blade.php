 @extends('layouts.secondlayout')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

  @if(session()->has('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif

<div class="row">
  @if ($applications->count() === 0)
 <div class="col">
      <div class="alert alert-success" role="alert">
          <h5 class="lead">Vi har inga annonserade lediga jobb just nu</h5>
          <a href="{{ route('applications.create') }}" class="btn btn-warning">Lägg till ny annons</a>
        </div>
        <a href="{{ ('/') }}"><i class="fa-solid fa-chevron-left fa-xl"></i></a>
      
 </div>
      
  @else
  <div class="col">         
          <a href="{{ route('applications.create') }}" class="btn btn-warning mb-2">Sök jobb</a>

         <ul class="list-group list-group-numbered">
           <table class="table table-condensed table-hover">
             <thead >
               <tr class="bg-primary text-white">
                 <th class="text-white" scope="col">Sökande</th>
                 <th class="text-white" scope="col">E-post</th>
                 <th class="text-white" scope="col">Telefon</th>
                 <th class="text-white" scope="col">CV</th>
                 <th class="text-white" scope="col">beskrivning</th>
                 <th class="text-white" scope="col">JobbTyp</th>
                 <th class="text-white" scope="col">Ort</th>
                 <th class="text-white" scope="col">Ansökningsdatum</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($applications as $application)
                <tr>
                  <td>{{ $application->firstName }} {{ $application->lastName }}</td>
                  <td>{{ $application->email }}</td>
                  <td>{{ $application->telefon }}</td>
                  <td>{{ $application->cv }} </td>
                  <td><a href="{{ route('applications.show',$application) }}">Gå igenom ansökan</a></td>
                  <td>{{ $application->jobType }}</td>
                  <td>{{ $application->location }}</td>
                  <td>{{ $application->created_at }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('services.index') }}"><i class="fa-solid fa-chevron-left fa-xl"></i></a>
         </ul>
   </div>
      
  @endif
</div>
@endsection