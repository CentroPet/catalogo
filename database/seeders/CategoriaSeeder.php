<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        Categoria::create([
            "categoria"=>"champoo",
        ]);

        Categoria::create([
            "categoria"=>"accesorios",
        ]);

        Categoria::create([
            "categoria"=>"alimento",
        ]);

        Categoria::create([
            "categoria"=>"ropas",
        ]);

        Categoria::create([
            "categoria"=>"pulguisida",
        ]);
    }
}

