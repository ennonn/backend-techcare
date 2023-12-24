<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagersRequest;
use App\Models\Managers;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Managers::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagersRequest $request)
    {

        $validated = $request->validated();

        $medicines = Managers::create($validated);

        return $medicines;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Managers::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ManagersRequest $request, string $id)
    {
        $validated = $request->validated();

        $managers = Managers::findOrFail($id);

        $managers->update($validated);

        return $managers;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $managers = Managers::findOrFail($id);
        
        $managers->delete();

        return $managers;
    }
}
