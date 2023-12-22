<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuppliersRequest;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Suppliers::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SuppliersRequest $request)
    {

         // Retrieve the validated input data...
        $validated = $request->validated();

        $suppliers = Suppliers::create($validated);

        return $suppliers;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Suppliers::findOrFail($id);
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
        $suppliers = Suppliers::findOrFail($id);
        
        $suppliers->delete();

        return $suppliers;
    }
}
