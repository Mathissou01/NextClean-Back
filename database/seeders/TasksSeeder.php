<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tasks = [];

        for ($i = 0; $i < 8; $i++) {
            $tasks[] = [
                'name' => 'Task ' . ($i + 1),
                'description' => 'Description of Task ' . ($i + 1),
                'isDone' => false,
            ];
        }

        DB::table('tasks')->insert($tasks);
    }
}
