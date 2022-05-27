<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMail extends Controller
{
    public function contact()
    {
        return view('frontend.contact-mail');
    }
}
