<?php

namespace Database\Factories\WorksTables;

use App\Models\WorksTables\DocumentsPackage;
use App\Models\WorksTables\Member;
use App\Models\WorksTables\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'secondName' => $this->faker->lastName(),
            'patronymicName'=>  rand(0, 2) % 2 ? $this->faker->firstName().'ich' : null,
            'educationPlace' => $this->faker->address(),
            'department' => $this->faker->jobTitle(),
            'studyGroup' => 'АСУб-18',
            'documents_package_id' => $this->faker->randomElement(DocumentsPackage::all()),
            'position_name' => $this->faker->randomElement(Position::all())['id']
        ];
    }



}
