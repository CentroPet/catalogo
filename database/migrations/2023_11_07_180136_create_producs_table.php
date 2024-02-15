<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->integer('stock')->unsigned(); // sin signo
            $table->decimal('precio',10,2); // con decimales
            $table->date('fvencimiento'); // fecha de vencimiento
            $table->string('foto',100); // para fot
            $table->string('video',100); // para video
            
            $table->unsignedBigInteger('categoria_id')->default(1); // es una norma, para que laravel entienda
            $table->foreign("categoria_id")->references("id")->on("categorias"); // es la llave forenea es un campo que ya existeen la tabla, es una relacion uno a uno
            $table->boolean("estado")->default(1); // eliminar 

            $table->timestamps(); // para actualizar cada actulizacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
