<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Http\Requests\CalculatorStoreRequest;
use App\Http\Requests\CalculatorUpdateRequest;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_items = Vehicle::get();
        return view('vehtypes.index', compact('get_items'));
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

        Vehicle::create($requestData);

        return back()->with('Success', 'მანქანის ტიპი წარმატებით დაემატა');
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
        $edit_data = Vehicle::where('id', $id)->firstOrFail();
        return view('vehtypes.edit', compact('edit_data'));
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

        Vehicle::where('id', $id)->update($requestData);

        return redirect()->route('vehicle.index')->with('Success', 'მანქანის ტიპი წარმატებით განახლდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Vehicle::findOrFail($id);

        $item->delete();

        return redirect()->back()->with('Success', 'მანქანის ტიპი წარმატებით წაიშალა');
    }
}
