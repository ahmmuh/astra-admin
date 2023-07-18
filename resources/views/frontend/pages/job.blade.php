@extends('/frontend/layouts.app')

@section('content')
<style>
    .form-control, .form-select{
        border-radius: 2rem;
    }
</style>
<div class="container w-75 ">
    @if(session()->has('message-success'))
    <div class="alert alert-success mt-3">
        {{ session()->get('message-success') }}
    </div>
@endif
    <div class="row">
        <div class="col-lg-6 mb-3">
            <h3>Skicka din ansökan redan idag!</h3>
            <p>
              Vi på Astrastäd söker alltid duktiga lokalvårdare till vårt team.
              
  
              
            </p>
        </div>
     
          
          
        <div class="col-lg-6">
        <form  method="POST" action="job">
           
            @csrf
                <div class="mb-3 form-group d-flex flex-column">
                    <input type="text" class="form-control mb-3" aria-describedby="textHelp"
                    placeholder="Förnamn" name="firstname">     
                    @if ($errors->first('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                    @endif                           
                  </div>
                  <div class="mb-3 form-group d-flex flex-column">
                    <input type="text" name="lastname" class="form-control mb-3" aria-describedby="textHelp" placeholder="Efternamn">
                    @if ($errors->first('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    @endif
                  </div>
                  <div class="mb-3 form-group d-flex flex-column">
                    <input type="email" name="email" class="form-control mb-3""text" aria-describedby="textHelp" placeholder="E-postadress">
                    @if ($errors->first('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                <div class="mb-3 form-group d-flex flex-column">
                    <input type="text" name="adress" class="form-control mb-3""text" aria-describedby="textHelp" placeholder="Adress">
                    @if ($errors->first('adress'))
                    <span class="text-danger">{{ $errors->first('adress') }}</span>
                    @endif
                  </div>
                  <div class="mb-3 form-group d-flex flex-column">
                    <input type="number" name="telefon" class="form-control mb-3" aria-describedby="textHelp" placeholder="Telefon">
                    @if ($errors->first('telefon'))
                    <span class="text-danger">{{ $errors->first('telefon') }}</span>
                    @endif
                   
                  </div>
    
    
                  <div class="mb-3 form-group d-flex flex-column">
                    <input type="file" name="cv" class="form-control mb-3""cv" aria-describedby="textHelp"
                    >
                    @if ($errors->first('cv'))
                    <span class="text-danger">{{ $errors->first('cv') }}</span>
                    @endif
                  </div>
    
                  <button  class="btn btn-block blue-background border rounded-pill" style="width: 100%;" type="submit">Skicka in</button>
                </div>
                
            </form>
        </div>
    </div>
    
   
</div>
    
@endsection