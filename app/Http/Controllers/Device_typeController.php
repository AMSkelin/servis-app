<?php

namespace App\Http\Controllers;

use App\Device_type;
use Illuminate\Http\Request;

class Device_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device_types = Device_type::paginate();
        return view('device_types.index', ['device_types'=> $device_types]);

                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:device_types|max:255',
            
        ]);
        $device_type = Device_type::create($validated);
        return view('device_types.show', compact('device_type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device_type = Device_type::findOrFail($id);
        return view('device_types.show', compact('device_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device_type = Device_type::findOrFail($id);
        return view('device_types.edit', compact('device_type'));
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
        $validated = $request->validate([
            'name' => 'required|max:255',
            
        ]);

        $device_type = Device_type::findOrFail($id);
        $device_type->fill($validated);
        $device_type->save();

        return view('device_types.show', compact('device_type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Device_type::destroy($id);
        return redirect()->route('device_types.index');
    }
}
