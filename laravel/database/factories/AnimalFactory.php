<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Animal;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    protected $model = Animal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->name,
            'birthday' => $this->faker->date(),
            'area' => $this->faker->city,
            'fix' => $this->faker->boolean,
            'description' => $this->faker->text,
            'personality' => $this->faker->text,
            'user_id' => User::all()->random()->id,
        ];
    }
}
