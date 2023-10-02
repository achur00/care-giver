<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Page;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about=About::all()->first();
        $aboutPage=Page::where('name','=','About')->first();
        $homePage=Page::where('name','=','Home')->first();
        // dd($about);
        return view('pages.about', compact('about','aboutPage','homePage'));
    }
}
