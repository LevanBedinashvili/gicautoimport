<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $get_all_purchases = Purchase::orderBy('id', 'desc')->paginate(10);
        return view("dashboard", compact("get_all_purchases"));
    }

    public function dealerpurchases()
    {
        $get_all_purchases = Purchase::orderBy('id', 'desc')->paginate(10);
        return view("dashboard", compact("get_all_purchases"));
    }
}
