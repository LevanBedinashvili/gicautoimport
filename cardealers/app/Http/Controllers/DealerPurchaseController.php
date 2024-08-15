<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Support\Facades\Auth;

class DealerPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_my_purchases = Purchase::where("user_id", Auth::user()->id)->orderBy('buy_date', 'desc')->paginate(30);
        return view('purchases.index', compact('get_my_purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_title' => 'required|string|max:255',
            'vin_code' => 'required|string|max:255',
            'auction_name' => 'required|string|max:255',
            'buy_date' => 'required|date',
            'buy_price' => 'required|numeric',
            'transport_price' => 'required|numeric',
            'pirveladi_shenatani' => 'sometimes',
            'client_name' => 'required|string|max:255',
            'personal_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'commentary' => 'nullable|string',
            'insurance_price' => 'required|numeric',
        ]);

        $purchase = new Purchase();
        $purchase->user_id = Auth::user()->id;
        $purchase->vehicle_title = $request->vehicle_title;
        $purchase->vin_code = $request->vin_code;
        $purchase->auction_name = $request->auction_name;
        $purchase->stock_number = $request->stock_number;
        $purchase->buy_date = $request->buy_date;
        $purchase->buy_price = $request->buy_price;
        $purchase->transport_price = $request->transport_price;
        $purchase->full_price = (float)$request->buy_price + (float)$request->transport_price;
        $purchase->pirveladi_shenatani = $request->pirveladi_shenatani;
        $purchase->client_name = $request->client_name;
        $purchase->personal_number = $request->personal_number;
        $purchase->address = $request->address;
        $purchase->mobile_number = $request->mobile_number;
        $purchase->commentary = $request->commentary;
        $purchase->insurance_price = $request->insurance_price;
        $purchase->is_accepted = 0;

        $purchase->save();

        return redirect()->back()->with('Success', 'წარმატებით დაემატა');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.edit', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'vehicle_title' => 'required|string|max:255',
            'vin_code' => 'required|string|max:255',
            'auction_name' => 'required|string|max:255',
            'buy_date' => 'required|date',
            'buy_price' => 'required|numeric',
            'pirveladi_shenatani' => 'sometimes',
            'transport_price' => 'required|numeric',
            'client_name' => 'required|string|max:255',
            'personal_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'commentary' => 'nullable|string',
            'insurance_price' => 'required|numeric',
        ]);

        $purchase = Purchase::findOrFail($id);

        if(Auth::user()->role_id == 2 && $purchase->is_accepted == 1){
            return back()->with("Error", "თქვენ არ გაქვთ რედაქტირების უფლება, რადგან უკვე დადასტურებულია.");
        }

        $purchase->vehicle_title = $request->vehicle_title;
        $purchase->vin_code = $request->vin_code;
        $purchase->auction_name = $request->auction_name;
        $purchase->stock_number = $request->stock_number;
        $purchase->buy_date = $request->buy_date;
        $purchase->buy_price = $request->buy_price;
        $purchase->transport_price = $request->transport_price;
        $purchase->full_price = (float)$request->buy_price + (float)$request->transport_price;
        $purchase->pirveladi_shenatani = $request->pirveladi_shenatani;
        $purchase->client_name = $request->client_name;
        $purchase->personal_number = $request->personal_number;
        $purchase->address = $request->address;
        $purchase->mobile_number = $request->mobile_number;
        $purchase->commentary = $request->commentary;
        $purchase->insurance_price = $request->insurance_price;

        $purchase->save();

        return redirect()->back()->with('Success', 'რედაქტირება წარმატებით დასრულდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->is_accepted = 1;
        $purchase->save();
        return redirect()->back()->with('Success', 'წარმატებით დადასტურდა');

    }

    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'buy_price' => 'sometimes|string|max:255',
            'transport_price' => 'sometimes|string|max:255',
            'container' => 'sometimes',
            'container_link' => 'sometimes',
            'paid_price' => 'sometimes',
        ]);

        $purchase = Purchase::findOrFail($id);

        if(Auth::user()->role_id == 2){
            return back()->with("Error", "თქვენ არ გაქვთ რედაქტირების უფლება");
        }

        $purchase->buy_price = $request->buy_price;
        $purchase->transport_price = $request->transport_price;
        $purchase->full_price = (float)$request->buy_price + (float)$request->transport_price;
        $purchase->paid_price = $request->paid_price;
        $purchase->davalianeba = ((float)$request->buy_price + (float)$request->transport_price) - $request->paid_price;
        $purchase->container = $request->container;
        $purchase->container_link = $request->container_link;

        $purchase->save();

        return redirect()->back()->with('Success', 'რედაქტირება წარმატებით დასრულდა');
    }
}
