<?php

namespace Database\Factories;

use App\Models\Schools;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schools::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'school_name' => $this->faker->word,
        'ambalan_name' => $this->faker->word,
        'level' => $this->faker->word,
        'gudep' => $this->faker->word,
        'registration' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
