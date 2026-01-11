<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Http\Requests\StoreAgencyRequest;
use App\Http\Requests\UpdateAgencyRequest;
use Illuminate\Routing\Controller;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Agency::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgencyRequest $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'type' => 'required|string|max:50'
        ]);

        $agency = Agency::create($validated);
        return response()->json($agency, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Agency $id)
    {
        
        $agency = Agency::findOrFail($id);
        return response()->json($agency);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agency $agency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgencyRequest $request, Agency $id)
    {
        
        $agency = Agency::findOrFail($id);
        $agency->update($request->all());
        return response()->json($agency);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agency $id)
    {
        
       Agency::destroy($id);
        return response()->json(['message' => 'Agency sikeresen törölve']);

    }
}
