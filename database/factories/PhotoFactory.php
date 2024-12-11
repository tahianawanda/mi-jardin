<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Photo;
use App\Models\Plantae;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Photo::class;
    public function definition(): array
    {
        return [
            'url' => $this->faker->url(),
            'description' => $this->faker->text(),
            'plantae_id' => Plantae::factory()
        ];
    }
}
