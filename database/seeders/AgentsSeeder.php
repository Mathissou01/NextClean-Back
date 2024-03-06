<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('agents')->insert([
            'last_name' => 'John',
            'first_name' => 'Doe',
            'email' => 'john@example.com',
            'phone_number' => '1234567890',
            'hire_date' => '2022-01-01',
            'address' => '123 Main Street',
            'city' => 'Cityville',
            'postal_code' => '12345',
            'country' => 'Countryland',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
