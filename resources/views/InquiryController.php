<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'ticket' => 'required|string|max:255',
            'inquiry' => 'required|string',
        ]);

        Inquiry::create($request->all());

        return back()->with('success', 'Your inquiry has been submitted.');
    }

    
}