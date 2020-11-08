<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $blog = Post::paginate(5);
        return view('admin.blog.blog',compact('blog'));
    }
    public function create(){
        $cat = Category::all();
        return view('admin.blog.create',compact('cat'));
    }

    public function save(Request $request){
    //return str_slug($request->title).'_'.md5(date('Y-m-d H:i:s'));
    //dd($request->all());
    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->category_id = $request->category_id;

    //img upload
    if($request->hasFile('imageName')){
        $extension = $request->imageName->extension();
        $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
        $fileName = $fileName.'.'.$extension;

        $post->imageName = $fileName;

        $request->imageName->move('public/uploads/blog',$fileName);

    }

    $post->save();
    //return redirect()->back();
    return redirect()->to('admin/all-blog');
    }

    public function update_page($id){
        $blog = Post::find($id);
        $cat = Category::all();
        return view('admin.blog.update',compact('blog','cat'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        $path = public_path('uploads/blog/'.$post->imageName);
        if(file_exists($path)){
            unlink($path);
        }
        //img upload
    if($request->hasFile('imageName')){
        $extension = $request->imageName->extension();
        $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
        $fileName = $fileName.'.'.$extension;

        $post->imageName = $fileName;

        $request->imageName->move('public/uploads/blog',$fileName);

    }

        $post->save();
        return redirect()->to('admin/all-blog');
        
    }

    public function delete($id){
        $post = Post::find($id);
        $path = public_path('uploads/blog/'.$post->imageName);
        if(file_exists($path)){
            unlink($path);
        }
        $post->delete();
        return back();
    }
    
}
