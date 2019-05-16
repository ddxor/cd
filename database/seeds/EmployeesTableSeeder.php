<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Create a dozen fake employees for each company.
     *
     * @return void
     */
    public function run() : void
    {
        $faker = Faker\Factory::create();

        $companies = Company::all();

        $employees = [];

        foreach ($companies as $company)
        {
            foreach (range(1, 12) as $index) {
                $employees[] = [
                    'created_at' => now(),
                    'updated_at' => now(),
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'company_id' => $company->id,
                    'email' => $faker->email,
                    'phone' => $faker->phoneNumber,
                ];
            }
        }

        Employee::insert($employees);
    }
}
