<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
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
            'name' => $this->name,
            'image' => $this->image,
            'cost' => $this->cost,
            'in_stok' => $this->in_stok,
            'description' => $this->description,
            'type' => $this->types,
            'model' => $this->models,
            'color' => $this->colors,
        ];
    }
}
