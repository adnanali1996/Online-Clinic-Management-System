<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ContactMessage;
class ContactUsController extends Controller
{
    //
    public function send_message(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'contactno' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ],
        [
            'name.required' => 'Please Type Your Name',
            'email.required' => 'Please Type Your Email',
            'contactno.required' => 'Please Type Your Contact No',
            'subject.required' => 'Please Type Subject',
            'message.required' => 'Please Type Your Nessage',
        ]);
        ContactMessage::insert([
            'name' =>$request->name,
            'email' => $request->email,
            'contactno' => $request->contactno,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('message', "Our Team Will Contact You Soon");
    }
}
