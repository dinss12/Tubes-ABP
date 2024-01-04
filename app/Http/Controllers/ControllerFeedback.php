<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFeedback extends Controller
{
    public function index()
    {
        return view('User.feedback.Feedbackpage',[
            "title" => "Feedback"
        ]);
    }
}
