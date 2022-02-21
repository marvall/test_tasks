@extends('layouts.app')

@section('content')
    <h1>Result</h1>
    <div class="result_wrapper">
        @foreach($domains as $domain)
            <div class="result_row">
                <div class="result_item">{{$domain['domain']}}</div>
                <div class="result_item">{{$domain['host']}}</div>
            </div>
            <hr>
        @endforeach
    <div>
@endsection
