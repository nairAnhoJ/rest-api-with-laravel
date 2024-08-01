<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $department_id = Department::latest('id')->value('id');
        $site_id = Site::latest('id')->value('id');

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'department_id' => rand(0, $department_id),
            'site_id' => rand(0, $site_id),
        ];
    }
}
