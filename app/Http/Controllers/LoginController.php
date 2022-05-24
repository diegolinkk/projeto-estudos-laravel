<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/index');
    }

    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email','password'))){
            return redirect()->back()->withErrors('Usuário e/ou senha incorretos');
        };

        return redirect('/');

    }

    public function cadastro_form()
    {
        return view('login/cadastro');
    }

    public function cadastro(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        Auth::login($user);

        return redirect("/");

    }

}
