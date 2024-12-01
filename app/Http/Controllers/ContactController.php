<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        $contact = Contact::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting us!',
            'data' => $contact
        ], 201);
    }
    public function partnership(Request $request)
    {
        $validated = $request->validate([
            'link' => 'nullable',
            'email' => 'nullable',
            'phone' => 'required',
            'company_name' => 'required',
            'message' => 'required',

        ]);
        $partnership =  new Contact();
        $partnership->link = $request->name;
        $partnership->email = $request->email;
        $partnership->company_name = $request->company_name;
        $partnership->message = $request->message;
        $partnership->phone = $request->phone;
        $partnership->save();

        return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting us!',
            'data' => $partnership,
        ], 201);
    }
}
