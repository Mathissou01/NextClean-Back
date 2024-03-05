<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  public function run(): void
{
    for ($i = 1; $i <= 4; $i++) {
            DB::table('feedback')->insert([
                'campus_id' => $i,
                'happy' => rand(0, 20),
                'neutral' => rand(0, 20),
                'bad' => rand(0, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
}
}