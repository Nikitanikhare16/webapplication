<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create(){
        $products=Product::all();
        $categories=Category::all();
        return view('admin.brand.create',compact('products','categories'));
    }
    public function store4(Request $request)
    {
   $brands=new Brand();
   $brands->name = $request->name;
   $brands->user_id= $request->user_id;
   $brands->product_id = $request->product_id;
   $brands->save();
    return redirect()->route('admin.brand.index')->with('message','Data Inserted Successfully...!');

    }
    public function index(){
        $brands=Brand::all();
        return view('admin.brand.index',compact('brands'));
    }
    public function edit($id){
        $products=Product::all();
        $categories=Category::all();
        $brands=Brand::find($id);
        return view('admin.brand.edit',compact('products','categories','brands'));

    }
    public function update(Request $request ,$id)
    {
        $brands = Brand::find($id);
        $brands->name = $request->name;
        $brands->user_id= $request->user_id;
        $brands->product_id = $request->product_id;
        $brands->save();
          return redirect()->route('admin.color.index')->with('message','Data updated Successfully');
}
public function delete($id)
{
    $brands = Brand::find($id);
    $brands->delete();
    return redirect()->route('admin.color.index')->with('message','Data deleted successfully');
}
}
