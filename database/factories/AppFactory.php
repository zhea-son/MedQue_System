<?php

namespace Database\Factories;

use App\Models\App;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App>
 */
class AppFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = App::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $patients = User::role('Patient')->pluck('id')->toArray();
        $doctors = User::role('Doctor')->pluck('id')->toArray();

        $doctor_id = $doctors[array_rand($doctors, 1)];
        return [
            'expected_time' => \App\Models\App::getExpectedTime(now()->toDateString(), $doctor_id),
            'date' => now()->toDateString(),
            'user_id' => $patients[array_rand($patients, 1)],
            'doctor_id' => $doctor_id,
            'status' => mt_rand(0,1) ? 'Unpaid' : 'Paid'
        ];

    }
}
