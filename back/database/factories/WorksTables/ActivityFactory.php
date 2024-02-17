<?php

namespace Database\Factories\WorksTables;

use App\Models\WorksTables\DocumentsPackage;
use App\Models\WorksTables\Event;
use App\Models\WorksTables\Member;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WorksTables\Activity;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => $this->faker->randomElement(Member::all()),
            'event_name' => $this->faker->randomElement(Event::all())['id'],
            'isManager' => rand(0,1) == 1,
            'location' => $this->faker->address(),
            'dateTime' => $this->faker->dateTime()
        ];
    }
}
