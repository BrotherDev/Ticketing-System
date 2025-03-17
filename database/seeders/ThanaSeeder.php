<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $thanas = [
            //Barguna
            ['district_id' => 1, 'thana_name' => 'Amtali Upazila'], //1
            ['district_id' => 1, 'thana_name' => 'Bamna Upazila'], //2
            ['district_id' => 1, 'thana_name' => 'Barguna Sadar Upazila'], //3
            ['district_id' => 1, 'thana_name' => 'Betagi Upazila'], //4
            ['district_id' => 1, 'thana_name' => 'Patharghata Upazila'], //5
            ['district_id' => 1, 'thana_name' => 'Taltali Upazila'], //6

            //Barishal
            ['district_id' => 2, 'thana_name' => 'Agailjhara Upazila'], //1
            ['district_id' => 2, 'thana_name' => 'Babuganj Upazila'], //2
            ['district_id' => 2, 'thana_name' => 'Bakerganj Upazila'], //3
            ['district_id' => 2, 'thana_name' => 'Banaripara Upazila'], //4
            ['district_id' => 2, 'thana_name' => 'Gaurnadi Upazila'], //5
            ['district_id' => 2, 'thana_name' => 'Hizla Upazila'], //6
            ['district_id' => 2, 'thana_name' => 'Barishal Sadar Upazila'], //7
            ['district_id' => 2, 'thana_name' => 'Mehendiganj Upazila'], //8
            ['district_id' => 2, 'thana_name' => 'Muladi Upazila'], //9
            ['district_id' => 2, 'thana_name' => 'Wazirpur Upazila'], //10

            //Bhola
            ['district_id' => 3, 'thana_name' => 'Bhola Sadar Upazila'], //1
            ['district_id' => 3, 'thana_name' => 'Burhanuddin Upazila'], //2
            ['district_id' => 3, 'thana_name' => 'Char Fasson Upazila'], //3
            ['district_id' => 3, 'thana_name' => 'Daulatkhan Upazila'], //4
            ['district_id' => 3, 'thana_name' => 'Lalmohan Upazila'], //5
            ['district_id' => 3, 'thana_name' => 'Manpura Upazila'], //6
            ['district_id' => 3, 'thana_name' => 'Tazumuddin Upazila'], //7

            //Jhalokati
            ['district_id' => 4, 'thana_name' => 'Jhalokati Sadar Upazila'], //1
            ['district_id' => 4, 'thana_name' => 'Kathalia Upazila'], //2
            ['district_id' => 4, 'thana_name' => 'Nalchity Upazila'], //3
            ['district_id' => 4, 'thana_name' => 'Rajapur Upazila'], //4

            //Patuakhali
            ['district_id' => 5, 'thana_name' => 'Bauphal Upazila'], //1
            ['district_id' => 5, 'thana_name' => 'Dashmina Upazila'], //2
            ['district_id' => 5, 'thana_name' => 'Galachipa Upazila'], //3
            ['district_id' => 5, 'thana_name' => 'Kalapara Upazila'], //4
            ['district_id' => 5, 'thana_name' => 'Mirzaganj Upazila'], //5
            ['district_id' => 5, 'thana_name' => 'Patuakhali Sadar Upazila'], //6
            ['district_id' => 5, 'thana_name' => 'Rangabali Upazila'], //7
            ['district_id' => 5, 'thana_name' => 'Dumki Upazila'], //8

            //Pirojpur
            ['district_id' => 6, 'thana_name' => 'Bhandaria Upazila'], //1
            ['district_id' => 6, 'thana_name' => 'Kawkhali Upazila'], //2
            ['district_id' => 6, 'thana_name' => 'Mathbaria Upazila'], //3
            ['district_id' => 6, 'thana_name' => 'Nazirpur Upazila'], //4
            ['district_id' => 6, 'thana_name' => 'Pirojpur Sadar Upazila'], //5
            ['district_id' => 6, 'thana_name' => 'Nesarabad (Swarupkati) Upazila'], //6
            ['district_id' => 6, 'thana_name' => 'Indurkani Upazila'], //7


            // Bandarban District
            ['district_id' => 7, 'thana_name' => 'Ali Kadam Upazila'], //1
            ['district_id' => 7, 'thana_name' => 'Bandarban Sadar Upazila'], //2
            ['district_id' => 7, 'thana_name' => 'Lama Upazila'], //3
            ['district_id' => 7, 'thana_name' => 'Naikhongchhari Upazila'], //4
            ['district_id' => 7, 'thana_name' => 'Rowangchhari Upazila'], //5
            ['district_id' => 7, 'thana_name' => 'Ruma Upazila'], //6
            ['district_id' => 7, 'thana_name' => 'Thanchi Upazila'], //7


            // Brahmanbaria District
            ['district_id' => 8, 'thana_name' => 'Ashuganj Upazila'], //1
            ['district_id' => 8, 'thana_name' => 'Bancharampur Upazila'], //2
            ['district_id' => 8, 'thana_name' => 'Brahmanbaria Sadar Upazila'], //3
            ['district_id' => 8, 'thana_name' => 'Kasba Upazila'], //4
            ['district_id' => 8, 'thana_name' => 'Nabinagar Upazila'], //5
            ['district_id' => 8, 'thana_name' => 'Nasirnagar Upazila'], //6
            ['district_id' => 8, 'thana_name' => 'Sarail Upazila'], //7
            ['district_id' => 8, 'thana_name' => 'Ashuganj Upazila'], //8
            ['district_id' => 8, 'thana_name' => 'Bijoynagar Upazila'], //9


            // Chandpur District
            ['district_id' => 9, 'thana_name' => 'Chandpur Sadar Upazila'], //1
            ['district_id' => 9, 'thana_name' => 'Faridganj Upazila'], //2
            ['district_id' => 9, 'thana_name' => 'Haimchar Upazila'], //3
            ['district_id' => 9, 'thana_name' => 'Haziganj Upazila'], //4
            ['district_id' => 9, 'thana_name' => 'Kachua Upazila'], //5
            ['district_id' => 9, 'thana_name' => 'Matlab Dakkhin Upazila'], //6
            ['district_id' => 9, 'thana_name' => 'Matlab Uttar Upazila'], //7
            ['district_id' => 9, 'thana_name' => 'Shahrasti Upazila'], //8


            // Chittagong District
            ['district_id' => 10, 'thana_name' => 'Anwara Upazila'], //1
            ['district_id' => 10, 'thana_name' => 'Banshkhali Upazila'], //2
            ['district_id' => 10, 'thana_name' => 'Boalkhali Upazila'], //3
            ['district_id' => 10, 'thana_name' => 'Chandanaish Upazila'], //4
            ['district_id' => 10, 'thana_name' => 'Fatikchhari Upazila'], //5
            ['district_id' => 10, 'thana_name' => 'Hathazari Upazila'], //6
            ['district_id' => 10, 'thana_name' => 'Lohagara Upazila'], //7
            ['district_id' => 10, 'thana_name' => 'Mirsharai Upazila'], //8
            ['district_id' => 10, 'thana_name' => 'Patiya Upazila'], //9
            ['district_id' => 10, 'thana_name' => 'Rangunia Upazila'], //10
            ['district_id' => 10, 'thana_name' => 'Raozan Upazila'], //11
            ['district_id' => 10, 'thana_name' => 'Sandwip Upazila'], //12
            ['district_id' => 10, 'thana_name' => 'Satkania Upazila'], //13
            ['district_id' => 10, 'thana_name' => 'Sitakunda Upazila'], //14
            ['district_id' => 10, 'thana_name' => 'Karnaphuli Upazila'], //15


            // Cumilla District
            ['district_id' => 11, 'thana_name' => 'Barura Upazila'], //1
            ['district_id' => 11, 'thana_name' => 'Brahmanpara Upazila'], //2
            ['district_id' => 11, 'thana_name' => 'Burichang Upazila'], //3
            ['district_id' => 11, 'thana_name' => 'Chandina Upazila'], //4
            ['district_id' => 11, 'thana_name' => 'Chauddagram Upazila'], //5
            ['district_id' => 11, 'thana_name' => 'Comilla Adarsha Sadar Upazila'], //6
            ['district_id' => 11, 'thana_name' => 'Daudkandi Upazila'], //7
            ['district_id' => 11, 'thana_name' => 'Debidwar Upazila'], //8
            ['district_id' => 11, 'thana_name' => 'Homna Upazila'], //9
            ['district_id' => 11, 'thana_name' => 'Laksam Upazila'], //10
            ['district_id' => 11, 'thana_name' => 'Lalmai Upazila'], //11
            ['district_id' => 11, 'thana_name' => 'Muradnagar Upazila'], //12
            ['district_id' => 11, 'thana_name' => 'Nangalkot Upazila'], //13
            ['district_id' => 11, 'thana_name' => 'Meghna Upazila'], //14
            ['district_id' => 11, 'thana_name' => 'Titas Upazila'], //15
            ['district_id' => 11, 'thana_name' => 'Monohorgonj Upazila'], //16
            ['district_id' => 11, 'thana_name' => 'Meghna Upazila'], //17


            // Coxs Bazar District
            ['district_id' => 12, 'thana_name' => 'Chakaria Upazila'], //1
            ['district_id' => 12, 'thana_name' => 'Coxs Bazar Sadar Upazila'], //2
            ['district_id' => 12, 'thana_name' => 'Maheshkhali Upazila'], //3
            ['district_id' => 12, 'thana_name' => 'Kutubdia Upazila'], //4
            ['district_id' => 12, 'thana_name' => 'Ramu Upazila'], //5
            ['district_id' => 12, 'thana_name' => 'Teknaf Upazila'], //6
            ['district_id' => 12, 'thana_name' => 'Ukhia Upazila'], //7
            ['district_id' => 12, 'thana_name' => 'Pekua Upazila'], //8
            ['district_id' => 12, 'thana_name' => 'Eidgaon Upazila'], //9



            // Feni District
            ['district_id' => 13, 'thana_name' => 'Chhagalnaiya Upazila'], //1
            ['district_id' => 13, 'thana_name' => 'Daganbhuiyan Upazila'], //2
            ['district_id' => 13, 'thana_name' => 'Feni Sadar Upazila'], //3
            ['district_id' => 13, 'thana_name' => 'Parshuram Upazila'], //4
            ['district_id' => 13, 'thana_name' => 'Fulgazi Upazila'], //5
            ['district_id' => 13, 'thana_name' => 'Pashuram Upazila'], //6


            // Khagrachhari District
            ['district_id' => 14, 'thana_name' => 'Dighinala Upazila'], //1
            ['district_id' => 14, 'thana_name' => 'Khagrachhari Sadar Upazila'], //2
            ['district_id' => 14, 'thana_name' => 'Lakshmichhari Upazila'], //3
            ['district_id' => 14, 'thana_name' => 'Mahalchhari Upazila'], //4
            ['district_id' => 14, 'thana_name' => 'Manikchhari Upazila'], //5
            ['district_id' => 14, 'thana_name' => 'Matiranga Upazila'], //6
            ['district_id' => 14, 'thana_name' => 'Panchhari Upazila'], //7
            ['district_id' => 14, 'thana_name' => 'Ramgarh Upazila'], //8
            ['district_id' => 14, 'thana_name' => 'Guimara Upazila'], //9


            // Lakshmipur District
            ['district_id' => 15, 'thana_name' => 'Kamalnagar Upazila'], //1
            ['district_id' => 15, 'thana_name' => 'Lakshmipur Sadar Upazila'], //2
            ['district_id' => 15, 'thana_name' => 'Raipur Upazila'], //3
            ['district_id' => 15, 'thana_name' => 'Ramganj Upazila'], //4
            ['district_id' => 15, 'thana_name' => 'Ramgati Upazila'], //5



            // Noakhali District
            ['district_id' => 16, 'thana_name' => 'Begumganj Upazila'], //1
            ['district_id' => 16, 'thana_name' => 'Chatkhil Upazila'], //2
            ['district_id' => 16, 'thana_name' => 'Companiganj Upazila'], //3
            ['district_id' => 16, 'thana_name' => 'Hatiya Upazila'], //4
            ['district_id' => 16, 'thana_name' => 'Noakhali Sadar Upazila'], //5
            ['district_id' => 16, 'thana_name' => 'Senbagh Upazila'], //6
            ['district_id' => 16, 'thana_name' => 'Subarnachar Upazila'], //7
            ['district_id' => 16, 'thana_name' => 'Sonaimuri Upazila'], //7
            ['district_id' => 16, 'thana_name' => 'Kabirhat Upazila'], //7


            // Rangamati District
            ['district_id' => 17, 'thana_name' => 'Baghaichhari Upazila'], //1
            ['district_id' => 17, 'thana_name' => 'Barkal Upazila'], //2
            ['district_id' => 17, 'thana_name' => 'Kaptai Upazila'], //3
            ['district_id' => 17, 'thana_name' => 'Juraichhari Upazila'], //4
            ['district_id' => 17, 'thana_name' => 'Langadu Upazila'], //5
            ['district_id' => 17, 'thana_name' => 'Naniarchar Upazila'], //6
            ['district_id' => 17, 'thana_name' => 'Rajasthali Upazila'], //7
            ['district_id' => 17, 'thana_name' => 'Kawkhali (Betbunia) Upazila'], //8
            ['district_id' => 17, 'thana_name' => 'Belaichhari Upazila'], //9
            ['district_id' => 17, 'thana_name' => 'Rangamati Sadar Upazila'], //10


            // Dhaka District
            ['district_id' => 18, 'thana_name' => 'Adabar Thana'], //1
            ['district_id' => 18, 'thana_name' => 'Badda Thana'], //2
            ['district_id' => 18, 'thana_name' => 'Bangsal Thana'], //3
            ['district_id' => 18, 'thana_name' => 'Bhashantek Thana'], //4
            ['district_id' => 18, 'thana_name' => 'Cantonment Thana'], //5
            ['district_id' => 18, 'thana_name' => 'Chowkbazar Thana'], //6
            ['district_id' => 18, 'thana_name' => 'Darus Salam Thana'], //7
            ['district_id' => 18, 'thana_name' => 'Demra Thana'], //8
            ['district_id' => 18, 'thana_name' => 'Dhanmondi Thana'], //9
            ['district_id' => 18, 'thana_name' => 'Gendaria Thana'], //10
            ['district_id' => 18, 'thana_name' => 'Gulshan Thana'], //11
            ['district_id' => 18, 'thana_name' => 'Hatirjheel Thana'], //12
            ['district_id' => 18, 'thana_name' => 'Hazaribagh Thana'], //13
            ['district_id' => 18, 'thana_name' => 'Jatrabari Thana'], //14
            ['district_id' => 18, 'thana_name' => 'Kadamtali Thana'], //15
            ['district_id' => 18, 'thana_name' => 'Kafrul Thana'], //16
            ['district_id' => 18, 'thana_name' => 'Kalabagan'], //17
            ['district_id' => 18, 'thana_name' => 'Kamrangirchar Thana'], //18
            ['district_id' => 18, 'thana_name' => 'Khilgaon Thana'], //19
            ['district_id' => 18, 'thana_name' => 'Khilkhet Thana'], //20
            ['district_id' => 18, 'thana_name' => 'Kotwali Thana (Dhaka)'], //21
            ['district_id' => 18, 'thana_name' => 'Lalbagh Thana'], //22
            ['district_id' => 18, 'thana_name' => 'Mirpur Model Thana'], //23
            ['district_id' => 18, 'thana_name' => 'Mohammadpur Thana'], //24
            ['district_id' => 18, 'thana_name' => 'Motijheel Thana'], //25
            ['district_id' => 18, 'thana_name' => 'Mugda'], //26
            ['district_id' => 18, 'thana_name' => 'New Market Thana'], //27
            ['district_id' => 18, 'thana_name' => 'Pallabi Thana'], //28
            ['district_id' => 18, 'thana_name' => 'Paltan'], //29
            ['district_id' => 18, 'thana_name' => 'Ramna Thana'], //30
            ['district_id' => 18, 'thana_name' => 'Rampura Thana'], //31
            ['district_id' => 18, 'thana_name' => 'Sabujbagh Thana'], //32
            ['district_id' => 18, 'thana_name' => 'Shah Ali Thana'], //33
            ['district_id' => 18, 'thana_name' => 'Shahbag'], //34
            ['district_id' => 18, 'thana_name' => 'Shahjahanpur Thana'], //35
            ['district_id' => 18, 'thana_name' => 'Sher-e-Bangla Nagar'], //36
            ['district_id' => 18, 'thana_name' => 'Shyampur Thana'], //37
            ['district_id' => 18, 'thana_name' => 'Sutrapur Thana'], //38
            ['district_id' => 18, 'thana_name' => 'Tejgaon Industrial Area Thana'], //39
            ['district_id' => 18, 'thana_name' => 'Tejgaon Thana'], //40
            ['district_id' => 18, 'thana_name' => 'Turag Thana'], //41
            ['district_id' => 18, 'thana_name' => 'Uttara East Thana'], //42
            ['district_id' => 18, 'thana_name' => 'Vatara Thana'], //43
            ['district_id' => 18, 'thana_name' => 'Wari Thana'], //44


            // Faridpur District
            ['district_id' => 19, 'thana_name' => 'Alfadanga Upazila'], //1
            ['district_id' => 19, 'thana_name' => 'Bhanga Upazila'], //2
            ['district_id' => 19, 'thana_name' => 'Boalmari Upazila'], //3
            ['district_id' => 19, 'thana_name' => 'Charbhadrasan Upazila'], //4
            ['district_id' => 19, 'thana_name' => 'Faridpur Sadar Upazila'], //5
            ['district_id' => 19, 'thana_name' => 'Madukhali Upazila'], //6
            ['district_id' => 19, 'thana_name' => 'Nagarkanda Upazila'], //7
            ['district_id' => 19, 'thana_name' => 'Sadarpur Upazila'], //8
            ['district_id' => 19, 'thana_name' => 'Saltha Upazila'], //9



            // Gazipur District
            ['district_id' => 20, 'thana_name' => 'Gazipur Sadar Upazila'], //1
            ['district_id' => 20, 'thana_name' => 'Kaliakair Upazila'], //2
            ['district_id' => 20, 'thana_name' => 'Kaliganj Upazila'], //3
            ['district_id' => 20, 'thana_name' => 'Kapasia Upazila'], //4
            ['district_id' => 20, 'thana_name' => 'Sreepur Upazila'], //5
            ['district_id' => 20, 'thana_name' => 'Tongi'], //6


            // Gopalganj District
            ['district_id' => 21, 'thana_name' => 'Gopalganj Sadar Upazila'], //1
            ['district_id' => 21, 'thana_name' => 'Kashiani Upazila'], //2
            ['district_id' => 21, 'thana_name' => 'Kotalipara Upazila'], //3
            ['district_id' => 21, 'thana_name' => 'Muksudpur Upazila'], //4
            ['district_id' => 21, 'thana_name' => 'Tungipara Upazila'], //5


            // Kishoreganj District
            ['district_id' => 22, 'thana_name' => 'Austagram Upazila'], //1
            ['district_id' => 22, 'thana_name' => 'Bajitpur Upazila'], //2
            ['district_id' => 22, 'thana_name' => 'Bhairab Upazila'], //3
            ['district_id' => 22, 'thana_name' => 'Hossainpur Upazila'], //4
            ['district_id' => 22, 'thana_name' => 'Itna Upazila'], //5
            ['district_id' => 22, 'thana_name' => 'Karimganj Upazila'], //6
            ['district_id' => 22, 'thana_name' => 'Katiadi Upazila'], //7
            ['district_id' => 22, 'thana_name' => 'Kishoreganj Sadar Upazila'], //8
            ['district_id' => 22, 'thana_name' => 'Kuliarchar Upazila'], //9
            ['district_id' => 22, 'thana_name' => 'Mithamain Upazila'], //10
            ['district_id' => 22, 'thana_name' => 'Nikli Upazila'], //11
            ['district_id' => 22, 'thana_name' => 'Pakundia Upazila'], //12
            ['district_id' => 22, 'thana_name' => 'Tarail Upazila'], //13


            // Madaripur District
            ['district_id' => 23, 'thana_name' => 'Kalkini Upazila'], //1
            ['district_id' => 23, 'thana_name' => 'Madaripur Sadar Upazila'], //2
            ['district_id' => 23, 'thana_name' => 'Rajoir Upazila'], //3
            ['district_id' => 23, 'thana_name' => 'Shibchar Upazila'], //4
            ['district_id' => 23, 'thana_name' => 'Dasar Upazila'], //5


            // Manikganj District
            ['district_id' => 24, 'thana_name' => 'Daulatpur Upazila'], //1
            ['district_id' => 24, 'thana_name' => 'Gheor Upazila'], //2
            ['district_id' => 24, 'thana_name' => 'Harirampur Upazila'], //3
            ['district_id' => 24, 'thana_name' => 'Manikganj Sadar Upazila'], //4
            ['district_id' => 24, 'thana_name' => 'Saturia Upazila'], //5
            ['district_id' => 24, 'thana_name' => 'Shibalaya Upazila'], //6
            ['district_id' => 24, 'thana_name' => 'Singair Upazila'], //7


            // Munshiganj District
            ['district_id' => 25, 'thana_name' => 'Gazaria Upazila'], //1
            ['district_id' => 25, 'thana_name' => 'Lohajang Upazila'], //2
            ['district_id' => 25, 'thana_name' => 'Munshiganj Sadar Upazila'], //3
            ['district_id' => 25, 'thana_name' => 'Sirajdikhan Upazila'], //4
            ['district_id' => 25, 'thana_name' => 'Sreenagar Upazila'], //5
            ['district_id' => 25, 'thana_name' => 'Tongibari Upazila'], //6



            // Narayanganj District
            ['district_id' => 26, 'thana_name' => 'Araihazar Upazila'], //1
            ['district_id' => 26, 'thana_name' => 'Baidder Bazar Upazila'], //2
            ['district_id' => 26, 'thana_name' => 'Bandar Upazila'], //3
            ['district_id' => 26, 'thana_name' => 'Narayanganj Sadar Upazila'], //4
            ['district_id' => 26, 'thana_name' => 'Rupganj Upazila'], //5
            ['district_id' => 26, 'thana_name' => 'Sonargaon Upazila'], //6



            // Narsingdi District
            ['district_id' => 27, 'thana_name' => 'Belabo Upazila'], //1
            ['district_id' => 27, 'thana_name' => 'Monohardi Upazila'], //2
            ['district_id' => 27, 'thana_name' => 'Narsingdi Sadar Upazila'], //3
            ['district_id' => 27, 'thana_name' => 'Palash Upazila'], //4
            ['district_id' => 27, 'thana_name' => 'Raipura Upazila'], //5
            ['district_id' => 27, 'thana_name' => 'Shibpur Upazila'], //6


            // Rajbari District
            ['district_id' => 28, 'thana_name' => 'Baliakandi Upazila'], //1
            ['district_id' => 28, 'thana_name' => 'Goalandaghat Upazila'], //2
            ['district_id' => 28, 'thana_name' => 'Pangsha Upazila'], //3
            ['district_id' => 28, 'thana_name' => 'Rajbari Sadar Upazila'], //4
            ['district_id' => 28, 'thana_name' => 'Kalukhali Upazila'], //4


            // Shariatpur District
            ['district_id' => 29, 'thana_name' => 'Bhedarganj Upazila'], //1
            ['district_id' => 29, 'thana_name' => 'Damudya Upazila'], //2
            ['district_id' => 29, 'thana_name' => 'Gosairhat Upazila'], //3
            ['district_id' => 29, 'thana_name' => 'Naria Upazila'], //4
            ['district_id' => 29, 'thana_name' => 'Shariatpur Sadar Upazila'], //5
            ['district_id' => 29, 'thana_name' => 'Zajira Upazila'], //6


            // Tangail District
            ['district_id' => 30, 'thana_name' => 'Basail Upazila'], //1
            ['district_id' => 30, 'thana_name' => 'Bhuapur Upazila'], //2
            ['district_id' => 30, 'thana_name' => 'Delduar Upazila'], //3
            ['district_id' => 30, 'thana_name' => 'Dhanbari Upazila'], //4
            ['district_id' => 30, 'thana_name' => 'Ghatail Upazila'], //5
            ['district_id' => 30, 'thana_name' => 'Gopalpur Upazila'], //6
            ['district_id' => 30, 'thana_name' => 'Kalihati Upazila'], //7
            ['district_id' => 30, 'thana_name' => 'Madhupur Upazila'], //8
            ['district_id' => 30, 'thana_name' => 'Mirzapur Upazila'], //9
            ['district_id' => 30, 'thana_name' => 'Nagarpur Upazila'], //10
            ['district_id' => 30, 'thana_name' => 'Sakhipur Upazila'], //11
            ['district_id' => 30, 'thana_name' => 'Tangail Sadar Upazila'], //12


            // Bagerhat District
            ['district_id' => 31, 'thana_name' => 'Bagerhat Sadar Upazila'], //1
            ['district_id' => 31, 'thana_name' => 'Chitalmari Upazila'], //2
            ['district_id' => 31, 'thana_name' => 'Fakirhat Upazila'], //3
            ['district_id' => 31, 'thana_name' => 'Kachua Upazila'], //4
            ['district_id' => 31, 'thana_name' => 'Mollahat Upazila'], //5
            ['district_id' => 31, 'thana_name' => 'Mongla Upazila'], //6
            ['district_id' => 31, 'thana_name' => 'Morrelganj Upazila'], //7
            ['district_id' => 31, 'thana_name' => 'Rampal Upazila'], //8
            ['district_id' => 31, 'thana_name' => 'Sarankhola Upazila'], //9



            // Chuadanga District
            ['district_id' => 32, 'thana_name' => 'Alamdanga Upazila'], //1
            ['district_id' => 32, 'thana_name' => 'Chuadanga Sadar Upazila'], //2
            ['district_id' => 32, 'thana_name' => 'Damurhuda Upazila'], //3
            ['district_id' => 32, 'thana_name' => 'Jibannagar Upazila'], //4


            // Jessore District
            ['district_id' => 33, 'thana_name' => 'Abhaynagar Upazila'], //1
            ['district_id' => 33, 'thana_name' => 'Bagherpara Upazila'], //2
            ['district_id' => 33, 'thana_name' => 'Chaugachha Upazila'], //3
            ['district_id' => 33, 'thana_name' => 'Jessore Sadar Upazila'], //4
            ['district_id' => 33, 'thana_name' => 'Jhikargachha Upazila'], //5
            ['district_id' => 33, 'thana_name' => 'Keshabpur Upazila'], //6
            ['district_id' => 33, 'thana_name' => 'Monirampur Upazila'], //7
            ['district_id' => 33, 'thana_name' => 'Noapara Upazila'], //8
            ['district_id' => 33, 'thana_name' => 'Sharsha Upazila'], //9



            // Jhenaidah District
            ['district_id' => 34, 'thana_name' => 'Harinakundu Upazila'], //1
            ['district_id' => 34, 'thana_name' => 'Jhenaidah Sadar Upazila'], //2
            ['district_id' => 34, 'thana_name' => 'Kaliganj Upazila'], //3
            ['district_id' => 34, 'thana_name' => 'Kotchandpur Upazila'], //4
            ['district_id' => 34, 'thana_name' => 'Maheshpur Upazila'], //5
            ['district_id' => 34, 'thana_name' => 'Shailkupa Upazila'], //6


            // Khulna District
            ['district_id' => 35, 'thana_name' => 'Batiaghata Upazila'], //1
            ['district_id' => 35, 'thana_name' => 'Dacope Upazila'], //2
            ['district_id' => 35, 'thana_name' => 'Dumuria Upazila'], //3
            ['district_id' => 35, 'thana_name' => 'Dighalia Upazila'], //4
            ['district_id' => 35, 'thana_name' => 'Koyra Upazila'], //5
            ['district_id' => 35, 'thana_name' => 'Paikgachha Upazila'], //6
            ['district_id' => 35, 'thana_name' => 'Phultala Upazila'], //7
            ['district_id' => 35, 'thana_name' => 'Rupsha Upazila'], //8
            ['district_id' => 35, 'thana_name' => 'Terokhada Upazila'], //9


            // Kushtia District
            ['district_id' => 36, 'thana_name' => 'Bheramara Upazila'], //1
            ['district_id' => 36, 'thana_name' => 'Daulatpur Upazila'], //2
            ['district_id' => 36, 'thana_name' => 'Khoksa Upazila'], //3
            ['district_id' => 36, 'thana_name' => 'Kumarkhali Upazila'], //4
            ['district_id' => 36, 'thana_name' => 'Kushtia Sadar Upazila'], //5
            ['district_id' => 36, 'thana_name' => 'Mirpur Upazila'], //6


            // Magura District
            ['district_id' => 37, 'thana_name' => 'Magura Sadar Upazila'], //1
            ['district_id' => 37, 'thana_name' => 'Mohammadpur Upazila'], //2
            ['district_id' => 37, 'thana_name' => 'Shalikha Upazila'], //3
            ['district_id' => 37, 'thana_name' => 'Sreepur Upazila'], //4


            // Meherpur District
            ['district_id' => 38, 'thana_name' => 'Gangni Upazila'], //1
            ['district_id' => 38, 'thana_name' => 'Meherpur Sadar Upazila'], //2
            ['district_id' => 38, 'thana_name' => 'Mujibnagar Upazila'], //2


            // Narail District
            ['district_id' => 39, 'thana_name' => 'Kalia Upazila'], //1
            ['district_id' => 39, 'thana_name' => 'Lohagara Upazila'], //2
            ['district_id' => 39, 'thana_name' => 'Narail Sadar Upazila'], //3


            // Satkhira District
            ['district_id' => 40, 'thana_name' => 'Assasuni Upazila'], //1
            ['district_id' => 40, 'thana_name' => 'Debhata Upazila'], //2
            ['district_id' => 40, 'thana_name' => 'Kalaroa Upazila'], //3
            ['district_id' => 40, 'thana_name' => 'Kaliganj Upazila'], //4
            ['district_id' => 40, 'thana_name' => 'Satkhira Sadar Upazila'], //5
            ['district_id' => 40, 'thana_name' => 'Shyamnagar Upazila'], //6
            ['district_id' => 40, 'thana_name' => 'Tala Upazila'], //7


            //Jamalpur District
            ['district_id' => 41, 'thana_name' => 'Bakshiganj Upazila'], //1
            ['district_id' => 41, 'thana_name' => 'Dewanganj Upazila'], //2
            ['district_id' => 41, 'thana_name' => 'Islampur Upazila'], //3
            ['district_id' => 41, 'thana_name' => 'Jamalpur Sadar Upazila'], //4
            ['district_id' => 41, 'thana_name' => 'Madarganj Upazila'], //5
            ['district_id' => 41, 'thana_name' => 'Melandaha Upazila'], //6
            ['district_id' => 41, 'thana_name' => 'Sarishabari Upazila'], //7


            // Mymensingh District
            ['district_id' => 42, 'thana_name' => 'Bhaluka Upazila'], //1
            ['district_id' => 42, 'thana_name' => 'Fulbaria Upazila'], //2
            ['district_id' => 42, 'thana_name' => 'Gaffargaon Upazila'], //3
            ['district_id' => 42, 'thana_name' => 'Gauripur Upazila'], //4
            ['district_id' => 42, 'thana_name' => 'Haluaghat Upazila'], //5
            ['district_id' => 42, 'thana_name' => 'Isshwargonj Upazila'], //6
            ['district_id' => 42, 'thana_name' => 'Muktagachha Upazila'], //7
            ['district_id' => 42, 'thana_name' => 'Mymensingh Sadar Upazila'], //8
            ['district_id' => 42, 'thana_name' => 'Nandail Upazila'], //9
            ['district_id' => 42, 'thana_name' => 'Phulpur Upazila'], //10
            ['district_id' => 42, 'thana_name' => 'Trishal Upazila'], //11
            ['district_id' => 42, 'thana_name' => 'Dhobaura Upazila'], //12
            ['district_id' => 42, 'thana_name' => 'Bhaluka Upazila'], //13


            // Netrokona District
            ['district_id' => 43, 'thana_name' => 'Atpara Upazila'], //1
            ['district_id' => 43, 'thana_name' => 'Barhatta Upazila'], //2
            ['district_id' => 43, 'thana_name' => 'Durgapur Upazila'], //3
            ['district_id' => 43, 'thana_name' => 'Khaliajuri Upazila'], //4
            ['district_id' => 43, 'thana_name' => 'Kalmakanda Upazila'], //5
            ['district_id' => 43, 'thana_name' => 'Madan Upazila'], //6
            ['district_id' => 43, 'thana_name' => 'Mohanganj Upazila'], //7
            ['district_id' => 43, 'thana_name' => 'Netrokona Sadar Upazila'], //8
            ['district_id' => 43, 'thana_name' => 'Purbadhala Upazila'], //9
            ['district_id' => 43, 'thana_name' => 'Kendua Upazila'], //10


            // Sherpur District
            ['district_id' => 44, 'thana_name' => 'Jhenaigati Upazila'], //1
            ['district_id' => 44, 'thana_name' => 'Nakla Upazila'], //2
            ['district_id' => 44, 'thana_name' => 'Nalitabari Upazila'], //3
            ['district_id' => 44, 'thana_name' => 'Sherpur Sadar Upazila'], //4
            ['district_id' => 44, 'thana_name' => 'Sreebardi Upazila'], //5


            // Bogura District
            ['district_id' => 45, 'thana_name' => 'Adamdighi Upazila'], //1
            ['district_id' => 45, 'thana_name' => 'Bogra Sadar Upazila'], //2
            ['district_id' => 45, 'thana_name' => 'Dhunat Upazila'], //3
            ['district_id' => 45, 'thana_name' => 'Dhupchanchia Upazila'], //4
            ['district_id' => 45, 'thana_name' => 'Gabtali Upazila'], //5
            ['district_id' => 45, 'thana_name' => 'Kahaloo Upazila'], //6
            ['district_id' => 45, 'thana_name' => 'Nandigram Upazila'], //7
            ['district_id' => 45, 'thana_name' => 'Sariakandi Upazila'], //8
            ['district_id' => 45, 'thana_name' => 'Shajahanpur Upazila'], //9
            ['district_id' => 45, 'thana_name' => 'Sherpur Upazila'], //10
            ['district_id' => 45, 'thana_name' => 'Shibganj Upazila'], //11
            ['district_id' => 45, 'thana_name' => 'Sonatala Upazila'], //12



            // Joypurhat District
            ['district_id' => 46, 'thana_name' => 'Akkelpur Upazila'], //1
            ['district_id' => 46, 'thana_name' => 'Joypurhat Sadar Upazila'], //2
            ['district_id' => 46, 'thana_name' => 'Kalai Upazila'], //3
            ['district_id' => 46, 'thana_name' => 'Khetlal Upazila'], //4
            ['district_id' => 46, 'thana_name' => 'Panchbibi Upazila'], //5


            // Naogaon District
            ['district_id' => 47, 'thana_name' => 'Atrai Upazila'], //1
            ['district_id' => 47, 'thana_name' => 'Badalgachhi Upazila'], //2
            ['district_id' => 47, 'thana_name' => 'Dhamoirhat Upazila'], //3
            ['district_id' => 47, 'thana_name' => 'Manda Upazila'], //4
            ['district_id' => 47, 'thana_name' => 'Mahadevpur Upazila'], //5
            ['district_id' => 47, 'thana_name' => 'Naogaon Sadar Upazila'], //6
            ['district_id' => 47, 'thana_name' => 'Niamatpur Upazila'], //7
            ['district_id' => 47, 'thana_name' => 'Patnitala Upazila'], //8
            ['district_id' => 47, 'thana_name' => 'Porsha Upazila'], //9
            ['district_id' => 47, 'thana_name' => 'Raninagar Upazila'], //10
            ['district_id' => 47, 'thana_name' => 'Sapahar Upazila'], //11



            // Natore District
            ['district_id' => 48, 'thana_name' => 'Bagatipara Upazila'], //1
            ['district_id' => 48, 'thana_name' => 'Baraigram Upazila'], //2
            ['district_id' => 48, 'thana_name' => 'Gurudaspur Upazila'], //3
            ['district_id' => 48, 'thana_name' => 'Lalpur Upazila'], //4
            ['district_id' => 48, 'thana_name' => 'Natore Sadar Upazila'], //5
            ['district_id' => 48, 'thana_name' => 'Singra Upazila'], //6
            ['district_id' => 48, 'thana_name' => 'Naldanga Upazila'], //6



            //Chapainawabganj District
            ['district_id' => 49, 'thana_name' => 'Bholahat Upazila'], //1
            ['district_id' => 49, 'thana_name' => 'Chapainawabganj Sadar Upazila'], //2
            ['district_id' => 49, 'thana_name' => 'Gomastapur Upazila'], //3
            ['district_id' => 49, 'thana_name' => 'Nachole Upazila'], //4
            ['district_id' => 49, 'thana_name' => 'Shibganj Upazila'], //5



            // Pabna District
            ['district_id' => 50, 'thana_name' => 'Atgharia Upazila'], //1
            ['district_id' => 50, 'thana_name' => 'Bera Upazila'], //2
            ['district_id' => 50, 'thana_name' => 'Bhangura Upazila'], //3
            ['district_id' => 50, 'thana_name' => 'Chatmohar Upazila'], //4
            ['district_id' => 50, 'thana_name' => 'Faridpur Upazila'], //5
            ['district_id' => 50, 'thana_name' => 'Ishwardi Upazila'], //6
            ['district_id' => 50, 'thana_name' => 'Pabna Sadar Upazila'], //7
            ['district_id' => 50, 'thana_name' => 'Santhia Upazila'], //8
            ['district_id' => 50, 'thana_name' => 'Sujanagar Upazila'], //9



            // Rajshahi District
            ['district_id' => 51, 'thana_name' => 'Bagha Upazila'], //1
            ['district_id' => 51, 'thana_name' => 'Bagmara Upazila'], //2
            ['district_id' => 51, 'thana_name' => 'Charghat Upazila'], //3
            ['district_id' => 51, 'thana_name' => 'Durgapur Upazila'], //4
            ['district_id' => 51, 'thana_name' => 'Godagari Upazila'], //5
            ['district_id' => 51, 'thana_name' => 'Mohanpur Upazila'], //6
            ['district_id' => 51, 'thana_name' => 'Paba Upazila'], //7
            ['district_id' => 51, 'thana_name' => 'Puthia Upazila'], //8
            ['district_id' => 51, 'thana_name' => 'Tanore Upazila'], //9
            ['district_id' => 51, 'thana_name' => 'Rajshahi Sadar Upazila'], //10



            // Sirajganj District
            ['district_id' => 52, 'thana_name' => 'Belkuchi Upazila'], //1
            ['district_id' => 52, 'thana_name' => 'Chauhali Upazila'], //2
            ['district_id' => 52, 'thana_name' => 'Kamarkhanda Upazila'], //3
            ['district_id' => 52, 'thana_name' => 'Kazipur Upazila'], //4
            ['district_id' => 52, 'thana_name' => 'Raiganj Upazila'], //5
            ['district_id' => 52, 'thana_name' => 'Shahjadpur Upazila'], //6
            ['district_id' => 52, 'thana_name' => 'Sirajganj Sadar Upazila'], //7
            ['district_id' => 52, 'thana_name' => 'Tarash Upazila'], //8
            ['district_id' => 52, 'thana_name' => 'Ullahpara Upazila'], //9


            //Rangpur District
            ['district_id' => 53, 'thana_name' => 'Badarganj Upazila'], //1
            ['district_id' => 53, 'thana_name' => 'Gangachara Upazila'], //2
            ['district_id' => 53, 'thana_name' => 'Kaunia Upazila'], //3
            ['district_id' => 53, 'thana_name' => 'Mithapukur Upazila'], //4
            ['district_id' => 53, 'thana_name' => 'Pirganj Upazila'], //5
            ['district_id' => 53, 'thana_name' => 'Pirgachha Upazila'], //6
            ['district_id' => 53, 'thana_name' => 'Rangpur Sadar Upazila'], //7
            ['district_id' => 53, 'thana_name' => 'Taraganj Upazila'], //8

            // Dinajpur District
            ['district_id' => 54, 'thana_name' => 'Birampur Upazila'], //1
            ['district_id' => 54, 'thana_name' => 'Birganj Upazila'], //2
            ['district_id' => 54, 'thana_name' => 'Bochaganj Upazila'], //3
            ['district_id' => 54, 'thana_name' => 'Chirirbandar Upazila'], //4
            ['district_id' => 54, 'thana_name' => 'Phulbari Upazila'], //5
            ['district_id' => 54, 'thana_name' => 'Ghoraghat Upazila'], //6
            ['district_id' => 54, 'thana_name' => 'Hakimpur Upazila'], //7
            ['district_id' => 54, 'thana_name' => 'Kaharole Upazila'], //8
            ['district_id' => 54, 'thana_name' => 'Khansama Upazila'], //9
            ['district_id' => 54, 'thana_name' => 'Dinajpur Sadar Upazila'], //10
            ['district_id' => 54, 'thana_name' => 'Nawabganj Upazila'], //11
            ['district_id' => 54, 'thana_name' => 'Parbatipur Upazila'], //12
            ['district_id' => 54, 'thana_name' => 'Biral Upazila'], //13


            // Gaibandha District
            ['district_id' => 55, 'thana_name' => 'Phulchhari Upazila'], //1
            ['district_id' => 55, 'thana_name' => 'Gaibandha Sadar Upazila'], //2
            ['district_id' => 55, 'thana_name' => 'Gobindaganj Upazila'], //3
            ['district_id' => 55, 'thana_name' => 'Palashbari Upazila'], //4
            ['district_id' => 55, 'thana_name' => 'Sundarganj Upazila'], //5
            ['district_id' => 55, 'thana_name' => 'Sadullapur Upazila'], //6
            ['district_id' => 55, 'thana_name' => 'Saghata Upazila'], //7



            // Kurigram District
            ['district_id' => 56, 'thana_name' => 'Bhurungamari Upazila'], //1
            ['district_id' => 56, 'thana_name' => 'Char Rajibpur Upazila'], //2
            ['district_id' => 56, 'thana_name' => 'Chilmari Upazila'], //3
            ['district_id' => 56, 'thana_name' => 'Phulbari Upazila'], //4
            ['district_id' => 56, 'thana_name' => 'Kurigram Sadar Upazila'], //5
            ['district_id' => 56, 'thana_name' => 'Nageshwari Upazila'], //6
            ['district_id' => 56, 'thana_name' => 'Rajarhat Upazila'], //7
            ['district_id' => 56, 'thana_name' => 'Roumari Upazila'], //8
            ['district_id' => 56, 'thana_name' => 'Ulipur Upazila'], //9


            // Lalmonirhat District
            ['district_id' => 57, 'thana_name' => 'Aditmari Upazila'], //1
            ['district_id' => 57, 'thana_name' => 'Hatibandha Upazila'], //2
            ['district_id' => 57, 'thana_name' => 'Kaliganj Upazila'], //3
            ['district_id' => 57, 'thana_name' => 'Lalmonirhat Sadar Upazila'], //4
            ['district_id' => 57, 'thana_name' => 'Patgram Upazila'], //5


            // Nilphamari District
            ['district_id' => 58, 'thana_name' => 'Dimla Upazila'], //1
            ['district_id' => 58, 'thana_name' => 'Domar Upazila'], //2
            ['district_id' => 58, 'thana_name' => 'Jaldhaka Upazila'], //3
            ['district_id' => 58, 'thana_name' => 'Kishoreganj Upazila'], //4
            ['district_id' => 58, 'thana_name' => 'Nilphamari Sadar Upazila'], //5
            ['district_id' => 58, 'thana_name' => 'Saidpur Upazila'], //6



            // Panchagarh District
            ['district_id' => 59, 'thana_name' => 'Atwari Upazila'], //1
            ['district_id' => 59, 'thana_name' => 'Boda Upazila'], //2
            ['district_id' => 59, 'thana_name' => 'Debiganj Upazila'], //3
            ['district_id' => 59, 'thana_name' => 'Panchagarh Sadar Upazila'], //4
            ['district_id' => 59, 'thana_name' => 'Tetulia Upazila'], //5


            // Thakurgaon District
            ['district_id' => 60, 'thana_name' => 'Baliadangi Upazila'], //1
            ['district_id' => 60, 'thana_name' => 'Haripur Upazila'], //2
            ['district_id' => 60, 'thana_name' => 'Pirganj Upazila'], //3
            ['district_id' => 60, 'thana_name' => 'Ranisankail Upazila'], //4
            ['district_id' => 60, 'thana_name' => 'Thakurgaon Sadar Upazila'], //5


            // Habiganj District
            ['district_id' => 61, 'thana_name' => 'Ajmiriganj Upazila'], //1
            ['district_id' => 61, 'thana_name' => 'Bahubal Upazila'], //2
            ['district_id' => 61, 'thana_name' => 'Baniachang Upazila'], //3
            ['district_id' => 61, 'thana_name' => 'Chunarughat Upazila'], //4
            ['district_id' => 61, 'thana_name' => 'Habiganj Sadar Upazila'], //5
            ['district_id' => 61, 'thana_name' => 'Lakhai Upazila'], //6
            ['district_id' => 61, 'thana_name' => 'Madhabpur Upazila'], //7
            ['district_id' => 61, 'thana_name' => 'Nabiganj Upazila'], //8
            ['district_id' => 61, 'thana_name' => 'Shayestaganj Upazila'], //9


            // Moulvibazar District
            ['district_id' => 62, 'thana_name' => 'Barlekha Upazila'], //1
            ['district_id' => 62, 'thana_name' => 'Juri Upazila'], //2
            ['district_id' => 62, 'thana_name' => 'Kamalganj Upazila'], //3
            ['district_id' => 62, 'thana_name' => 'Kulaura Upazila'], //4
            ['district_id' => 62, 'thana_name' => 'Moulvibazar Sadar Upazila'], //5
            ['district_id' => 62, 'thana_name' => 'Rajnagar Upazila'], //6
            ['district_id' => 62, 'thana_name' => 'Sreemangal Upazila'], //7



            // Sunamganj District
            ['district_id' => 63, 'thana_name' => 'Bishwamvarpur Upazila'], //1
            ['district_id' => 63, 'thana_name' => 'Chhatak Upazila'], //2
            ['district_id' => 63, 'thana_name' => 'Shantiganj Upazila'], //3
            ['district_id' => 63, 'thana_name' => 'Derai Upazila'], //4
            ['district_id' => 63, 'thana_name' => 'Dharampasha Upazila'], //5
            ['district_id' => 63, 'thana_name' => 'Dowarabazar Upazila'], //6
            ['district_id' => 63, 'thana_name' => 'Jagannathpur Upazila'], //7
            ['district_id' => 63, 'thana_name' => 'Jamalganj Upazila'], //8
            ['district_id' => 63, 'thana_name' => 'Sullah Upazila'], //9
            ['district_id' => 63, 'thana_name' => 'Sunamganj Sadar Upazila'], //10
            ['district_id' => 63, 'thana_name' => 'Tahirpur Upazila'], //11
            ['district_id' => 63, 'thana_name' => 'Madhyanagar Upazila'], //12


            // Sylhet District
            ['district_id' => 64, 'thana_name' => 'Balaganj Upazila'], //1
            ['district_id' => 64, 'thana_name' => 'Beanibazar Upazila'], //2
            ['district_id' => 64, 'thana_name' => 'Bishwanath Upazila'], //3
            ['district_id' => 64, 'thana_name' => 'Companiganj Upazila'], //4
            ['district_id' => 64, 'thana_name' => 'Dakshin Surma Upazila'], //4
            ['district_id' => 64, 'thana_name' => 'Fenchuganj Upazila'], //5
            ['district_id' => 64, 'thana_name' => 'Golapganj Upazila'], //6
            ['district_id' => 64, 'thana_name' => 'Gowainghat Upazila'], //7
            ['district_id' => 64, 'thana_name' => 'Jaintiapur Upazila'], //8
            ['district_id' => 64, 'thana_name' => 'Kanaighat Upazila'], //9
            ['district_id' => 64, 'thana_name' => 'Osmani Nagar Upazila'], //10
            ['district_id' => 64, 'thana_name' => 'Zakiganj Upazila'], //11
            ['district_id' => 64, 'thana_name' => 'Sylhet Sadar Upazila'], //12


        ];

        foreach ($thanas as $thana) {
            DB::table('thanas')->insert([
                'district_id' => $thana['district_id'],
                'thana_name' => $thana['thana_name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
