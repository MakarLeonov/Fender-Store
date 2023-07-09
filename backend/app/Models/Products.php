<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function types() {
        return $this->belongsTo(Types::class);
    }

    public function colors() {
        return $this->belongsTo(Colors::class);
    }

    public function models() {
        return $this->belongsTo(Models::class);
    }
}
