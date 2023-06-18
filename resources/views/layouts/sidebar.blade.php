@if (Auth::user())
<div class="list-group">
<li class="list-group-item list-group-item-action active">Olika tjänster</li>
<a href="{{ route('clients.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-envelope fa-lg"></i> Meddelande</a>
<a href="{{ route('blogs.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-newspaper fa-lg"></i>  Nyhet</a>
<a href="{{ route('jobs.index') }}" class="list-group-item list-group-item-action"><i class="fa-sharp fa-solid fa-laptop-file fa-lg"></i> Lediga jobb</a>
<a href="{{ route('services.index') }}" class="list-group-item list-group-item-action"> <i class="fa-solid fa-person-digging fa-lg"></i> A Tjänster</a>
<a href="{{ route('applications.index') }}" class="list-group-item list-group-item-action"><i class="fa-solid fa-file-lines fa-lg"></i>  Jobb ansökningar</a>
</div>
@endif