<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('osu.checkout', ['unis'=>DB::table('club_unicycles')->get()]);
    }
}
