<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard');
        }else{
            return view('index');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'nim' => $request->input('nim'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('/dashboard');
        }else{
            Session::flash('error', 'nim atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }

    
}