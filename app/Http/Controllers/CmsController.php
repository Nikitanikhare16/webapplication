<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cms;
class CmsController extends Controller
{
    public function create(){
        return view('admin.cms.create');
    }

    public function store2( Request $request)
    {
        $cms=new Cms();
        $cms->title = $request->title;
        $cms->description= $request->description;
        if($files=$request->File('images')){
         foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move('uploads/car/',$name);
            $images[]=$name;
         }
        }
        $cms->images = implode("|",$images);
        $cms->status= $request->status;
        $cms->save();
        return redirect()->route('admin.cms.index')->with('message','Data Inserted Successfully...!');
    }
    public function index(){
        $cms=Cms::all();
        return view('admin.cms.index',compact('cms'));
    }
    public function edit($id){
        $cms=Cms::find($id);
        return view('admin.cms.edit',compact('cms'));
    }
    public function update(Request $request ,$id)
    {
        $cms = Cms::find($id);
        $cms->title = $request->title;
        $cms->description= $request->description;
        if($files=$request->File('images')){
         foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move('uploads/car/',$name);
            $images[]=$name;
         }
        }
        $cms->images = implode("|",$images);
        $cms->status= $request->status;
        $cms->save();
        return redirect()->route('admin.cms.index')->with('message','Data updated Successfully');
}
public function delete($id)
{
    $cms= Cms::find($id);
    $cms->delete();
    return redirect()->route('admin.cms.index')->with('message','Data deleted successfully');

}


}
