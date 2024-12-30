<?php

namespace Database\Factories;

use App\Models\Tool;
use App\Models\ToolItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToolItem>
 */
class ToolItemFactory extends Factory
{
   
    protected $model = ToolItem::class;

    public function definition(): array
    {
        $availableToolIds = Tool::pluck('id');
        return [
            'tool_id' => $this->faker->randomElement($availableToolIds),
            'statement' => $this->faker->sentence,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
