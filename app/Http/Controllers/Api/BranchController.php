<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchesRequest;
use App\Models\Branches;
use Illuminate\Http\Request;

class BranchController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Branches::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BranchesRequest $request)
    {

        $validated = $request->validated();

        $branches = Branches::create($validated);

        return $branches;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Branches::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BranchesRequest $request, string $id)
    {
        $validated = $request->validated();

        $branches = Branches::findOrFail($id);

        $branches->update($validated);

        return $branches;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branches = Branches::findOrFail($id);
        
        $branches->delete();

        return $branches;
    }
}
