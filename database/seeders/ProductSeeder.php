<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
//use App\Models\Producto;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
        "nombre"=>"alaña",
        "stock"=>150,
        "precio"=>100,
        "fvencimiento"=>'2023-11-15',
        "foto"=>'https://png.com.bo/alaña*',
        "video"=>'https://youtube.com.bo/alaña.mp4*',
        "categoria_id"=>1,
        ]);

        Product::create([
        "nombre"=>"puru",
        "stock"=>25,
        "precio"=>1,
        "fvencimiento"=>'2023-11-15',
        "foto"=>'https://png.com.bo/puru*',
        "video"=>'https://youtube.com.bo/puru.mp4*',
        "categoria_id"=>1,
        ]);

        Product::create([
        "nombre"=>"pepom",
        "stock"=>15,
        "precio"=>58,
        "fvencimiento"=>'2023-11-15',
        "foto"=>'https://png.com.bo/pepom*',
        "video"=>'https://youtube.com.bo/pepom.mp4*',
        "categoria_id"=>1,
        ]);

        Product::create([
        "nombre"=>"capu",
        "stock"=>25,
        "precio"=>35,
        "fvencimiento"=>'2023-11-15',
        "foto"=>'https://png.com.bo/capu*',
        "video"=>'https://youtube.com.bo/capu.mp4*',
        "categoria_id"=>1,
        ]);

        Product::create([
        "nombre"=>"profe",
        "stock"=>58,
        "precio"=>89,
        "fvencimiento"=>'2023-11-15',
        "foto"=>'https://png.com.bo/profe*',
        "video"=>'https://youtube.com.bo/profe.mp4*',
        "categoria_id"=>1,
        ]);

        Product::create([
        "nombre"=>"calay",
        "stock"=>88,
        "precio"=>12,
        "fvencimiento"=>'2023-11-15',
        "foto"=>'https://png.com.bo/calay*',
        "video"=>'https://youtube.com.bo/calay.mp4*',
        "categoria_id"=>5,
        ]);
    }

}
