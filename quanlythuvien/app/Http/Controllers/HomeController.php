<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user_layout');
    }
    public function ourteam(){
        return view('user.team');
    }
    public function contactus(){
        return view('user.contact');
    }
}
