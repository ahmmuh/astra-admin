@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @if(session()->has('message-success'))
        <div class="alert alert-success">
            {{ session()->get('message-success') }}
        </div>
    @endif
        <div class="col-lg-5 col-md-12">
            <h3>Beställning av städtjänst(er)</h3>
            <p>
                Här kan ni beställa olika städtjänster såsom kontorsstädning, butikstädning, trappstädning, golvvård o.s.v.
                Dessa städtjänster kan ni också beställa via mej eller telefon.
                Frågor och funderingar? <a href="{{url('/pages.contact')}}" >Kontakta oss</a>


            </p>
        </div>

        
            <div class="col-lg-7">
                <form method="POST" action="order">
                    @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="textHelp"
                    placeholder="Förnamn/kontaktperson">
                    @if ($errors->first('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="textHelp" placeholder="Efternamn">
                    @if ($errors->first('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
    
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="textHelp" placeholder="E-post">
                    @if ($errors->first('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
    
                <div class="mb-3">
    
                    <input type="number" class="form-control" id="telefon" name="telefon" aria-describedby="textHelp" placeholder="Telefon">
                    @if ($errors->first('telefon'))
                    <span class="text-danger">{{ $errors->first('telefon') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="adress" name="adress" aria-describedby="textHelp"
                    placeholder="Adress ">
                    @if ($errors->first('adress'))
                    <span class="text-danger">{{ $errors->first('adress') }}</span>
                    @endif
                </div>
    
                <div class="mb-3">
                    <input type="number" class="form-control" id="squr" name="sqr"aria-describedby="textHelp"
                    placeholder="Hur många kvadratmeter gäller det? t.ex 300m² " >
                    @if ($errors->first('sqr'))
                    <span class="text-danger">{{ $errors->first('sqr') }}</span>
                    @endif
                </div>
                <select class="form-select mb-3" aria-label="Default select example" name="service">
                    @if ($errors->first('service'))
                    <span class="text-danger">{{ $errors->first('service') }}</span>
                    @endif
                    <option selected>Välj tjänst</option>
                    <option>Kontorstädning</option>
                    <option>Butikstädning</option>
                    <option value="6">Golvvård</option>
                    <option value="9">Trappstädning</option>
                    <option value="4">Byggstädning</option>
                    <option value="3">Lagerstädning</option>
                    <option value="8">Flyttstädning</option>
                    <option value="7">Hemstädning</option>
                    <option value="10">Fruktkorg</option>
                    
                </select>
    
                <div class="mb-3">
                    <input type="date" class="form-control" id="startDate" name="startDate" aria-describedby="textHelp"
                    placeholder="Start datum t.ex 2022-08-25 ">
                    @if ($errors->first('startDate'))
                    <span class="text-danger">{{ $errors->first('startDate') }}</span>
                    @endif
                </div>
    
                <div class="mb-3">
                    <input type="date" class="form-control" id="endDate" name="endDate" aria-describedby="textHelp"
                    placeholder="Slut datum t.ex 2022-09-25 ">
                    @if ($errors->first('endDate'))
                    <span class="text-danger">{{ $errors->first('endDate') }}</span>
                    @endif
                </div>
    
              
    
                <div class="mb-3">
                    <textarea placeholder="Lite beskrivning om din beställning" class="form-control" id="beskrivning" name="beskrivning" rows="3"
                    >
                    </textarea>
                    @if ($errors->first('beskrivning'))
                    <span class="text-danger">{{ $errors->first('beskrivning') }}</span>
                    @endif
                </div>
                    <button  class="btn btn-block blue-background border rounded-pill" type="submit" style="width: 10rem">Beställ</button>
    
                </form>
            </div>
            
            
        </div>
   
</div>
    
@endsection