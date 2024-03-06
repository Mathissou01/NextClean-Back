<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;
use App\Models\Task;

use Illuminate\Support\Facades\DB;


class SessionTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtenez toutes les sessions existantes
        $sessions = Session::all();

        // Pour chaque session, attachez quelques tâches
        $sessions->each(function ($session) {
            // Obtenez un nombre aléatoire de tâches
            $tasks = Task::inRandomOrder()->limit(rand(1, 5))->get();

            // Attachez les tâches à la session actuelle
            foreach ($tasks as $task) {
                DB::table('session_tasks')->insert([
                    'session_id' => $session->id,
                    'task_id' => $task->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
