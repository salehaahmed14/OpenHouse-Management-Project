<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Assigned_projectsFactory extends Factory
{
   /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $evaluatorIds = User::where('role', 'evaluator')->pluck('user_id')->toArray();
        $projectIds = Project::pluck('proj_id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($evaluatorIds),
            'proj_id' => $this->faker->randomElement($projectIds),
        ];
    }
}
