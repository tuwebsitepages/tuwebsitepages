<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){

      

    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',

        ]);

        $correo = new TestMail($request->all());

        Mail::to('eljirafo97@gmail.com')->send($correo);
        return redirect()->route('contactanos.welcome')->with('info', 'Te responderemos cuanto antes');
    }
}
