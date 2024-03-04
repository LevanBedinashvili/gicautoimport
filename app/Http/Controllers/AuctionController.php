<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use App\Http\Requests\CalculatorStoreRequest;
use App\Http\Requests\CalculatorUpdateRequest;


class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_items = Auction::get();
        return view('auctions.index', compact('get_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CalculatorStoreRequest $request)
    {
        $requestData = $request->all();

        Auction::create($requestData);

        return back()->with('Success', 'აუქციონი წარმატებით დაემატა');
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
        $edit_data = Auction::where('id', $id)->firstOrFail();
        return view('auctions.edit', compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CalculatorUpdateRequest $request, $id)
    {
        $requestData = $request->except('_method', '_token');

        Auction::where('id', $id)->update($requestData);

        return redirect()->route('auction.index')->with('Success', 'აუქციონი წარმატებით განახლდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Auction::findOrFail($id);

        $item->delete();

        return redirect()->back()->with('Success', 'აუქციონი წარმატებით წაიშალა');
    }
}
