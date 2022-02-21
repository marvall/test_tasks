@extends('layouts.app')

@section('content')
    <h1>Search</h1>

    <form class="searh_form" method="POST" action="{{route('search')}}">
        @csrf
        <label class="search_item" for="domain">Domain</label>
        <input class="search_item" id="domain" name="domain" type="text" >
        <button class="search_button" type="submit" name="submit">Add to Search</button>     
    </form>
@endsection
