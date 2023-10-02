<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SubPage;
use App\Models\Page;

class ServiceController extends Controller
{
    // for all services
    public function index()
    {   
        $serviceAndSubPages=SubPage::with(['Service'])->get();
        $homePage=Page::where('name','=','Home')->first();
        $servicePage=Page::where('name','=','Services')->first();
        return view('pages.services',compact('serviceAndSubPages','homePage','servicePage'));
    }




   public function homeCare($id){
        // $serviceProduct=Service::where('id','=',$id)->first();
        if($id=1){
        $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
         $homePage=Page::where('name','=','Home')->first();
        $servicePage=Page::where('name','=','Services')->first();
        


        // dd( $serviceAndSubPages);

         return view('pages.services',compact('serviceAndSubPages','homePage','servicePage'));
        }else{
            // reseting id to 1 even if it was changed in url
            $id=1;
            $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
            $homePage=Page::where('name','=','Home')->first();
        $servicePage=Page::where('name','=','Services')->first();
            return view('pages.services',compact('serviceAndSubPages','homePage','$servicePage' ));
        }
    }

    public function specialistCare($id){
        // $serviceProduct=Service::where('id','=',$id)->first();
        if($id=2){
        $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
        $homePage=Page::where('name','=','Home')->first();
        $servicePage=Page::where('name','=','Services')->first();


        // dd( $serviceAndSubPages);

         return view('pages.services',compact('serviceAndSubPages','homePage','servicePage'));
        }else{
            // reseting id to 2 even if it was changed in url
            $id=2;
            $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
            $homePage=Page::where('name','=','Home')->first();
            $servicePage=Page::where('name','=','Services')->first();
            return view('pages.services',compact('serviceAndSubPages','homePage','servicePage'));
        }
    }





    public function show($id){
        $allService=Service::inRandomOrder()->take(3)->get();
        $serviceProduct=Service::where('id','=',$id)->first();
        //   dd( $allService);

         return view('pages.service-template',compact('serviceProduct','allService'));
    }
}
