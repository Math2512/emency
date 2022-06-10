<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $color = $request->color ? $request->color : 'white' ;
        return view('contact.index', ['color'=>$color]);
    }

    public function show()
    {
        $color = 'white';
        return view('contact.index', ['color'=>$color]);
    }

    public function send(ContactRequest $request)
    {
        $data = ['name' => $request->name, 'email' => $request->email, 'message' => $request->message];
        Mail::to('bonjour@emency.fr')->send(new ContactMail($data));

        return redirect()->back()->with('alert', 'Votre message a bien été envoyé. Nous reviendrons vers vous très vite !');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
