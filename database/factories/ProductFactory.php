<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produc>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre"=>fake()->name(),
            "stock"=>100,
            "precio"=>150,
            "fvencimiento"=>"2023-11-30",
            "foto"=>"https://mega.com/sabueso",
            "video"=>"https://yotube.com/sabueso",
            "categoria_id"=>1,
        ];
    }
}
