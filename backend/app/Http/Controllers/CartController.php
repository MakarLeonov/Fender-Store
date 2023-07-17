<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Resources\CartResource;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return CartResource::collection(Cart::all()->where('user_id', $request->user_id));
        // return Cart::all()->where('user_id', $request->user_id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entry = Cart::create($request->all());

        return $entry;
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
        Cart::destroy($id);
        return 'Product was seccessfully deleted from cart!';
    }
}
