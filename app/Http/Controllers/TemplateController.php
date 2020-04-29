<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Setting;

class TemplateController extends Controller
{
    //


    public function index(){
        return view('index')->with('blog_name',Setting::first()->blog_name)
        ->with('categoris',Category::take(3)->get())
        ->with('first_post',Post::orderBy('created_at','desc')->first());
    }
}
