<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function index(){
        $products = ProductModel::orderBy('pro_id','asc')->get();
        $products = ProductModel::orderBy('updated_at')->paginate(3);
        return view('products',compact('products'));

    }
    public function products_save(){
        return view('products_save');
        
    }
    public function products_save_submit(Request $request){
        $newproduct = ProductModel::create([
            'pro_name'=>$request->txt_proname,
            'price'=>$request->txt_price
        ]);
        $request->session()->put('save',$request->txt_proname);
        return redirect()->route('products');
    }
    public function products_view(Request $request,string $name, int $id ){
        $products = ProductModel::where("pro_id",$id)->get();
        return view("Products_View",compact("products"))->with("name", $name)->with("id", $id);
    }
    public function products_edit(Request $request,string $name, int $id ){
        $products = ProductModel::where("pro_id",$id)->get();
        return view("Products_Edit",compact("products"))->with("name", $name)->with("id", $id);
    }

    public function products_edit_post(Request $request,string $name, int $id ){
        $products = ProductModel::where("pro_id",$id)->update([
            "pro_name"=>($request->txt_proname),
            "price"=>($request->txt_price)
        ]);
        $request->session()->put("update",$request->txt_proname);
        return redirect()->route("products")->with("name", $name)->with("id", $id);
    }
    public function products_delete(Request $request,string $name, int $id ){
        $products = ProductModel::where("pro_id",$id)->get();
        return view("Products_Delete",compact("products"))->with("name", $name)->with("id", $id);
    }
    public function products_delete_post(Request $request,string $name, int $id ){
        $products = ProductModel::where("pro_id",$id)->delete();
        $request->session()->put("delete",$request->txt_proname);
        return redirect()->route("products")->with("name", $name)->with("id", $id);
    }
}
