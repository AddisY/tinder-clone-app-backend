<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{

    protected $model = Person::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 65),
            'picture' => $this->faker->imageUrl(640, 480, 'people'), // Generates a random image URL
            'location' => $this->faker->city
        ];
    }
}
