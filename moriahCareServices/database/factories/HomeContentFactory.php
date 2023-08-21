<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeContent>
 */
class HomeContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title'=>$this->faker->word(),
              'content'=>$this->faker->sentence(),
              'cta'=>$this->faker->word(),
              'cta_url'=>$this->faker->url(),
              'video_mp4'=>$this->faker->url(),
              'video_ogv'=>$this->faker->url(),
              'video_webm'=>$this->faker->url(),
        ];
    }
}
