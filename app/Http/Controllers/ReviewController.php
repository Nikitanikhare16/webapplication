<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $data=Review::all();
        return view('admin.review.index',compact('data'))->with('message','data inserted successfully');
    }
}
