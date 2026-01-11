<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use App\Http\Requests\StoreParticipateRequest;
use App\Http\Requests\UpdateParticipateRequest;
use Illuminate\Routing\Controller;

class ParticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreParticipateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Participate $participate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participate $participate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParticipateRequest $request, Participate $participate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participate $participate)
    {
        //
    }
}
