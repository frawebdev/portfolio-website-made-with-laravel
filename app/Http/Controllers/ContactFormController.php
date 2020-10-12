<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function store(){

        $data = request()->validate([

            'email' => 'required|email',
            'name'  => 'required',
            'msg'   => 'required'

        ]);

        Mail::to('test@test.it')->send(new ContactFormMail($data));

        return redirect('/');

    }
}
