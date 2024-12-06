<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories(){
        $categories = categories::orderBy('updated_at')->paginate(3);
        return view('Categories',compact('categories'));
    }
    //Save
    public function categories_save(){
        return view('categories-save');
    }
    //Save Submit
    public function categories_save_submit(Request $request){
        //Save
        $newcategory = categories::create([
            'cat_name'=>$request->txt_catname,
            'ordered_by'=>$request->txt_orderedby
        ]);
        //Create Session
        $request->session()->put('save',$request->txt_catname);
        //Return
        return redirect()->route('categories');
    }
    public function category_view(Request $request,string $name, int $id ){
        $category = categories::where("cat_id",$id)->get();
        return view("Categories_View",compact("category"))->with("name", $name)->with("id", $id);
    }
    public function category_edit(Request $request,string $name, int $id ){
        $category = categories::where("cat_id",$id)->get();
        return view("Category_Edit",compact("category"))->with("name", $name)->with("id", $id);
    }

    public function category_edit_post(Request $request,string $name, int $id ){
        $category = categories::where("cat_id",$id)->update([
            "cat_name"=>($request->txt_catname),
            "ordered_by"=>($request->txt_orderedby)
        ]);
        $request->session()->put("update",$request->txt_catname);
        return redirect()->route("categories")->with("name", $name)->with("id", $id);
    }
    public function category_delete(Request $request,string $name, int $id ){
        $category = categories::where("cat_id",$id)->get();
        return view("Category_Delete",compact("category"))->with("name", $name)->with("id", $id);
    }
    public function category_delete_post(Request $request,string $name, int $id ){
        $category = categories::where("cat_id",$id)->delete();
        $request->session()->put("delete",$request->txt_catname);
        return redirect()->route("categories")->with("name", $name)->with("id", $id);
    }
}
