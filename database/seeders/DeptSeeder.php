<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depts = [
            [
                'name' => 'Casualty',
                'floor' => '1'
            ],
            [
                'name' => 'Operating Theatre',
                'floor' => '1'
            ],
            [
                'name' => 'Intensive Care Unit',
                'floor' => '1'
            ],
            [
                'name' => 'Cardiology',
                'floor' => '1'
            ],
            [
                'name' => 'Account',
                'floor' => '2'
            ],
            [
                'name' => 'ENT',
                'floor' => '2'
            ],
            [
                'name' => 'General Surgery',
                'floor' => '2'
            ],
            [
                'name' => 'Pathology',
                'floor' => '2'
            ],
            [
                'name' => 'Pharmacy',
                'floor' => '2'
            ],
        ];
        \App\Models\Dept::insert($depts);
    }
}
