<?php

namespace Database\Factories;

use App\Models\DataPotensi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataPotensiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataPotensi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gudep' => $this->faker->word,
        'male_builder' => $this->faker->word,
        'famale_builder' => $this->faker->word,
        'male_member' => $this->faker->randomDigitNotNull,
        'famale_member' => $this->faker->randomDigitNotNull,
        'bantara_member' => $this->faker->randomDigitNotNull,
        'laksana_member' => $this->faker->randomDigitNotNull,
        'garuda_member' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
