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


    public function ads(){
      return view('app.ads');
    }


    public function blog(){
      return view('app.blog');
    }



    public function singleBlog(){
      return view('app.blog-single');
    }



    public function singleAds(){
      return view('app.ads-single');
    }
}
