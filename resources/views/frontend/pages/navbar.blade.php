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
  main{
   margin-top: 2rem;
   padding-top: 4rem;
  }
  .dropdown-menu{
    width: 60vh !important;
    margin-top: 1.8rem !important;
  }
.menuActive,.serviceMenuActive, .privateMenuActive{
  border-bottom: .3rem solid orange;
  color: white !important;
}

</style>

<nav class="navbar navbar-expand-lg h-auto">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img style="height: 70px; margin-left: 0rem;" src="{{url('../images/astra-logos/logo3.png')}}" alt="Logo"></a>
      <button class="navbar-toggler bg-light"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="{{ '/' == request()->path() ? 'nav-link menuActive' : 'nav-link'}}" href="{{ url('/') }}">Hem</a></li>

          <li class="{{ Request::is('privateservices/*') ? 'nav-item dropdown menuActive' : 'nav-item dropdown' }}">
            <a
            href="#"
            class="nav-link dropdown-toggle"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Privattjänster
            </a>
            <ul class="dropdown-menu">
              @foreach ($private_menu_services as $service)
              <li><a  class="dropdown-item" href="{{ route('privateservices.show',$service->id) }}">{{$service->menyNamn}}</a></li>
              @endforeach
            </ul>
            
          </li>
          <li class="{{ Request::is('services/*') ? 'nav-item dropdown menuActive' : 'nav-item dropdown' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Företagstjänster
            </a>
            <ul class="dropdown-menu" >
              @foreach ($menu_services as $service)
              <li ><a  class="dropdown-item" 
                href="{{ route('services.show', $service->id) }}" >{{$service->menyNamn}}</a></li>
              @endforeach
            </ul>
          </li>
  
        <li class="nav-item">
            <a class="{{ 'jobs' == request()->path() ? 'nav-link menuActive' : 'nav-link'}}" href="{{ url('jobs') }}">Jobba hos oss</a>
          </li>

          <li class="nav-item">
            <a class="{{ 'abouts' == request()->path() ? 'nav-link menuActive' : 'nav-link'}}" href="{{ url('abouts') }}">Om AstraStäd</a>
          </li>

          <li class="nav-item">
            <a class="{{ 'contacts' == request()->path() ? 'nav-link menuActive' : 'nav-link'}}" href="{{ url('contacts') }}">Kontakta oss</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
