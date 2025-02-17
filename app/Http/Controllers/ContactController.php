<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use function PHPUnit\Framework\returnValue;

class ContactController extends Controller
{
    function home(){
        return view('home');
    }
    function contact(){
        return view('contact');
    }
    function tambahContact(Request $request){
        $contact = New Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->pesan = $request->pesan;
        $contact->save();
        return redirect()->route('home');
    }


    function homeC(){
        return view('homeC');
    }
    function contactC(){
        return view('contactC');
    }
    function tambahContactC(Request $request){
        $contact = New Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->pesan = $request->pesan;
        $contact->save();
        return redirect()->route('homeC');
    }
}
