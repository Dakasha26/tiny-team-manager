<?php

namespace Database\Seeders;

use App\Models\WorksTables\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::factory()->count(100)->create();
    }
}
