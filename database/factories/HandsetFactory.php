<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HandsetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = [
            ['64GB-ROM','4GB-RAM', '50MP-Camera'],
            ['128GB-ROM','8GB-RAM', '48MP-Camera'],
            ['512GB-ROM','6GB-RAM', '16MP-Camera'],
            ['256GB-ROM','16GB-RAM', '200MP-Camera'],
        ];
        return [
            'name' => fake()->name(),
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'price' => fake()->numberBetween(1000,100000),
            'release_date' => fake()->date(),
            'features' => json_encode(Arr::random($array))
        ];
    }
}
