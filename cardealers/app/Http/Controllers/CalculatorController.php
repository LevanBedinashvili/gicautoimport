<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;

class CalculatorController extends Controller
{
    public function calculator()
    {
        $auction = Auction::get();
        return view("calculator.price", compact('auction'));
    }
}
