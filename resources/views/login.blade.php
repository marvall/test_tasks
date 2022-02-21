@extends('layouts.app')

@section('content')
<div class="auth_wrapper">
    <h2 class="auth_title">Login</h2>
    <form class="auth_form" method="POST" action="{{route('user.login')}}">
        @csrf
        <div class="auth_block">
            <label  class="auth__item" for="email">Email</label>
            <input  class="auth__item" id="email" name="email" type="text" >
            @error('email')
            <div class="auth__item error_message" >{{ $message }}</div>
            @enderror    
        </div>
        <div class="auth_block">
            <label  class="auth__item" for="password">Password</label>
            <input  class="auth__item" id="password" name="password" type="text" >
            @error('password')
            <div class="auth__item error_message" >{{ $message }}</div>
            @enderror    
        </div>
        <button class="auth_button" type="submit" name="submit">Login</button>
    </form>
</div>
@endsection
