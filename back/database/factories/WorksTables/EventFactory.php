<?php

namespace Database\Factories\WorksTables;

use App\Models\WorksTables\Event;
use Illuminate\Database\Eloquent\Factories\Factory;


class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->jobTitle(),
            'url' => (boolean)(rand(1, 2) % 2) ? $this->faker->url() : null,
            'pointsNumber' => rand(1, 8),
            'comment' => $this->faker->companyEmail()
        ];
    }
}
