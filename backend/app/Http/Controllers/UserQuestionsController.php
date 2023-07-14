<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserQuestions;
use App\Http\Resources\UserQuestionsResource;
use App\Http\Requests\UserQuestionsRequest;

class UserQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserQuestionsResource::collection(UserQuestions::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserQuestionsRequest $request)
    {
        $new_entry = UserQuestions::create($request->validated());
        return new UserQuestionsResource($new_entry);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UserQuestions::destroy($id);
        return 'The entry was saccesfully deleted!';
    }
}
