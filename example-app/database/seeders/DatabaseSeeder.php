<?php

namespace Database\Seeders;

use App\Models\Lekar;
use App\Models\Pacijent;
use App\Models\Pregled;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Seed laznih podataka u bazu

        Pacijent::truncate();
        Lekar::truncate();
        Pregled::truncate();

        Pacijent::factory()
            ->count(20)
            ->create();

        Lekar::factory()
            ->count(20)
            ->create();

        Pregled::factory()
            ->count(20)
            ->create();
    }
}