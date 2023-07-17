<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\ProductsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product' => new ProductsResource($this->product),
            // 'product' => $this->product,
            'amount' => $this->amount,
        ];
    }
}
