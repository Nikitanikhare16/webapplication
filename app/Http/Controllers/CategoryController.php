<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }
    public function store( Request $request)
    {
        $categories=new Category();
        $categories->name = $request->name;
        $categories->status= $request->status;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $categories->image = $filename;
        }
        $categories->save();
        return redirect()->route('admin.category.index')->with('message','Data Inserted Successfully...!');
    }
    public function index(){
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }
    public function edit($id){
        $categories=Category::find($id);
        return view('admin.category.edit',compact('categories'));
    }
    public function update(Request $request ,$id)
    {
        $categories = Category::find($id);
        $categories->name=$request->name;
        $categories->status=$request->status;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $categories->image = $filename;
        }
        $categories->save();
        return redirect()->route('admin.category.index')->with('message','Data updated Successfully');
}
    public function delete($id)
    {
        $categories= Category::find($id);
        $categories->delete();
        return redirect()->route('admin.category.index')->with('message','Data deleted successfully');

    }


}
