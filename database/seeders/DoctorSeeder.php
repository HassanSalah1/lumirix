<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize Faker with English and Chinese locales
        $fakerEn = Faker::create('en_US'); // For English data
        $fakerZh = Faker::create('zh_CN'); // For Chinese data

        // Create 50 fake doctors
        for ($i = 0; $i < 50; $i++) {
            Doctor::create([
                'name_en' => 'Dr. ' . $fakerEn->firstName . ' ' . $fakerEn->lastName, // English name
                'name_zh' => '醫生 ' . $fakerZh->lastName . $fakerZh->firstName, // Chinese name
                'address_en' => $fakerEn->address, // English address
                'address_zh' =>  $fakerZh->city . $fakerZh->streetAddress, // Chinese address
            ]);
        }
    }
}