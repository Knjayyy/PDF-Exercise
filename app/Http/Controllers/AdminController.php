<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        return inertia('Admin/Index');
    }

    public function sendMailToAllClients(Request $request)
    {
        $clients = Client::all();

        if ($request->message != null && $request->subject != null) {
            $subject = $request->subject;
            $content = $request->message;

            foreach ($clients as $client) {
                $first_name = $client->first_name;
                $email = $client->email;

                Mail::send('email.bulk-mail', ['content' => $content, 'client' => $first_name], function ($message) use ($subject, $email, $first_name) {
                    $message->to($email, $first_name);
                    $message->subject($subject);
                });
            }

            return back()->with('info', 'Email sent successfully!');
        }

        return back()->with('error', 'Please fill all the fields!');
    }
}
