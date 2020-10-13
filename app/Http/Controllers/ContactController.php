<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function view()
    {
        return view('contact');
    }

    public function post()
    {
        request()->validate([
            'name' => 'max:255',
            'email' => 'max:255|email',
            'phone_number' => 'max:16',
        ]);

        $contactForm = new ContactForm(request()->all());
        $contactForm->save();

        Mail::to('fraaiz130@gmail.com')->send(new \App\Mail\ContactForm($contactForm));


        return redirect()->route('contact');
    }
}
