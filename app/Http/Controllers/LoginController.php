<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data)) {
            // if(Auth::user()->role === 'admin') {
            //     return
            // }
            return redirect('/dashboard');
        }else{
            // Session::flash('error', 'username atau Password Salah');
            return back()->with('error', 'username atau Password Salah')->withInput();
        }

    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }


}
