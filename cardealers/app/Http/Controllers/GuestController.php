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
        return view('guest.index', compact('auction'));
    }

    public function home()
    {
        $auction = Auction::get();
        return view('guest.index', compact('auction'));
    }

    public function info_one()
    {
        return view('guest.info_one');
    }


    public function info_two()
    {
        $auction = Auction::get();
        return view('guest.info_two');
    }


    public function info_three()
    {
        $auction = Auction::get();
        return view('guest.info_three');
    }

    public function about()
    {
        return view('guest.about');
    }

}
