<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Characteristic;
use App\Models\Plantae;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Characteristic>
 */
class CharacteristicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Characteristic::class;
    public function definition(): array
    {
        return [
            'leaf_type' => $this->faker->word(),
            'flowering' => $this->faker->boolean(),
            'fruit_type' => $this->faker->word(),
            'wood_type' => $this->faker->word(),
            'plantae_id' => Plantae::factory()
        ];
    }
}
