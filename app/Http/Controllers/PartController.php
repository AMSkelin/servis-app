<?php

namespace App\Http\Controllers;

use App\Part;
use App\Supplier;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $part = Part::with(['supplier'])->paginate();
        return view('parts.index', ['parts'=> $part]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parts.create');
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
            'name' => 'required',
       
        ]);

        $part = Part::create($validated);
        return view('parts.show', compact('part'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $part = Part::findOrFail($id);
        return view('parts.show', compact('part'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $part = Part::findOrFail($id);

        $suppliers = Supplier::pluck('name', 'id');

        return view('parts.edit',
            compact('part', 'suppliers')
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
            'name' => 'required',
            
        ]);

        $part = Part::findOrFail($id);
        $part->fill($validated);
        $part->save();

        return redirect()->route('parts.show', ['part' => $part->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Part::destroy($id);
        return redirect()->route('parts.index');
    }
}
