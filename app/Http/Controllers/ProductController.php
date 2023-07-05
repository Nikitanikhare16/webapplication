<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\User;

class ProductController extends Controller
{
    public function create(){
        $categories= Category::all();
        $brands= Brand::all();
        $colors= Color::all();
        $users= User::all();
    // dd($data);
        return view('admin.products.create',compact('categories','brands','colors','users'));
    }
    public function products_store( Request $request)
    {
        $validated = $request->validate([
            'title'=>'required',
            'description' =>'required',
            'category' =>'required',
            'image'=>'required'
        ]);

        $data=new Product();
        $data->title = $request->title;
        $data->description= $request->description;
        $data->category = $request->category;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $data->image = $filename;
        }
        $data->brand= $request->brand;
        $data->color= $request->color;
        $data->size= $request->size;
        $data->price= $request->price;
        $data->quantity= $request->quantity;
        $data->username= $request->username;

        $data->save();
        return redirect()->route('admin.products.index')->with('message','Data Inserted Successfully...!');
    }
    public function index(){
        $data=Product::all();

        return view('admin.products.index',compact('data'));
    }
    public function edit($id){
        $categories=Category::all();
        $data=Product::find($id);
        $brands= Brand::all();
        $colors= Color::all();
        $users= User::all();

        // dd($data);
        return view('admin.products.edit',compact('categories','data','brands','colors','users'));
    }
    public function update(Request $request ,$id)
    {
        $data = Product::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->category=$request->category;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->route('admin.products.index')->with('message','Data updated Successfully');
}
    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('admin.products.index')->with('message','Data deleted successfully');

    }
}
