<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Making a controller to handle views
class PagesController extends Controller
{
    public function index(){
        //passing a variyable 
        $title = 'Welcome to laravel!';
       // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function append(){
        return view('posts.create');
    }
}
