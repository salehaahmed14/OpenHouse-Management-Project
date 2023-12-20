<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project; // Make sure to import the Project model
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{

public function definition(): array
{
    
    // Get user ids with the role 'fyp_group'
    $fypGroupUserIds = User::where('role', 'fyp_group')->pluck('user_id')->toArray();

    return [
        'user_id' => function () use ($fypGroupUserIds) {
            return $this->faker->randomElement($fypGroupUserIds);
        },
        'title' => $this->faker->sentence,
        'description' => $this->faker->paragraph,
        'score' => 0,
        'table' => 'not assigned yet',
        'eval_by' => 0,
        'keywords' =>$this->faker->word,
    ];
}

}
