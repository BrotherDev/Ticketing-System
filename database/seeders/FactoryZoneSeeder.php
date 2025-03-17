<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactoryZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $zones = [
            'B. Baria', 'Bagerhat', 'Bandarban', 'Barisal', 'Bhola', 'Bogra', 'Borguna',
            'Chandpur', 'Chapainawabganj', 'Chittagong', 'Chuadanga', 'Comilla',
            'Cox\'s Bazar', 'Dhaka', 'Dinajpur', 'Faridpur', 'Feni', 'Gaibandha',
            'Gazipur', 'Gopalgonj', 'Hobigonj', 'Jamalpur', 'Jessore', 'Jhalokathi',
            'Jhenaidah', 'Joypurhat', 'Khagrachari', 'Khulna', 'Kishorgonj',
            'Kurigram', 'Kushtia', 'Lalmonirhat', 'Laxmipur', 'Madaripur', 'Magura',
            'Manikgonj', 'Meherpur', 'MoulaviBazar', 'Munshigonj', 'Mymensingh',
            'Naogaon', 'Narail', 'Narayangonj', 'Narshingdi', 'Natore', 'Netrokona',
            'Nilphamari', 'Noakhali', 'Pabna', 'Panchagahr', 'Patuakhali', 'Pirojpur',
            'Rajbari', 'Rajshahi', 'Rangamati', 'Rangpur', 'Satkhira', 'Shariatpur',
            'Sherpur', 'Sirajgonj', 'Sunamgonj', 'Sylhet', 'Tangail', 'Thakurgaon'
        ];

        foreach ($zones as $zone) {
            DB::table('factory_zones')->insert([
                'factory_zone_name' => $zone,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
