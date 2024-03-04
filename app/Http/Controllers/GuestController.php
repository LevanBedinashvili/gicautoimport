<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Vehicle;
use App\Models\Port;
use App\Models\Auction;


class GuestController extends Controller
{
    public function index()
    {
        $auction = Auction::get();
        $state = State::get();
        $port = Port::get();
        $vehicle = Vehicle::get();
        return view('guest.index', compact('auction','state','port','vehicle'));
    }

    public function home()
    {
        $auction = Auction::get();
        $state = State::get();
        $port = Port::get();
        $vehicle = Vehicle::get();
        return view('guest.index', compact('auction','state','port','vehicle'));
    }
}
