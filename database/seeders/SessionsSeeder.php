<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfSessionsPerCampus = 5; // Nombre de sessions par campus

        // Parcourir chaque campus
        for ($campusId = 1; $campusId <= 4; $campusId++) {
            // Générer plusieurs sessions pour chaque campus
            for ($i = 0; $i < $numberOfSessionsPerCampus; $i++) {
                $startTime = Carbon::now()->addDays(rand(1, 30))->addHours(rand(8, 16))->addMinutes(rand(0, 59));
                $endTime = $startTime->copy()->addHours(rand(1, 4))->addMinutes(rand(0, 59));

                $sessions[] = [
                    'task_id' => rand(1, 10), // Remplacer 10 par l'ID maximal de votre table de tâches
                    'agent_id' => rand(1, 10), // Remplacer 10 par l'ID maximal de votre table d'agents
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'campus_id' => $campusId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('sessions')->insert($sessions);
    }
}
