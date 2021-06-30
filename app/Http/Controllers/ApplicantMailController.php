<?php

namespace App\Http\Controllers;

use App\Mail\ApplicantMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicantMailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Job Application - Highly Succeed Inc.',
            'body' => 'Thank you for applying.'
        ];
        $subject = "Job Application - Highly Succeed Inc";
        Mail::to("nhielsanalbuero.hs@gmail.com")->send(new ApplicantMail($details, $subject));
        return "Email Sent";
    }
}
