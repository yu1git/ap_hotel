<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller
{
    public function index()
    {
        $items = Detail::all();

        return view('detail.index',['items' => $items]);
    }
}
