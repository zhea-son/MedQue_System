<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor_times = [
            [
                'user_id' => 2,
                'start' => '07:00:00',
                'end' => '09:00:00'
            ]
        ];
        \App\Models\DoctorTime::insert($doctor_times);
    }
}
