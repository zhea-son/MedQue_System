<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' => 'Doctor 1',
            'email' => 'd1@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Nawalparasi',
            'dept_id' => 1
        ]);
        $user->assignRole('Doctor');

        $user = \App\Models\User::create([
            'name' => 'Doctor2',
            'email' => 'd2@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Morang',
            'dept_id' => 2
        ]);
        $user->assignRole('Doctor');

        $user = \App\Models\User::create([
            'name' => 'Doctor 3',
            'email' => 'd3@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Palpa',
            'dept_id' => 3
        ]);
        $user->assignRole('Doctor');

        $user = \App\Models\User::create([
            'name' => 'Doctor 4',
            'email' => 'd4@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Tanahun',
            'dept_id' => 4
        ]);
        $user->assignRole('Doctor');

        $user = \App\Models\User::create([
            'name' => 'Doctor 5',
            'email' => 'd5@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Parbat',
            'dept_id' => 6
        ]);
        $user->assignRole('Doctor');

        $user = \App\Models\User::create([
            'name' => 'Doctor 6',
            'email' => 'd6@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Pokhara',
            'dept_id' => 7
        ]);
        $user->assignRole('Doctor');

        $user = \App\Models\User::create([
            'name' => 'Doctor 7',
            'email' => 'd7@admin.com',
            'password' => bcrypt('password'),
            'gender' => 'Male',
            'address' => 'Butwal',
            'dept_id' => 8
        ]);
        $user->assignRole('Doctor');
    }
}
