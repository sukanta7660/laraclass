<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	return view('welcome');
    }
    public function contact(){
    	return view('exam');
    }
    public function about(){
    	return view('user.about');
    }
}
