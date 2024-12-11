<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Kingdom;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plantae;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plantae>
 */
class PlantaeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Plantae::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'scientific_name' => $this->faker->word,
            'type' => $this->faker->word,
            'growth_habit' => $this->faker->word,
            'native_region' => $this->faker->word,
            'description' => $this->faker->word,
            'kingdom_id' => Kingdom::factory(),
            'categorie_id' => Category::factory(),
        ];
    }
}
