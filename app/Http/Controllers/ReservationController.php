<?php

namespace App\Http\Controllers;

use App\Models\ReseervationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function view()
    {
        return view('reservation');
    }

    public function post()
    {
        request()->validate([
            'name' => 'max:255',
            'email' => 'max:255|email',
            ]);

        $reservationForm = new ReservationForm(request()->all());
        $reservationForm->save();

        Mail::to('fraaiz130@gmail.com')->send(new \App\Mail\ContactForm($reservationForm));


        return redirect()->route('reservation');
    }
}
