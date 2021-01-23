<?php

namespace App\Http\Controllers;

use App\Device_model;
use Illuminate\Http\Request;
use App\Device_type;

class Device_modelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device_model = Device_model::with(['device_type'])->paginate();
        return view('device_models.index', compact('device_models'));
       
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device_models.create');
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
            'name' => 'required',
            'device_type_id'=> 'required'
            
        ]);
        $device_model = Device_model::create($validated);
        return view('device_models.show', compact('device_model'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device_model = Device_model::findOrFail($id);
        return view('device_models.show', compact('device_model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device_model = Device_model::findOrFail($id);
        return view('device_models.edit', compact('device_model'));
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
            'device_type_id'=> 'required'
            
        ]);

        $device_model = Device_model::findOrFail($id);
        $device_model->fill($validated);
        $device_model->save();

        return view('device_models.show', compact('device_model'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Device_model::destroy($id);
        return redirect()->route('device_models.index');
    }
}
