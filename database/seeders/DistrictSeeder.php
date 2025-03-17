<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            $districts = [
                ['division_id' => 1, 'district_name' => 'Barguna'], //1
                ['division_id' => 1, 'district_name' => 'Barishal'], //2
                ['division_id' => 1, 'district_name' => 'Bhola'],   //3
                ['division_id' => 1, 'district_name' => 'Jhalokati'],   //4
                ['division_id' => 1, 'district_name' => 'Patuakhali'],  //5
                ['division_id' => 1, 'district_name' => 'Pirojpur'],    //6


                ['division_id' => 2, 'district_name' => 'Bandarban'], //7
                ['division_id' => 2, 'district_name' => 'Brahmanbaria'],    //8
                ['division_id' => 2, 'district_name' => 'Chandpur'],    //9
                ['division_id' => 2, 'district_name' => 'Chittagong'],  //10
                ['division_id' => 2, 'district_name' => 'Cumilla'], //11
                ['division_id' => 2, 'district_name' => 'Coxs Bazar'],  //12
                ['division_id' => 2, 'district_name' => 'Feni'],        //13
                ['division_id' => 2, 'district_name' => 'Khagrachhari'],    //14
                ['division_id' => 2, 'district_name' => 'Lakshmipur'],  //15
                ['division_id' => 2, 'district_name' => 'Noakhali'],    //16
                ['division_id' => 2, 'district_name' => 'Rangamati'],   //17


                ['division_id' => 3, 'district_name' => 'Dhaka'],   //18
                ['division_id' => 3, 'district_name' => 'Faridpur'],    //19
                ['division_id' => 3, 'district_name' => 'Gazipur'], //20
                ['division_id' => 3, 'district_name' => 'Gopalganj'],   //21
                ['division_id' => 3, 'district_name' => 'Kishoreganj'], //22
                ['division_id' => 3, 'district_name' => 'Madaripur'],   //23
                ['division_id' => 3, 'district_name' => 'Manikganj'],   //24
                ['division_id' => 3, 'district_name' => 'Munshiganj'],  //25
                ['division_id' => 3, 'district_name' => 'Narayanganj'], //26
                ['division_id' => 3, 'district_name' => 'Narsingdi'],   //27
                ['division_id' => 3, 'district_name' => 'Rajbari'],     //28
                ['division_id' => 3, 'district_name' => 'Shariatpur'],  //29
                ['division_id' => 3, 'district_name' => 'Tangail'],    //30



                ['division_id' => 4, 'district_name' => 'Bagerhat'],    //31
                ['division_id' => 4, 'district_name' => 'Chuadanga'],   //32
                ['division_id' => 4, 'district_name' => 'Jashore'], //33
                ['division_id' => 4, 'district_name' => 'Jhenaidah'],   //34
                ['division_id' => 4, 'district_name' => 'Khulna'],  //35
                ['division_id' => 4, 'district_name' => 'Kushtia'], //36
                ['division_id' => 4, 'district_name' => 'Magura'],  //37
                ['division_id' => 4, 'district_name' => 'Meherpur'],    //38
                ['division_id' => 4, 'district_name' => 'Narail'],  //39
                ['division_id' => 4, 'district_name' => 'Satkhira'],    //40


                ['division_id' => 5, 'district_name' => 'Jamalpur'],    //41
                ['division_id' => 5, 'district_name' => 'Mymensingh'], //42
                ['division_id' => 5, 'district_name' => 'Netrokona'],   //43
                ['division_id' => 5, 'district_name' => 'Sherpur'], //44

                ['division_id' => 6, 'district_name' => 'Bogura'],  //45
                ['division_id' => 6, 'district_name' => 'Joypurhat'],   //46
                ['division_id' => 6, 'district_name' => 'Naogaon'],     //47
                ['division_id' => 6, 'district_name' => 'Natore'],      //48
                ['division_id' => 6, 'district_name' => 'Chapainawabganj'],     //49
                ['division_id' => 6, 'district_name' => 'Pabna'],       //50
                ['division_id' => 6, 'district_name' => 'Rajshahi'],    //51
                ['division_id' => 6, 'district_name' => 'Sirajganj'],   //52

                ['division_id' => 7, 'district_name' => 'Rangpur'],     //53
                ['division_id' => 7, 'district_name' => 'Dinajpur'],    //54
                ['division_id' => 7, 'district_name' => 'Gaibandha'],   //55
                ['division_id' => 7, 'district_name' => 'Kurigram'],    //56
                ['division_id' => 7, 'district_name' => 'Lalmonirhat'], //57
                ['division_id' => 7, 'district_name' => 'Nilphamari'],  //58
                ['division_id' => 7, 'district_name' => 'Panchagarh'],  //59
                ['division_id' => 7, 'district_name' => 'Thakurgaon'],  //60

                ['division_id' => 8, 'district_name' => 'Habiganj'],    //61
                ['division_id' => 8, 'district_name' => 'Moulvibazar'], //62
                ['division_id' => 8, 'district_name' => 'Sunamganj'],   //63
                ['division_id' => 8, 'district_name' => 'Sylhet'],      //64
            ];

            foreach ($districts as $district) {
                DB::table('districts')->insert([
                    'division_id' => $district['division_id'],
                    'district_name' => $district['district_name'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
    }
}
