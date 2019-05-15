<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Create a default user as per the required spec.
     *
     * @return void
     */
    public function run() : void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
