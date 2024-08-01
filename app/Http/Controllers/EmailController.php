<?php

namespace App\Http\Controllers;

use App\Mail\Welcomemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function index(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email'
        ]);

        // Retrieve the email address from the request
        $tomail = $request->input('email');
        $message = "Welcome";
        $subject = "Greetings Email";

        Mail::to($tomail)->send(new Welcomemail($message, $subject));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
