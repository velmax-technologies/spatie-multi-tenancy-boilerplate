<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function landing_page(){
        return view('landing');
    }

    public function login_page(){
        return view('login');
    }

    public function register_page(){
        return view('register');
    }

    public function home_page(){
        return view('admin/pages/home');
    }

    public function dashbord_page(){
        return view('admin/pages/dashoard');
    }
}
