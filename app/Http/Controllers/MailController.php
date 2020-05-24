<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GuestMessage;
use App\Http\Requests\guestMessageRequest;
use App\Mail\GuestMessage as MailGuestMessage;



class MailController extends Controller
{
    public function guest_message(Request $request){
        $guest=$request;
        Mail::to('info@ingatlanfox.hu')->send(new MailGuestMessage($guest));
        return back()->with('mail_message','Az üzenetet sikeresen elküldte!');
    }

}
