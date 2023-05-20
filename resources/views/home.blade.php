@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Du är inloggad!') }}
                </div>
            </div>
            {{-- <a name="" id="" class="btn btn-secondary" href="{{route('/blogs.blog')}}" role="button">Button</a> --}}
        </div>
    </div>
</div>
@endsection