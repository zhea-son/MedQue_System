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
     * @var int
     */
    protected static string $et = '06:55:00';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $patients = User::role('Patient')->pluck('id')->toArray();
        $doctors = User::role('Doctor')->pluck('id')->toArray();
        
        self::$et = date('H:i:s', strtotime(self::$et) + 5*60);

        return [
            'expected_time' => self::$et,
            'date' => now()->toDateString(),
            'user_id' => array_rand($patients, 1),
            'doctor_id' => array_rand($doctors, 1),
            'status' => mt_rand(0,1) ? 'Unpaid' : 'Paid'
        ];

    }
}
