<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;

class ColorController extends Controller
{
    public function create(){
        $products=Product::all();
        $categories=Category::all();
        return view('admin.color.create',compact('products','categories'));
    }
    public function store3(Request $request)
    {
    $colors=new Color();
    $colors->name = $request->name;
    $colors->user_id= $request->user_id;
    $colors->product_id = $request->product_id;
    $colors->save();
    return redirect()->route('admin.color.index')->with('message','Data Inserted Successfully...!');

    }
    public function index(){
        $colors=Color::all();
        return view('admin.color.index',compact('colors'));
    }
    public function edit($id){
        $products=Product::all();
        $categories=Category::all();
        $colors=Color::find($id);
        return view('admin.color.edit',compact('products','categories','colors'));

    }
    public function update(Request $request ,$id)
    {
        $colors = Color::find($id);
        $colors->name = $request->name;
        $colors->user_id= $request->user_id;
        $colors->product_id = $request->product_id;
        $colors->save();
          return redirect()->route('admin.color.index')->with('message','Data updated Successfully');
}
public function delete($id)
{
    $colors= Color::find($id);
    $colors->delete();
    return redirect()->route('admin.color.index')->with('message','Data deleted successfully');
}
}
