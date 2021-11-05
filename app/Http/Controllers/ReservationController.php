<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $items = Reservation::all();

        return view('reserve.index',['items' => $items]);
    }
}
