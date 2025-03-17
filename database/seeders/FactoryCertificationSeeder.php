<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FactoryCertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $designations = [
            ['factory_certification' => 'ISO', 'factory_certification_name' => 'ACCORD/RSC'],
            ['factory_certification' => 'SRM', 'factory_certification_name' => 'AMFORI'],
            ['factory_certification' => 'SA', 'factory_certification_name' => 'BSCI'],
            ['factory_certification' => 'SA', 'factory_certification_name' => 'SEDEX'],
            ['factory_certification' => 'SA', 'factory_certification_name' => 'ISO'],
            ['factory_certification' => 'Others', 'factory_certification_name' => 'HIGGFEM'],
            ['factory_certification' => 'Others', 'factory_certification_name' => 'GRS'],
            ['factory_certification' => 'ISO', 'factory_certification_name' => 'WRAP'],
            ['factory_certification' => 'SRM', 'factory_certification_name' => 'CONFIDENCE IN TEXTILE'],
            ['factory_certification' => 'ISO', 'factory_certification_name' => 'Others'],
            ['factory_certification' => 'Others', 'factory_certification_name' => 'ISO'],
            ['factory_certification' => 'SA', 'factory_certification_name' => 'WRAP'],
            ['factory_certification' => 'ISO', 'factory_certification_name' => 'SEDEX'],
            ['factory_certification' => 'ISO', 'factory_certification_name' => 'ISO'],
            ['factory_certification' => 'SRM', 'factory_certification_name' => 'BSCI'],

        ];

        DB::table('factory_certifications')->insert($designations);
    }
}







