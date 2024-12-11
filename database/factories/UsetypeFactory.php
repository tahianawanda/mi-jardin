<?php

namespace Database\Factories;

use App\Models\Plantae;
use App\Models\Usetype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsetypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Usetype::class;
    public function definition(): array
    {
        return [
            'use' => $this->faker->word(),
            'details' => $this->faker->word(),
            'plantae_id' => Plantae::factory()
        ];
    }
}
