<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class messageController extends Controller
{
    public function store()
    {
        $msg = request()->validate([

        'name'=> 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required|min:3',

        ]); 

        


    Mail::to('davidguerrerop@gmail.com')->queue(new MessageReceived($msg));

    return 'Mensaje enviado';

    }
}
