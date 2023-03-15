<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'tag' => 'laravel, api, backend',
            'company'=>$this->faker->company(),
            'location'=>$this->faker->city(),
            'email'=>$this->faker->companyEmail(),
            'description'=>$this->faker->paragraph(5),
        ];
    }
}
