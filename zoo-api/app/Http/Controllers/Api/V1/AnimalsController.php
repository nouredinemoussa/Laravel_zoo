<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Animals;
use App\Models\Species;
use App\Models\Enclosures;
use App\Mail\AnimalCreated;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\Api\AnimalResource;
use App\Http\Requests\Api\V1\StoreAnimalRequest;
use App\Http\Requests\Api\V1\StoreEnclosureRequest;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $animal = Animals::where('id',1)->first();
        Mail::to('nouredine.moussa@ynov.com')->send(new AnimalCreated($animal));
        return "Mail envoyé avec succès";
        
        /*  $animals = Animals::with('specie')->get();
        $animal = new AnimalResource(Animals::find(1))
        $animals = AnimalResource::collection($animals)
         ->additional(['meta' => ['total_animals' => Animals::count()]]);
        return $animals; */
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreAnimalRequest $request)
    {
        $validated = $request ->validated();
        //$animal = Animals::create($validated);

        $animal = new Animals();
        $animal -> name = $validated['name'];

        $specie = Species::where('id', $validated->species_id)->first();
        $animal -> specie() -> associate($specie);

        $enclosure = Enclosures::where('idname', $validated->name)->first();
        $animal -> enclosure() -> associate();
        return response()->json($animal, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    public function assign_enclosure(StoreEnclosureRequest $request) {
        $animal = Animals::where('id', $request->animal_id)->first();
        $enclosure = Enclosures::where('id',$request->enclosure_id)->first();

        $animal->enclosures()->attach($enclosure);

        return response()->json('Associé', 200);
    }
}
