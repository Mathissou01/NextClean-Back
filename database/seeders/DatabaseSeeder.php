<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        // Appel du seeder pour la table 'CampusesSeeder'
        $this->call(CampusesSeeder::class);

        // Appel du seeder pour la table 'FeedbackSeeder'
        $this->call(FeedbackSeeder::class);

        // Appel du seeder pour la table 'AgentsSeeder'
        $this->call(AgentsSeeder::class);

        // Appel du seeder pour la table 'TasksSeeder'
        $this->call(TasksSeeder::class);

        // Appel du seeder pour la table 'SessionsSeeder'
        $this->call(SessionsSeeder::class);
        
        // Appel du seeder pour la table 'SessionTaskSeeder'
        $this->call(SessionTaskSeeder::class);
    }
}
