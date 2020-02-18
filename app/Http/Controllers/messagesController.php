<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagesController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([

        'name'=> 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required|min:3',

        ]); 

        return 'Datos Validados';

    }
}
