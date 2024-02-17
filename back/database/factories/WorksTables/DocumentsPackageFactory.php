<?php

namespace Database\Factories\WorksTables;

use App\Models\WorksTables\DocumentsPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsPackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentsPackage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hasReestr' => (bool)(rand(1, 2) % 2),
            'hasApplication' => (bool)(rand(1, 2) % 2),
            'hasAgreement' => (bool)(rand(1, 2) % 2),
            'hasPassportScan' => (bool)(rand(1, 2) % 2),
            'hasSnilsScan' => (bool)(rand(1, 2) % 2),
            'hasPolisScan' => (bool)(rand(1, 2) % 2),
            'hasInnScan' => (bool)(rand(1, 2) % 2),
            'hasPripisnoeScan' => (bool)(rand(1, 2) % 2),
            'hasEducationReference' => (bool)(rand(1, 2) % 2),
            'hasPhoto' => (bool)(rand(1, 2) % 2),
            'hasFee' => (bool)(rand(1, 2) % 2),
            'hasResult' => (bool)(rand(1, 2) % 2), //TODO upgrade
            'comment' => $this->faker->streetAddress(),
        ];
    }
}
