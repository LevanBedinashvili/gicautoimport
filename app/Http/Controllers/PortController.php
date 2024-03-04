<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Port;
use App\Http\Requests\CalculatorStoreRequest;
use App\Http\Requests\CalculatorUpdateRequest;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_items = Port::get();
        return view('ports.index', compact('get_items'));
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

        Port::create($requestData);

        return back()->with('Success', 'პორტი წარმატებით დაემატა');
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
        $edit_data = Port::where('id', $id)->firstOrFail();
        return view('ports.edit', compact('edit_data'));
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

        Port::where('id', $id)->update($requestData);

        return redirect()->route('port.index')->with('Success', 'პორტი წარმატებით განახლდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Port::findOrFail($id);

        $item->delete();

        return redirect()->back()->with('Success', 'პორტი წარმატებით წაიშალა');
    }
}
