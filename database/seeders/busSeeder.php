<?php

namespace Database\Seeders;
use App\Models\Bus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class busSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bus::factory(10)->create();
    }
}
