<?php

namespace Database\Seeders;

use App\Models\WorksTables\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::factory()->count(6)->create();
    }
}
