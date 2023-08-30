<style>
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Josefin+Sans:ital,wght@1,700&family=Roboto:ital@0;1&display=swap');
.service-section img{
  height:18rem;
  width:100%;
}

.item{
  padding-left:5px;
  padding-right:5px;
}
.item-card{
  transition:0.5s;
  cursor:pointer;
  padding: 1rem;

}
.item-card-title{  
  transition:1s;
  cursor:pointer;
}
.item-card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
  .text-muted{
    display: none;
  }

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}

</style>
  {{-- service section --}}
<div class="container mt-2 service-section">
  <div class="row">
    <h2>Se våra privattjänster</h2>
    @foreach ($private_services as $service)
        <div class="col-md-4 col-sm-6 item mb-2">
      <div class="card item-card card-block  h-100">
    <div class="card-body">
        <img src="{{ asset('/storage/images/' .$service->serviceImage)}}"  alt="Photo of sunset">
        <h4 class="card-title mt-3 mb-3">{{$service->title}}</h4>
        <p class="card-text">{{$service->bodyText}}</p>
        
    </div>
    <a  href="{{ route('privateservices.show', $service->id) }}" class="btn btn-lg btn-warning my-auto">Läs mer <i class="fas fa-chevron-right"></i></a>
  </div>
    </div>
    @endforeach
    {{ $private_services->links() }}
  </div>
  
</div>

    