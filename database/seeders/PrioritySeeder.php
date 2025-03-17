<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $prioritys = [
            'One', 'One', 'One',
            'Two', 'ii', '2',
            '3', 'iii', 'Three',
            '4', 'Four', 'iv',
            'Five', '5', 'v',
            'Six', '6', 'vi',
            '7', 'Seven', 'vii',
            'viii', '8', 'Eight',
            'Nime', 'ix', '9',
            'x', '10', 'Ten',

        ];

        foreach ($prioritys as $priority) {
            DB::table('priorities')->insert([
                'priority_name' => $priority,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
