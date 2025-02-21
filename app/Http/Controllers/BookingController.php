<?php

namespace App\Http\Controllers;

use App\Mail\BookingCreated;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    //
    public function store(Request $request){
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->email = $request->email;
        $booking->members = $request->members;
        $booking->place = $request->place;
        $booking->days = $request->days;
        $booking->date = $request->date;
        $booking->TourCode = $request->TourCode;
        $booking->time = $request->time;
        $booking->save();
        $adminEmails = ['jemmavalleytours@gmail.com', 'info@jemmavalleytour.com']; // Replace with the admin emails
        Mail::to($adminEmails)->send(new BookingCreated($booking));
        return response()->json(['message' => 'Booking created!'], 201);
    }
}
