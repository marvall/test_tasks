<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\FindDomain;

class SearchController extends Controller
{
    public function SearchDomain(Request $request){
        if($request['domain']){
            FindDomain::dispatch(Auth::user()->id, $request['domain']);
        }
        return redirect()->to(route('search'));
    }
}
