<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        "name",
        "description",
        "key_benefits",
        "thumbnail",
        "images",
        "tags"
    ];

    protected function casts(): array
    {
        return [
            "images" => "array",
            "tags" => "array",
        ];
    }

    public function cart(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
