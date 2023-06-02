<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //Show contacts page
    public function showContactsPage()
    {
        return view('contacts');
    }

    public function storeContactForm(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($formFields);


        //  Send mail to admin

        \Mail::send('contacts', array(

            'name' => $formFields['name'],
            'email' => $formFields['email'],
            'message' => $formFields['message'],

        ), function ($message) use ($request) {

            $message->from($request->email);

            $message->to('admin@admin.com', 'Admin')->subject($request->get('message'));

        });


        return redirect()->back()->with(['message' => 'Вашето съобщение беше изпратено!']);

    }
}