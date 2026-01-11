<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Http\Requests\StoreAgencyRequest;
use App\Http\Requests\UpdateAgencyRequest;
use Illuminate\Routing\Controller;


class AgencyController extends Controller
{
    /**
     * Display a listing of the agencies.
     */
    public function index()
    {
        $agencies = Agency::all();
        return response()->json($agencies);
    }

    /**
     * Show the form for creating a new agency.
     */
    public function create()
    {
        // API esetén nem szükséges, visszaadhatsz üzenetet
        return response()->json(['message' => 'Form endpoint']);
    }

    /**
     * Store a newly created agency in storage.
     */
    public function store(Request $request)
    {
        // Validálás
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'type' => 'required|string|max:50',
        ]);

        // Agency létrehozása
        $agency = Agency::create($validated);

        return response()->json($agency, 201);
    }

    /**
     * Display the specified agency.
     */
    public function show(Agency $agency)
    {
        return response()->json($agency);
    }

    /**
     * Show the form for editing the specified agency.
     */
    public function edit(Agency $agency)
    {
        return response()->json(['agency' => $agency]);
    }

    /**
     * Update the specified agency in storage.
     */
    public function update(Request $request, Agency $agency)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'country' => 'sometimes|required|string|max:255',
            'type' => 'sometimes|required|string|max:50',
        ]);

        $agency->update($validated);

        return response()->json($agency);
    }

    /**
     * Remove the specified agency from storage.
     */
    public function destroy(Agency $agency)
    {
        $agency->delete();
        return response()->json(['message' => 'Agency deleted']);
    }
}
