<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Create two dozen fake companies.
     *
     * @return void
     */
    public function run() : void
    {
        $faker = Faker\Factory::create();

        $companies = [];

        foreach (range(1, 24) as $index) {
            $companies[] = [
                'created_at' => now(),
                'updated_at' => now(),
                'name' => $faker->name,
                'email' => $faker->email,
                'logo_path' => 'placeholder-logo.jpg',
                'website_url' => 'http://example.org',
            ];
        }

        Company::insert($companies);
    }
}
