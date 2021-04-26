<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index()
    {
        //return view('landing');
        return view('home-day-one');
    }

    public function indexOne()
    {
        return view('home-day-one');
    }

    public function indexTwo()
    {
        return view('home-day-two');
    }

    public function indexThree()
    {
        return view('home-day-three');
    }


}
