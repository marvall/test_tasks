@extends('layouts.app')

@section('content')
    <h1>Welcome,
        @if(Auth::check()) 
            {{Auth::user()->name}}.
        @else
            Guest.
        @endif
    </h1>
@endsection
