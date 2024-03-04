<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Http\Requests\StateRequest;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_items = State::get();
        return view('states.index', compact('get_items'));
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
    public function store(StateRequest $request)
    {
        $requestData = $request->all();

        State::create($requestData);

        return back()->with('Success', 'შტატი წარმატებით დაემატა');
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
        $edit_data = State::where('id', $id)->firstOrFail();
        return view('states.edit', compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StateRequest $request, $id)
    {
        $requestData = $request->except('_method', '_token');

        State::where('id', $id)->update($requestData);

        return redirect()->route('state.index')->with('Success', 'შტატი წარმატებით განახლდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = State::findOrFail($id);

        $item->delete();

        return redirect()->back()->with('Success', 'შტატი წარმატებით წაიშალა');
    }
}
