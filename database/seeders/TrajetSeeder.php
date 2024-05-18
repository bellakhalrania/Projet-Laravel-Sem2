<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trajet;

class TrajetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trajet::factory(10)->create();
        
    }
}
