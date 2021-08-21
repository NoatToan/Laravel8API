<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'author_id' => $this->faker->numberBetween([1, 100]),
            'title' => $this->faker->jobTitle(),
            'content' => $this->faker->realText(500, 5),
            'status' => $this->faker->numberBetween([0, 2]),
            'type' => $this->faker->numberBetween([1, 2]),
            'comment_count' => $this->faker->numberBetween(5, 50),
            'published_at' => $this->faker->date(),
        ];
    }
}
