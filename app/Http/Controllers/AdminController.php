<?php

namespace App\Http\Controllers;

Use App\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //This constructor applies middleware to all methods in this AdminController class
    public function __construct(){
        //$this->middleware(['auth' , 'admin'] , ['only' => ['blogs']]);
        $this->middleware(['auth', 'admin'] , ['only' => ['blogs']]);
        $this->middleware('auth');  //this line gives access to all user levels
    }

    public function index() {
        return view('admin.dashboard');
    }

    public function blogs() {
        $publishedBlogs = Blog::where('status' , 1)->latest()->get();
        $draftBlogs = Blog::where('status' , 0)->latest()->get();

        return view('admin.blogs' , compact('publishedBlogs' , 'draftBlogs') );
    }

}
