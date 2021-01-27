<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Device;
use App\Device_model;
use App\Part;
use App\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repair = Repair::with('bill','device','part')->paginate();
        return view('repairs.index', ['repairs'=> $repair]); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repairs.create');
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
            'name' => 'required|max:255',
            'amount' => 'required',
            'name' => 'required',
            'name' => 'required',
            
          
        ]);

        $repair = Repair::create($validated);
        return view('repairs.show', compact('repair'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repair = Repair::findOrFail($id);
        return view('repairs.show', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repair = Repair::findOrFail($id);

        $bills = Bill::pluck('amount', 'id');

        $parts = Part::pluck('name', 'id');

        $devices = Device::pluck('name', 'id');

        return view('repairs.edit',
            compact('repair','bills', 'parts','devices')
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
            'bill_id' => 'required',
            'part_id' => 'required',
            'device_id' => 'required',
            
        ]);

        $repair = Repair::findOrFail($id);
        $repair->fill($validated);
        $repair->save();

        return redirect()->route('repairs.show', ['repair' => $repair->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Repair::destroy($id);
        return redirect()->route('repairs.index');
    }
}
