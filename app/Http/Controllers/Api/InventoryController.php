<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InventoryRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inventory::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventoryRequest $request)
    {
        $validated = $request->validated();

        $inventory = Inventory::create($validated);

        return $inventory;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Inventory::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventoryRequest $request, string $id)
    {
        $validated = $request->validated();

        $inventory = Inventory::findOrFail($id);

        $inventory->update($validated);

        return $inventory;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::findOrFail($id);
        
        $inventory->delete();

        return $inventory;
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
