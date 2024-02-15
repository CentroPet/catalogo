<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        
        $this->call([
            CategoriaSeeder::class, // Arriba crea categoria
            ProductSeeder::class,
        ]);
        
        Product::factory(100)->create();    
    }
}
