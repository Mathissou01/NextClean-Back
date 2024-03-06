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
        $agents = [
            [
                'last_name' => 'Doe',
                'first_name' => 'John',
                'email' => 'john@example.com',
                'phone_number' => '1234567890',
                'hire_date' => '2022-01-01',
                'address' => '123 Main Street',
                'city' => 'Cityville',
                'postal_code' => '12345',
                'country' => 'Countryland',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Smith',
                'first_name' => 'Jane',
                'email' => 'jane@example.com',
                'phone_number' => '0987654321',
                'hire_date' => '2022-02-01',
                'address' => '456 Elm Street',
                'city' => 'Townville',
                'postal_code' => '54321',
                'country' => 'Countryland',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Brown',
                'first_name' => 'Michael',
                'email' => 'michael@example.com',
                'phone_number' => '9876543210',
                'hire_date' => '2022-03-01',
                'address' => '789 Oak Avenue',
                'city' => 'Villageville',
                'postal_code' => '67890',
                'country' => 'Countryland',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Johnson',
                'first_name' => 'Emily',
                'email' => 'emily@example.com',
                'phone_number' => '5678901234',
                'hire_date' => '2022-04-01',
                'address' => '321 Pine Road',
                'city' => 'Hamletville',
                'postal_code' => '34567',
                'country' => 'Countryland',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('agents')->insert($agents);
    }
}
