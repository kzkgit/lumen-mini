<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendContactForm(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'topic' => '',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        return response()->json(['success'=>'The form has been sent. We will get back to you as soon as possible.']);
    }
}
