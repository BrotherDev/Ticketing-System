<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $designations = [
            ['designation_division' => 'Top Management', 'designation_name' => 'Chairman'],
            ['designation_division' => 'Top Management', 'designation_name' => 'Managing Director (MD)'],
            ['designation_division' => 'Top Management', 'designation_name' => 'Chief Executive Officer (CEO)'],
            ['designation_division' => 'Top Management', 'designation_name' => 'Director'],
            ['designation_division' => 'Top Management', 'designation_name' => 'General Manager (GM)'],
            ['designation_division' => 'Top Management', 'designation_name' => 'Proprietor'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Deputy General Manager (DGM)'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Assistant General Manager (AGM)'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Factory Manager'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Operations Manager'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Production Manager'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Quality Manager'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Human Resources Manager (HR Manager)'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Compliance Manager'],
            ['designation_division' => 'Mid-Level Management', 'designation_name' => 'Marketing & Merchandising Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Merchandising Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Industrial Engineering Manager (IE Manager)'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Maintenance Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Logistics Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Cutting Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Sewing Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Finishing Manager'],
            ['designation_division' => 'Department Heads and Supervisory Roles', 'designation_name' => 'Quality Assurance (QA) Manager'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Assistant Manager'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Senior Merchandiser'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Merchandiser'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Junior Merchandiser'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'IE Executive'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Production Executive'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Compliance Officer'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Quality Control (QC) Officer'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Maintenance Engineer'],
            ['designation_division' => 'Mid-Level and Junior Staff', 'designation_name' => 'Electrical Engineer'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Line Supervisor'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Cutting Supervisor'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Sewing Supervisor'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Finishing Supervisor'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Quality Inspector'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Store In-Charge'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Sample In-Charge'],
            ['designation_division' => 'Supervisory and Line-Level Roles', 'designation_name' => 'Pattern Master'],
            ['designation_division' => 'Operational Staff', 'designation_name' => 'Machine Operator (Cutting, Sewing, Finishing)'],
            ['designation_division' => 'Operational Staff', 'designation_name' => 'Sample Maker'],
            ['designation_division' => 'Operational Staff', 'designation_name' => 'Pressman'],
            ['designation_division' => 'Operational Staff', 'designation_name' => 'Warehouse Keeper'],
            ['designation_division' => 'Operational Staff', 'designation_name' => 'Storekeeper'],
            ['designation_division' => 'Entry-Level Positions', 'designation_name' => 'Helper (Cutting, Sewing, Finishing, General)'],
        ];

        DB::table('job_designations')->insert($designations);
    }
}
