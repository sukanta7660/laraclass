<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   public function category(){
       $category = Post::with('category','user')->get();
       return $category;
   }
    public function index(){
        //query builder
        //$cat = DB::table('categories')->get();
        $cat = Category::paginate(4);
        return view('admin.category.category',compact('cat'));
       // return view('admin.category.category')->with(['cat' => $cat,'cate'=>$cate]);
    }

    public function create_category_page(){
        return view('admin.category.create');
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
    return redirect()->to('admin/all-category');
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
        return view('admin.category.update_category',compact('category'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->to('admin/all-category');
    }
}
