<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

// class Category extends Model
// {
//     use HasFactory;
//     // protected $table = 'category_product';
//     public function products(): HasMany
//     {
        
//         // return $this->hasMany(Advices::class);
//         return $this->hasMany(Product::class);
//     }
// }
class Category extends Model
{
    use HasFactory;
    protected $table = 'category_product';

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'id_category');
    }
}