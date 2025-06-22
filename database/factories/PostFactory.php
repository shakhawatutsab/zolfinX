<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'title'=> $this->faker->realText(30),
                'thumbnail'=> $this->faker->imageUrl(640, 480, 'hill', true),
                'excerpt' => $this->faker->sentence(),
                'content' =>$this->faker->text(500),
                'user_id' =>$this->faker->numberBetween(1,5),
                'views' =>$this->faker->numberBetween(1,5),
                'slug' => $this->faker->slug()
        ];
    }
}
