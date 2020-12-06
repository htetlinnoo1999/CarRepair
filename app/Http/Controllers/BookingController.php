<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookNow(Request $request)
    {
        $one_day_price = Car::where('id', $request->car_id)->first()->price;
        $data = [
            'user_id' => Auth::id(),
            'price' => (int)$request->days * (int)$one_day_price
        ];
        Booking::create(array_merge($request->all(), $data));
        return redirect('/')->with('success', "Your booking is successful.");
    }
}
