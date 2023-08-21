<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'subpage_id'=>$this->faker->numberBetween(1,2),
            'subpage_id'=>2,
            'service_name'=>$this->faker->unique()->randomElement(['Alzheimer’s','Strokes','Dementia','Traumatic SpinalCord or Brain Injuries','Mental Health Disorder','Cancer Care']),
            'content'=>$this->faker->sentence(),
            'image'=>$this->faker->url(),
            'card_id'=>'',
            'card_id2'=>''
        ];
    }
}
