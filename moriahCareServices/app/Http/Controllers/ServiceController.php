<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SubPage;

class ServiceController extends Controller
{
    public function index()
    {   $serviceAndSubPages=SubPage::with(['Service'])->get();
        return view('page.services',compact('serviceAndSubPages'));
    }




   public function index2($id){
        // $serviceProduct=Service::where('id','=',$id)->first();
        if($id=1){
        $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();


        // dd( $serviceAndSubPages);

         return view('page.services',compact('serviceAndSubPages'));
        }else{
            $id=1;
            $serviceAndSubPages=SubPage::with(['Service'])->where('id','=',$id)->get();
            return view('page.services',compact('serviceAndSubPages'));
        }
    }




    public function show($id){
        $serviceProduct=Service::where('id','=',$id)->first();
          // dd( $serviceAndSubPage);

         return view('page.service-template',compact('serviceProduct'));
    }
}
