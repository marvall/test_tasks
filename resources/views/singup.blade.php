@extends('layouts.app')

@section('content')
<div class="auth_wrapper">
    <h2 class="auth_title">Sing Up</h2>
    <form class="auth_form" method="POST" action="{{route('user.singup')}}">
        @csrf
        <div class="auth_block">
            <label class="auth__item" for="name">Username</label>
            <input class="auth__item" id="name" name="name" type="text" >
            @error('name')
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
        <div class="auth_block">
            <label  class="auth__item" for="email">Email</label>
            <input  class="auth__item" id="email" name="email" type="text" >
            @error('email')
            <div class="auth__item error_message" >{{ $message }}</div>
            @enderror    
        </div>
        <button class="auth_button" type="submit" name="submit">Sing Up</button>
    </form>
</div>
@endsection