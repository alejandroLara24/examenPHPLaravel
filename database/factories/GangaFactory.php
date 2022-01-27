<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class GangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'points' => $this->faker->randomNumber(5),
            'price' => $this->faker->randomFloat(2,30,200),
            'discount_price' => $this->faker->randomFloat(2,0,29),
            'available' => $this->faker->boolean()
        ];
    }
}
