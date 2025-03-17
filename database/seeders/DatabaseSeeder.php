<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ExportableProductSeeder::class,
            FactoryCertificationSeeder::class,
            FactoryTypeSeeder::class,
            FactoryZoneSeeder::class,
            JobDesignationSeeder::class,
            PrioritySeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
            ThanaSeeder::class,
            UserSeeder::class,
        ]);
    }
}
