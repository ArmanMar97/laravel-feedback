<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use http\Message;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(){
        \request()->validate([
            'name'=>['required','min:2','max:255'],
            'message'=>['required','min:10'],
            'email'=>['required','unique:feedback','min:5','max:255']
        ]);
        $feedback = new Feedback();
        $feedback->name = \request('name');
        $feedback->email = \request('email');
        $feedback->message = \request('message');
        $feedback->save();
        return redirect('/')->with('message','Your feedback has been sent successfully!');
    }
}
