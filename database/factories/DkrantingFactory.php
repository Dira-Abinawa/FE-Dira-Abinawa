<?php

namespace Database\Factories;

use App\Models\Dkranting;
use Illuminate\Database\Eloquent\Factories\Factory;

class DkrantingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dkranting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'school_name' => $this->faker->word,
        'level' => $this->faker->word,
        'position' => $this->faker->word,
        'period' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
