<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class IndexController extends Controller
{
     public function index(){
        //return DB::table('categories')->select('id','name')->orderBy('name','ASC')->get();
        $cat = Category::select('id','name')->orderBy('name','ASC')->get();
    	return view('user.home',compact('cat'));

    }
    public function about(){
        $cat = Category::select('id','name')->orderBy('name','ASC')->get();
    	return view('user.about',compact('cat'));
    }
    public function contact(){
        $cat = Category::select('id','name')->orderBy('name','ASC')->get();
    	return view('user.contact',compact('cat'));
    }
    public function blog(){
        $cat = Category::select('id','name')->orderBy('name','ASC')->get();
    	return view('user.blog',compact('cat'));
    }

}
