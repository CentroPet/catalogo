<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany; // copiamos este codigo de la documentacion, de la documentacion

use function PHPUnit\Framework\returnSelf;

class Product extends Model
{
    use HasFactory; // catax
    public function imagenes ():HasMany // tiene muchos HasMany=> tiene muchos
    {
        return $this->hasMany((Imagen::class)); // imagenes
    }
//  producto pertenece a una sola categoria
//One to Many (Inverse) / Belongs To
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}


