<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word,
        'title' => $this->faker->word,
        'thumbnail' => $this->faker->word,
        'content' => $this->faker->word,
        'images' => $this->faker->word,
        'writer' => $this->faker->word,
        'created_at' => $this->faker->word,
        'updated_at' => $this->faker->word,
        'comments' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
