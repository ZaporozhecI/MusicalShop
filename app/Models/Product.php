<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name', 'price', 'id_category'];

    use HasFactory;
    protected $table = 'product';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Products::class, 'product_order');
    }
}