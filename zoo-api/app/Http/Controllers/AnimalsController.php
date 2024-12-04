<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\V1\StoreAnimalRequest;
use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalsController extends Controller
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
    public function store(StoreAnimalRequest $request)
    {
        $validated = $request ->validated();
        $animal = Animals::create($validated);
        return response()->json($animal, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animals $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animals $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animals $animals)
    {
        //
    }
}
