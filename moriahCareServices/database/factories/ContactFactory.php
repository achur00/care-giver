<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone1'=>$this->faker->unique()->phoneNumber(),
            'phone2'=>$this->faker->unique()->phoneNumber(),
            'email1'=>$this->faker->unique()->safeEmail(),
            'email2'=>$this->faker->unique()->safeEmail(),
            'address'=>$this->faker->sentence(),
            'facebook'=>$this->faker->unique()->url(),
            'twitter'=>$this->faker->unique()->url(),
            'instagram'=>$this->faker->unique()->url()

            
            
        ];
    }
}
