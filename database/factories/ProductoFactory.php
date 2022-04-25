<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

            return [
                "nombre_corto"=>$this->faker->firstName(),

                /*"descripcion"=>$this->faker->text(),*/
                "PVP"=>$this->faker->numerify()
                //

            //
        ];
    }
}
