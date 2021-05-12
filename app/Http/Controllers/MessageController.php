<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MessageReceived;
use Mail;

class MessageController extends Controller
{
    
    /**
     * Método que envía un email a la persona que se solicite
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'contenido'=>'required|min:15',

        ],[
            // 'name.required'=>__('I need your name'),
            // 'email.required'=>__('Email is mandatory'),
            // 'subject.required'=>__('Subject needed'),
            // 'contenido.required'=>__('How can we help you?'),
            
            //Kike lo cambio para usar las traducciones directamente.
            'name.required' => trans('forms.name_required'),
            'email.required' => trans('forms.surname_required'),
            'subject.required' => trans('forms.subject_required'),
            'contenido.required' => trans('forms.message_required'),
        ]);

        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'contenido' => $request->contenido
        ];
        $newCustomer = (new MessageReceived($message))->onQueue('new_customer_email');
        Mail::queue($newCustomer);

        return back()->with('status','Recibimos tu mensaje, te responderemos en breves.');
        
    }

    
}
