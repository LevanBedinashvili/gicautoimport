<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        if(Auth::user()->role_id == 1)
        {
            $get_all_purchases = Purchase::orderBy('buy_date', 'desc')->paginate(30);
            return view("dashboard", compact("get_all_purchases"));
        }
        else {
            $news = News::orderBy('create_date', 'desc')->get();
            $last_news = News::orderBy('create_date', 'desc')->first();
            return view("dealerdashboard", compact("news", 'last_news'));
        }

    }

    public function dealerpurchases()
    {
        $get_all_purchases = Purchase::orderBy('buy_date', 'desc')->paginate(30);
        return view("dashboard", compact("get_all_purchases"));
    }

    public function searchvehicle(Request $request)
    {
        $vin_code = $request->input('vin_code');
        $saxeli_gvari = $request->input('saxeli_gvari');

        // Extract the last 6 digits of the vin_code
        $vin_code_last_6 = substr($vin_code, -6);


        if(Auth::user()->role_id == 1)
        {
            $get_all_purchases = Purchase::where('vin_code', 'LIKE', "%{$vin_code}")
            ->where('client_name', 'LIKE', "%{$saxeli_gvari}%")
            ->paginate(30);
            return view('dashboard', compact('get_all_purchases'));
        }
        else {
            $get_my_purchases = Purchase::where('user_id', Auth::user()->id)->where('vin_code', 'LIKE', "%{$vin_code}")
            ->where('client_name', 'LIKE', "%{$saxeli_gvari}%")
            ->paginate(30);
            return view('purchases.index', compact('get_my_purchases'));
        }


        // Return the search results
    }

}
