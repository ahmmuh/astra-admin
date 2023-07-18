@extends('layouts.app')
@section('content')
    
@foreach ($contacts as $contact)
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->firstname}}</td>
                        <td>{{$contact->lastname}}</td>
                        <td>{{$contact->telefon}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                       
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach

@endsection