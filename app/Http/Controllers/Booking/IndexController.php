<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the application main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('booking.index');
    }

    public function date()
    {
        return view('booking.date');
    }

    public function auto()
    {
        return view('booking.auto');
    }

}
