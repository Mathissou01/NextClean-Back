<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Session;

class SessionsSeeder extends Seeder
{

      public function run()
    {
        // Créez quelques sessions de test
        for ($i = 0; $i < 10; $i++) {
            Session::create([
                'agent_id' => 1,
                'campus_id' => 1,
                'start_time' => now(),
                'end_time' => now()->addHours(1),
            ]);
        }
    }
}