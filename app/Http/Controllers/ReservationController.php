<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $items = Reservation::all();

        return view('reserve.index',['items' => $items]);
    }

    public function post(Request $request)
   {
       $items = DB::select('select * from reservations');
       return view('reserve.index', ['items' => $items]);
   }

    public function add(Request $request)
   {
       return view('reserve.add');
   }

   public function create(Request $request)
   {
       $param = [
           'user_id' => $request->user_id,
           'member' => $request->member,
           'checkin' => $request->checkin,
           'checkout' => $request->checkout,
       ];
       DB::insert('insert into reservations (name, member, checkin, checkout) values (:name, :member, :checkin, :checkout)', $param);

       return redirect('/reserve');
   }
}
