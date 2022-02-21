<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function Login(Request $request){
        $validated = $request->only(['email', 'password']);

        if(Auth::check()){
            return redirect()->to(route('result'));
        }

        if(Auth::attempt($validated)){
            return redirect()->intended(route('result'));
        }

        return redirect()->to(route('user.login'))->withErrors([
            "message" => "Cann't logined"
        ]);
    }

    public function Sing_up(Request $request){
        if(Auth::check()){
            return redirect()->to(route('result'));
        }

        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required',
        ]);

        if(User::where('email', $validated['email'])->exists()){
            return redirect()->to(route('user.singup'))->withErrors([
                "message" => "User with this email already exists"
            ]);
        } 

        $user = User::create($validated);
        if($user){
            Auth::login($user);
            return redirect()->to(route('result'));
        }

        return redirect()->to(route('user.singup'))->withErrors([
            "message" => "Error with create user"
        ]);
    }

    public function Logout(){
        Auth::Logout();

        return redirect()->intended(route('index'));
    }
}
