<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendCustomEmailEmail(Request $request)
    {
        // $title = $request->title;
        // $id = $request->id;
        $id = $request;

        Mail::to($request->receipient)->send(new OrderMail($id));

        return "Email sent successfully!";
    }
}
