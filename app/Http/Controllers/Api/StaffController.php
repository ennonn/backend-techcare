<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffsRequest;
use App\Models\Staffs;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staffs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffsRequest $request)
    {

        $validated = $request->validated();

        $staffs = Staffs::create($validated);

        return $staffs;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Staffs::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffsRequest $request, string $id)
    {
        $validated = $request->validated();

        $staffs = Staffs::findOrFail($id);

        $staffs->update($validated);

        return $staffs;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staffs = Staffs::findOrFail($id);
        
        $staffs->delete();

        return $staffs;
    }
}
