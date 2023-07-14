<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colors;
use App\Http\Resources\ColorsResource;
use App\Http\Requests\ColorsRequest;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ColorsResource::collection(Colors::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColorsRequest $request)
    {
        $new_entry = Colors::create($request->validated());
        return new ColorsResource($new_entry);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ColorsResource(Colors::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColorsRequest $request, string $id)
    {
        $entry = Colors::findOrFail($id);
        $entry->update($request->validated());
        return new ColorsResource($entry);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Colors::destroy($id);
        return 'The entry was saccesfully deleted!'; 
    }
}
