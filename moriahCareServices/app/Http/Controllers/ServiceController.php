<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SubPage;

class ServiceController extends Controller
{
    // for all services
    public function index()
    {   $serviceAndSubPages=SubPage::with(['Service'])->get();
        return view('pages.services',compact('serviceAndSubPages'));
    }




   public function homeCare($id){
        // $serviceProduct=Service::where('id','=',$id)->first();
        if($id=1){
        $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();


        // dd( $serviceAndSubPages);

         return view('pages.services',compact('serviceAndSubPages'));
        }else{
            // reseting id to 1 even if it was changed in url
            $id=1;
            $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
            return view('pages.services',compact('serviceAndSubPages'));
        }
    }

    public function specialistCare($id){
        // $serviceProduct=Service::where('id','=',$id)->first();
        if($id=2){
        $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();


        // dd( $serviceAndSubPages);

         return view('pages.services',compact('serviceAndSubPages'));
        }else{
            // reseting id to 2 even if it was changed in url
            $id=2;
            $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
            return view('pages.services',compact('serviceAndSubPages'));
        }
    }





    public function show($id){
        $serviceProduct=Service::where('id','=',$id)->first();
          // dd( $serviceAndSubPage);

         return view('pages.service-template',compact('serviceProduct'));
    }
}
