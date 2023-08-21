<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|min:4', 
        ]);

        $Newsletter=Newsletter::where('email', '=', $request->input('email'))->first();

        $newsletter= new Newsletter;

        $newsletter->email=$request->input('email');

        // $newsletter->save(); 
    //   echo $request->input('email');
// dd($Newsletter->email);
        if(empty($Newsletter->email )){
        $newsletter->save();
        return  back()->with('msgSuccess','Thank you for subscribing to our newsletter');
       }else
       {
        return back()->with('msgError','You have already subscribed to our newsletter');
       }
        
    }
}
