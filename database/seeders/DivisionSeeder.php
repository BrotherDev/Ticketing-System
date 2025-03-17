<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $prioritys = [
            'Barisal', 'Chittagong', 'Dhaka',
            'Khulna', 'Mymensingh', 'Rajshahi',
            'Rangpur', 'Sylhet',

        ];

        foreach ($prioritys as $priority) {
            DB::table('divisions')->insert([
                'division_name' => $priority,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
