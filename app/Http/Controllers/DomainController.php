<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Domains;

class DomainController extends Controller
{
    public function getDomains(){
       $domains = Domains::where('user_id', Auth::user()->id)->get();

       return view('result', ['domains' => $domains]);
    }
}
