<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        //query builder
        //$cat = DB::table('categories')->get();
        $cat = Category::paginate(4);
        return view('admin.category',compact('cat'));
       // return view('admin.category')->with(['cat' => $cat,'cate'=>$cate]);
    }

    public function create_category_page(){
        return view('admin.create_category');
    }

    public function save(Request $request){
        //model used - Eloquent -ORM
        //direct database - Query builder
       //return $request->name;
       // dd($request->all());
    // query builder
   /* DB::table('categories')->insert([
       'name' => $request->name,
       'created_at' => '2020-10-15 15:35:53'
    ]);*/

    $cat = new Category();
    $cat->name = $request->name;
    $cat->save();
    //return redirect()->back();
    return redirect()->to('admin/category');
    }

    public function delete($id)
    {
       //DB::table('categories')->where('id',$rrr)->delete();
        $category = Category::find($id);
        $category->delete();
       return redirect()->back();
    }

    public function update_page($id)
    {
        $category = Category::find($id);
        return view('admin.update_category',compact('category'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->to('admin/category');
    }
}
