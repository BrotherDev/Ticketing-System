<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $types = [
            'Knit', 'Woven', 'Sweater', 'Knit Composite'
        ];

        foreach ($types as $type) {
            DB::table('factory_types')->insert([
                'factory_type_name' => $type,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
