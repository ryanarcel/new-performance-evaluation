<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evaluee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluee>
 */
class EvalueeFactory extends Factory
{
    protected $model = Evaluee::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'office' => $this->faker->randomElement([
                'Office of the President',
                'Office of the Vice President',
                'Office of the Secretary',
                'Office of the Treasurer',
                'Finance Office',
                'Human Resource Office',
                'Registrar Office',
                'Faculty Office'
            ]),
            'position' => $this->faker->jobTitle,
            'rank' => $this->faker->randomElement(['Faculty', 'Non-Teaching', 'Administrator', 'Supervisor']),
            'teaching_department' => $this->faker->randomElement(['BED', 'JHS', 'SHS', 'College']),
        ];
    }
}
