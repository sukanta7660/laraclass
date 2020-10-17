<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Category;
class IndexController extends Controller
{
    public function index(){
        //return DB::table('categories')->select('id','name')->orderBy('name','ASC')->get();
        $cat = Category::select('id','name')->orderBy('name','ASC')->get();
    	return view('user.home',compact('cat'));
        
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
    public function category(){
        return view('admin.category');
    }

    public function create_category_page(){
        return view('admin.create_category');
    }

    public function save(Request $request){
       // dd($request->all());
       $category = new Category();
       $category->name = $request->name;
       $category->save();

    }
}
