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
    public function update(MedicinesRequest $request, string $id)
    {
        $validated = $request->validated();

        $medicines = Medicines::findOrFail($id);

        $medicines->update($validated);

        return $medicines;
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

    public function logout(Request  $request)
    {
       $request->user()->tokens()->delete();


       $response = [
           'message' => 'Logout.'
       ];

       return $response;
    }
}
