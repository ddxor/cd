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
                'name' => $faker->company,
                'email' => $faker->companyEmail,
                'logo_path' => null,
                'website_url' => 'http://example.org',
            ];
        }

        Company::insert($companies);
    }
}
