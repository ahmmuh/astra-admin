@if (Auth::user())
<div class="list-group">
<li class="list-group-item list-group-item-action active">Olika tjänster</li>
<a href="{{ route('startsida.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-home fa-lg"></i> Startsida innehåll</a>
<a href="{{ route('sending.index') }}" class="list-group-item list-group-item-action"><i class="fa-regular fa-envelope fa-lg"></i> Meddelande från kund(er)</a>
<a href="{{ route('blogs.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-newspaper fa-lg"></i>  Nyhet</a>
<a href="{{ route('jobs.index') }}" class="list-group-item list-group-item-action"><i class="fa-sharp fa-solid fa-laptop-file fa-lg"></i> Lediga jobb</a>
<a href="{{ route('services.index') }}" class="list-group-item list-group-item-action"> <i class="fa-solid fa-person-digging fa-lg"></i> Företagstjänster</a>
<a href="{{ route('privateservices.index') }}" class="list-group-item list-group-item-action"> <i class="fa-solid fa-person-dress fa-lg"></i> Privat tjänster</a>
<a href="{{ route('applications.index') }}" class="list-group-item list-group-item-action"><i class="fa-regular fa-envelope-open fa-lg"></i>  Jobb ansökningar</a>
<a href="{{ route('contacts.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-address-card fa-lg"></i> Våra kontaktuppgifter</a>
<a href="{{ route('abouts.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-clock-rotate-left fa-lg"></i> Om Astrastäd</a>
<a href="{{ route('logos.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-building fa-lg"></i> Logos</a>
</div>
@endif