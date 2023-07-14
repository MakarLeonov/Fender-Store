<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;
use App\Http\Resources\ModelsResource;
use App\Http\Requests\ModelsRequest;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ModelsResource::collection(Models::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModelsRequest $request)
    {
        $new_entry = Models::create($request->validated());
 
        return new ModelsResource($new_entry);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ModelsResource(Models::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModelsRequest $request, string $id)
    {
        $entry = Models::findOrFail($id);
        $entry->update($request->validated());
        return new ModelsResource($entry);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Models::destroy($id);
        return 'The entry was saccesfully deleted!';    
    }
}
