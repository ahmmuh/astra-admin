<style>
  .navbar-toggler{
  color: white !important;
  }
  .navbar{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1;
  }

  header{
    padding-top: 3rem;
  }
  main{
   margin-top: 2rem;
   padding-top: 4rem;
  }
  
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img style="height: 70px; margin-left: 0rem;" src="{{url('../images/astra-logos/logo3.png')}}" alt="Logo"></a>
      <button class="navbar-toggler bg-light"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Start</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Privat
            </a>
            <ul class="dropdown-menu">
              @foreach ($private_services as $service)
              
              <li><a class="dropdown-item" href="{{ route('privateservices.show',$service->id) }}">{{$service->title}}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tjänster
            </a>
            <ul class="dropdown-menu">
              
              @foreach ($services as $service)
              <li><a class="dropdown-item" href="{{ route('services.show', $service->id) }}" >{{$service->title}}</a></li>
              @endforeach
              {{-- <li><a class="dropdown-item" href="{{ url('frontend.pages.skol') }}">Skolstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.trapp') }}">Trappstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.butik') }}">Butikstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.bygg') }}">Byggstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.golv') }}">Golvvård</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.lager') }}">Lagerstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.frukt') }}">Fruktkorg</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.windows') }}">Fönsterputsning</a></li>
              <li><a class="dropdown-item" href="{{ url('frontend.pages.matta') }}">Mattservice</a></li> --}}

            </ul>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="{{ URL::route('jobs') }}">Jobba hos oss</a>
            {{-- <a href="{{ URL::route('register') }}" >Register 1</a> --}}
            {{-- <a href="#">Jobb</a> --}}

          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('abouts') }}">Om oss</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('contacts') }}">Kontakt</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('clientblogs') }}">Nyhet</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>