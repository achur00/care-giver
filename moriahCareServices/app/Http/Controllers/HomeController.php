<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\SubPage;
use App\Models\HomeContent;
use App\Models\Service;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


    $page=Page::all()->load(['SubPage']);
    $homeContents=HomeContent::all();
    // $services=Service::with(['SubPage'])->get();
    $services=Service::all();
    //  dd($services1);
   $subpage_homeCare=SubPage::where('id','=','1')->first();
   $subpage_specialistCare=SubPage::where('id','=','2')->first();
    
    return view('pages.home', compact('homeContents','services','subpage_homeCare','subpage_specialistCare'));
    }
}

