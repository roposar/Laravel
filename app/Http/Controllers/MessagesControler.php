<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
class MessagesControler extends Controller
{
    public function store()
    {
        $message= request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);

        Mail::to('roposar@hotmail.com')->queue(new MessageReceived($message));

        
        return 'Mensaje Enviado';
    }
}
