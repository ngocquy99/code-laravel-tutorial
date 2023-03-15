<?php

namespace Database\Seeders;

use App\Models\Listing;
use Database\Factories\ListingFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // Listing::factory(5)->create();

        Listing::create(
            [
            'title'=> 'senioe dev',
            'tag' => 'laravel, api, backend',
            'company'=>'FPT',
            'location'=>'Hanoi',
            'email'=>'ngocquy@gnmail.com',
            'description'=>'Van ban mieu ta so 1',
        ]);

    }
}
