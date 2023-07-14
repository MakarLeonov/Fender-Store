<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types;
use App\Http\Resources\TypesResource;
use App\Http\Requests\TypesRequest;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TypesResource::collection(Types::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypesRequest $request)
    {
        $new_entry = Types::create($request->validated());
        return new TypesResource($new_entry);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TypesResource(Types::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypesRequest $request, string $id)
    {
        $entry = Types::findOrFail($id);
        $entry->update($request->validated());
        return new TypesResource($entry);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Types::destroy($id);
        return 'The entry was saccesfully deleted!';
    }
}
