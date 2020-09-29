<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	return view('user.home');
    }
    public function about(){
    	return view('user.about');
    }
    public function contact(){
    	return view('user.contact');
    }
    public function blog(){
    	return view('user.blog');
    }

    // admin
    public function admin(){
        return view('admin.dashboard');
    }
    public function example(){
        return view('admin.example');
    }
}
