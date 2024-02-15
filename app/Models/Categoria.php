<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany; // importamos


// una categoria tiene muchos productos
//One to Many => uno a muchos
class Categoria extends Model
{
    use HasFactory;
    public function productos(): HasMany
    {
        return $this->hasMany(Product::class);  //relaciones  
    }
}
