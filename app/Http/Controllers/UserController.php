<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $items = User::all();

        return view('user.index',['items' => $items]);
    }

    public function post(Request $request)
   {
       $items = DB::select('select * from users');
       return view('user.index', ['items' => $items]);
   }

    public function add(Request $request)
   {
       return view('user.add');
   }

   public function create(Request $request)
   {
       $param = [
           'name' => $request->name,
           'address' => $request->address,
           'tel' => $request->tel,
       ];
       DB::insert('insert into users (name, address, tel) values (:name, :address, :tel)', $param);

       return redirect('/user');
   }
}
