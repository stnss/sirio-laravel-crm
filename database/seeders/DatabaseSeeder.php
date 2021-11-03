<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $seeders = [
            UserSeeder::class,
        ];

        if (app()->environment('local')) {
            array_push($seeders, ProductSeeder::class);
        }

        $this->call($seeders);
    }
}
