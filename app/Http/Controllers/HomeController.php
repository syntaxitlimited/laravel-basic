<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home()
    {
        return view('admin.dashboard');
    }

    
    public function contact()
    {
        return view('contact');
    }
    
    
    public function post_details()
    {
        return view('post-details');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function about()
    {
        return view('about');
    }

}
