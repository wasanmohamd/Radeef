<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InquiriesExport;

class InquiryController extends Controller
{
    // Method to list all inquiries
    public function index()
    {
        $inquiries = Inquiry::all();
       
        $inquiries = Inquiry::paginate(10); // Adjust the model and per-page limit as needed
    return view('technicalSupport', compact('inquiries'));

    }

    // Method to show the form to create a new inquiry
    public function create()
    {
        return view('create-inquiry');
    }

    // Method to store a new inquiry
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'ticket' => 'required|string|max:255',
            'inquiry' => 'required|string',
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->ticket = $request->ticket;
        $inquiry->inquiry = $request->inquiry;
        $inquiry->save();

        return redirect()->route('landing')->with('success', 'Inquiry created successfully!');
    }

    // Method to show the email form for a specific inquiry
    public function showEmailForm($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('writingpage', compact('inquiry'));
    }

   

    public function sendEmail(Request $request, $id)
    {
        $inquiry = Inquiry::findOrFail($id);
    
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        $data = [
            'inquiry' => $inquiry,
            'messageContent' => $request->message,
        ];
    
        // Send email using the email template
        Mail::send('emails.support', $data, function ($message) use ($inquiry, $request) {
            $message->to($inquiry->email)
                    ->subject($request->subject);
        });
    
        // Update the status to 'closed' if the email was sent successfully
        $inquiry->status = 'closed';
        $inquiry->save();
    
        return redirect()->route('inquiries.index')->with('success', 'Email sent successfully and status updated to closed!');
    }
}