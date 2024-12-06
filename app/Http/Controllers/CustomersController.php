<?php

namespace App\Http\Controllers;
use App\Models\CustomersModel;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers = CustomersModel::orderBy("updated_at")->paginate(4);
        return view("Customers",compact("customers"));
    }
    public function customer_create(Request $request){
        return view("Customers_Create");
    }
    public function customer_create_post(Request $request){
        $customer = CustomersModel::create([
            "cus_name"=> $request->txt_cusname,
            "gender"=> $request->txt_gender,
            "telegram"=> $request->txt_telegram,
            "dob"=> $request->txt_dob
        ]);
        $request->session()->put("create",$request->txt_cusname);
        return redirect()->route("customer_create");
    }

    public function customer_view(Request $request,string $name, int $id ){
        $customer = CustomersModel::where("cus_id",$id)->get();
        return view("Customer_View",compact("customer"))->with("name", $name)->with("id", $id);
    }

    public function customer_delete(Request $request,string $name, int $id ){
        $customer = CustomersModel::where("cus_id",$id)->get();
        return view("Customer_Delete",compact("customer"))->with("name", $name)->with("id", $id);
    }

    public function customer_delete_post(Request $request,string $name, int $id ){
        $customer = CustomersModel::where("cus_id",$id)->delete();
        $request->session()->put("delete",$request->txt_cusname);
        return redirect()->route("customers")->with("name", $name)->with("id", $id);
    }

    public function customer_edit(Request $request,string $name, int $id ){
        $customer = CustomersModel::where("cus_id",$id)->get();
        return view("Customer_Edit",compact("customer"))->with("name", $name)->with("id", $id);
    }

    public function customer_edit_post(Request $request,string $name, int $id ){
        $customer = CustomersModel::where("cus_id",$id)->update([
            "cus_name"=>($request->txt_cusname),
            "gender"=>($request->txt_gender),
            "telegram"=>($request->txt_telegram),
            "dob"=>($request->txt_dob)
        ]);
        $request->session()->put("update",$request->txt_cusname);
        return redirect()->route("customers")->with("name", $name)->with("id", $id);
    }
}
