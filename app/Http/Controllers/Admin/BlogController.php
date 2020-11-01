<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.blog');
    }
    public function create(){
        $cat = Category::all();
        return view('admin.blog.create',compact('cat'));
    }

    public function save(Request $request){
    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->category_id = $request->category_id;
    $post->save();
    //return redirect()->back();
    return redirect()->to('admin/all-blog');
    }
}
