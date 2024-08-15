<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use App\Models\Purchase;


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

    public function searchvehicle(Request $request)
    {
        $request->validate([
            'piradinomeri' => 'required|string',
            'vincode' => 'required|string'
        ]);

        $piradinomeri = $request->input('piradinomeri');
        $vincode = $request->input('vincode');

        $result = Purchase::where('personal_number', $piradinomeri)
                            ->whereRaw('RIGHT(vin_code, 6) = ?', [$vincode])
                            ->with("galleries")->first();

        if(!$result)
        {
            abort(404);
        }

        return view("guest.search_result", compact("result"));
    }


    public function vehicle($id)
    {

        $result = Purchase::where('id', $id)
                            ->with("galleries")->first();

        if(!$result)
        {
            abort(404);
        }

        return view("guest.search_result", compact("result"));
    }

}
