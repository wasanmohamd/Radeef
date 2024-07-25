<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Symfony\Component\HttpFoundation\StreamedResponse;

class TechnicalSupportController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::all();
        return view('technicalSupport', compact('inquiries'));
    }

    public function export()
    {
        $response = new StreamedResponse(function () {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Name', 'Email', 'Ticket', 'Inquiry', 'Created At']);

            Inquiry::chunk(100, function ($inquiries) use ($handle) {
                foreach ($inquiries as $inquiry) {
                    fputcsv($handle, [
                        $inquiry->name,
                        $inquiry->email,
                        $inquiry->ticket,
                        $inquiry->inquiry,
                        $inquiry->created_at->toDateTimeString(),
                    ]);
                }
            });

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="inquiries.csv"');

        return $response;
    }
}