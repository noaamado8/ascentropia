<?php

namespace Database\Seeders;

use App\Models\Socix;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


    // Socix::truncate();

        $this->call([
            SocixSeeder::class

        ]);
      
    }
}
