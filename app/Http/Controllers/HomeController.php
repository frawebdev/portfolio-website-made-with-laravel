<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

use App\Mail\ContactsMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [

            'tags' => Tag::all()
        
        ]);

    }

    public function sendMail(){

        Mail::to('email@email.com')
        ->send(new ContactsMail());

    }
}
