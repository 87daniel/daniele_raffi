<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function contatti(){
        return view('contatti');
    }

    public function contattiSubmit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $messaggio = $request->messaggio;

        try {
            Mail::to('info@hack.com')->send(new ContactMail($name, $email, $messaggio));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'richiesta fallita');
        }
        return redirect()->route('welcome')->with('success', 'richiesta effetuata con successo!');
    }
}
