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
        $severities = ['Emergency', 'Urgent', 'Referal', 'Normal'];
        return [
            'date' => now()->toDateString(),
            'user_id' => $patients[array_rand($patients, 1)],
            'status' => 'Unpaid',
            'severity'=> $severities[array_rand($severities, 1)],
            'priority' => mt_rand(1,4)
        ];

    }
}
