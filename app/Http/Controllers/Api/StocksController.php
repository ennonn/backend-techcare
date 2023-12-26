<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StocksRequest;
use App\Models\Stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Stocks::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StocksRequest $request)
    {
        $validated = $request->validated();

        $stocks = Stocks::create($validated);

        return $stocks;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Stocks::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StocksRequest $request, string $id)
    {
        $validated = $request->validated();

        $stocks = Stocks::findOrFail($id);

        $stocks->update($validated);

        return $stocks;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stocks = Stocks::findOrFail($id);
        
        $stocks->delete();

        return $stocks;
    }
}
