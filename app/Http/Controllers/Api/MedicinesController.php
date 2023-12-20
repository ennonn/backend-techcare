<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MedicinesRequest;
use App\Models\Medicines;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Medicines::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicinesRequest $request)
    {

         // Retrieve the validated input data...
        $validated = $request->validated();

        $medicines = Medicines::create($validated);

        return $medicines;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Medicines::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medicines = Medicines::findOrFail($id);
        
        $medicines->delete();

        return $medicines;
    }
}
