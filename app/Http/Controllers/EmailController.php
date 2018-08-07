<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailConfig;

class EmailController extends Controller
{

    public function index(){
      return view('agendamento.index');
    }

    public function send($email){
      // Mail::to('will.oliver.ti@outlook.com')->send(new MailConfig());

      Mail::send('emails.aviso', [], function($message){
        $message->to($email);
        $message->subject('Estado Agendamento Atualizado');
      });
    }

}
