<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // este codigo de la linea copiamos de la documentacion

class Imagen extends Model // una imagen 
{
    use HasFactory;
    public function product():BelongsTo //pertenece 
    {
        return $this->belongsTo(Product::class); //a un product
    }
}
