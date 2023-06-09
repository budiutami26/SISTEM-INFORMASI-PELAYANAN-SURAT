<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function status(){
        return view('daftar-status');
    }
}
