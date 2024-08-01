<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $currentId = 1;

    public function definition(): array
    {
        $userCount = User::count();
        $date = $this->faker->dateTimeThisYear()->format('Y-m-d H:i:s');
        $status = $this->faker->randomElement(['P', 'O', 'D']);
        $elapsedTime = rand(0, 2592000000);
        $endDateMs = strtotime($date) + $elapsedTime;
        $endDate = date('Y-m-d H:i:s', ($endDateMs));
        $user_id = rand(0, $userCount);

        return [
            'number' => date('ymd', strtotime($date)) . '-' . self::$currentId++,
            'user_id' => $user_id,
            'subject' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $status,
            'resolution' => ($status == 'D') ? $this->faker->paragraph() : NULL,
            'start_date_time' => ($status != 'P') ? $date : NULL,
            'end_date_time' => ($status == 'D') ? $endDate : NULL,
        ];
    }
}
