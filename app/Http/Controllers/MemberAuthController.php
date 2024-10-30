<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class MemberAuthController extends Controller
{
    public  function showLoginForm()
    {
        return view('member.login');
    }

    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        if(Auth::guard('member')->attempt($credentials)){
            return redirect()->intended('/myPlants'); //redirección despues de autentificación
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }

}
