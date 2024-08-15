<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Rating;
use App\Models\User;

class DiscountController extends Controller
{

    public function index()
    {
        $discount = Discount::first();
        return view('discounts.index', compact('discount'));
    }

    public function edit()
    {
        $discount = Discount::first();
        return view('discounts.edit', compact('discount'));
    }

    public function update(Request $request)
    {
        $discount = Discount::first();
        $discount->description = $request->description;
        $discount->is_enabled = $request->is_enabled;
        $discount->save();
        return back()->with('Success', 'აქცია წარმატებით განახლდა');
    }

    public function ratings()
    {
        $get_rating = Rating::first();
        $start_date = $get_rating->start_date; // Use assignment operator
        $end_date = $get_rating->end_date; // Use assignment operator

        $ratings = User::withCount(['purchases' => function ($query) use ($start_date, $end_date) {
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }])
        ->orderBy('purchases_count', 'desc')
        ->get();

        return view('adminka.ratings', compact('ratings', 'get_rating'));
    }


    public function ratingUpdate(Request $request)
    {
        $ratings = Rating::first();
        $ratings->start_date = $request->start_date;
        $ratings->end_date = $request->end_date;
        $ratings->save();
        return back()->with('Success', 'რეიტინგი წარმატებით განახლდა');
    }
}
