<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    
    public function showForm()
        {
        return view('homepage.homepage');
        }

    public function sendMail(Request $request)
        {
            $request->validate([
                'name' => 'required|regex:/^[a-zA-Z\s.]+$/',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];


            Mail::to('forestmel102@gmail.com')->send(new ContactMail($data));
            //Session::flash('success', 'Message sent successfully!');
            //return redirect()->route('contact.show');
           
            return response()->json(['message' => 'Message sent successfully']);
        }
}
    

