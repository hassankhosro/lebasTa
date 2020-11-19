<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('app.index');
    }


    public function best(){
      return view('app.best');
    }


    public function advertisements(){
      return view('app.advertisements');
    }


    public function blog(){
      return view('app.blog');
    }



    public function singleBlog(){
      return view('app.blog-single');
    }



    public function advertisement(){
      return view('app.advertisements-single');
    }
}
