<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Page;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $homePage=Page::where('name','=','Home')->first();
        $contactPage=Page::where('name','=','Contact')->first();
        return view('pages.contact',compact('homePage','contactPage'));
    }

    public function store(Request $request){
        $request->validate([
            'firstName'=>'required|min:3',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required'
        ]);

$message= new Message;
$message->first_name=$request->input('firstName');
$message->last_name=$request->input('lastName');
$message->email=$request->input('email');
$message->subject=$request->input('subject');
$message->content=$request->input('content'); 

$saved=$message->save();
if($saved){
    return back()->with('msgSuccess','your message was sent successfully');
}else{
     return back()->with('msgError','your message was not sent please try again ');
}
// $saved?back()->with('msgSuccess','your message was sent successfully'): back()->with('msgSuccess','your message was sent successfully');

    }
}
