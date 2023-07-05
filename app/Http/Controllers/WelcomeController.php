<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class WelcomeController extends Controller
{

    public function welcome(){
        $data=Product::all();
        $orders=Order::all();
        $categories=Category::all();
        return view('welcome',compact('data','categories','orders'));
    }

    public function about(){
        return view('welcome.about');
    }

    public function home(){

        $data=Product::all();
        $orders=Order::all();
        $categories=Category::all();
        return view('welcome.home',compact('data','categories','orders'));
    }
    public function contact(){
        return view('welcome.contact');
    }
    public function store5(Request $request)
    {
    $data=new Contact();
    $data->fname = $request->fname;
    $data->lname = $request->lname;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;
    $data->save();
    return redirect()->route('welcome.index')->with('message','Data Inserted Successfully...!');

    }
    public function index2(){
        $data=Contact::all();
        return view('welcome.index',compact('data'))->with('message','data inserted successfully');
    }
    public function shop(){
        return view('welcome.shop');
    }

}
