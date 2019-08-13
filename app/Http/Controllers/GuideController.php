<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        return view('main.guide.guide');
    }

    public function unischool()
    {
        return view('main.guide.unischool');
    }
}
