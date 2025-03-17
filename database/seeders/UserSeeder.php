<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    // Function to generate unique BD phone numbers with valid prefixes
    private function generatePhoneNumber()
    {
        $validPrefixes = ['017', '019', '018', '015', '013', '014', '011', '016']; // Valid prefixes
        $prefix = $validPrefixes[array_rand($validPrefixes)]; // Randomly select one of the valid prefixes
        $number = $prefix . rand(1000000, 9999999); // Generate a random 7-digit number after the prefix
        return $number;
    }

    public function run()
    {
        // Array to keep track of unique phone numbers
        $usedNumbers = [];

        // Create 10 moderators with custom emails and unique BD phone numbers
        for ($i = 1; $i <= 10; $i++) {
            $phoneNumber = $this->generatePhoneNumber();
            // Ensure unique phone number
            while (in_array($phoneNumber, $usedNumbers)) {
                $phoneNumber = $this->generatePhoneNumber();
            }
            $usedNumbers[] = $phoneNumber;

            User::create([
                'name' => 'Moderator ' . $i,
                'email' => 'moderator' . $i . '@user.com', // custom email format
                'number' => $phoneNumber,
                'status' => '1', // status set to '1'
                'role' => 'moderator',
                'password' => Hash::make('password123'), // example password
            ]);
        }

        // Create 10 agents with custom emails and unique BD phone numbers
        for ($i = 1; $i <= 10; $i++) {
            $phoneNumber = $this->generatePhoneNumber();
            // Ensure unique phone number
            while (in_array($phoneNumber, $usedNumbers)) {
                $phoneNumber = $this->generatePhoneNumber();
            }
            $usedNumbers[] = $phoneNumber;

            User::create([
                'name' => 'Agent ' . $i,
                'email' => 'agent' . $i . '@user.com', // custom email format
                'number' => $phoneNumber,
                'status' => '1', // status set to '1'
                'role' => 'agent',
                'password' => Hash::make('password123'), // example password
            ]);
        }

        // Create 10 users with custom emails and unique BD phone numbers
        for ($i = 1; $i <= 10; $i++) {
            $phoneNumber = $this->generatePhoneNumber();
            // Ensure unique phone number
            while (in_array($phoneNumber, $usedNumbers)) {
                $phoneNumber = $this->generatePhoneNumber();
            }
            $usedNumbers[] = $phoneNumber;

            User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@user.com', // custom email format
                'number' => $phoneNumber,
                'status' => '1', // status set to '1'
                'role' => 'user',
                'password' => Hash::make('password123'), // example password
            ]);
        }
    }
}
