<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use HasFactory;

    protected $fillable = ['color'];

    public function products() {
        return $this->hasOne(Products::class);
    }
}
