<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dataset;

class DatasetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Dataset::class;
    public function definition()
    {
        return [
            //
            
            'data' => $this->faker->name,
        ];
    }
}
