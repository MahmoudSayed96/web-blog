<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $services = ["Web Design", "SEO", "Programming"];
        return view('pages.services',compact('services'));
    }
}
