<?php

namespace App\Http\Controllers;

use App\Device;
use App\Device_model;
use App\User;
use BillSeeder;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device = Device::with(['user'])->paginate();
        return view('devices.index', ['devices'=> $device]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devices.create');
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
            'first_name' => 'required|max:255',
            'name' => 'required|max:255',
            'name' => 'required',
            
          
        ]);

        $device = Device::create($validated);
        return view('devices.show', compact('device'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device = Device::findOrFail($id);
        return view('devices.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::findOrFail($id);

        $users = User::pluck('first_name','last_name', 'id');

        $device_models = Device_model::pluck('name', 'id');

        return view('devices.edit',
            compact('device', 'users', 'device_models')
        );
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
            'user_id' => 'required',
            'device_model_id' => 'required',
            
        ]);

        $device = User::findOrFail($id);
        $device->fill($validated);
        $device->save();

        return redirect()->route('devices.show', ['device' => $device->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Device::destroy($id);
        return redirect()->route('devices.index');
    }
}
