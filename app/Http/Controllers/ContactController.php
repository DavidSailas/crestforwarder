<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100|regex:/^[\pL\s\-]+$/u',
            'last_name'  => 'required|string|max:100|regex:/^[\pL\s\-]+$/u',
            'email'      => 'required|email:rfc,dns|max:255',
            'phone'      => 'nullable|regex:/^[\d\s\+\-\(\)]{7,20}$/',
            'message'    => 'required|string|min:10|max:2000',
        ], [
            'first_name.regex' => 'First name can only contain letters.',
            'last_name.regex'  => 'Last name can only contain letters.',
            'email.email'      => 'Please enter a valid email address.',
            'phone.regex'      => 'Please enter a valid phone number.',
            'message.min'      => 'Your message should be at least 10 characters.',
        ]);

        return redirect()->back()->with('success', 'Thanks! We\'ll get back to you shortly.');
    }
}
