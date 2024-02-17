<?php

namespace Database\Seeders;

use App\Models\WorksTables\Activity;
use App\Models\WorksTables\DocumentsPackage;
use App\Models\WorksTables\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Webmozart\Assert\Tests\StaticAnalysis\length;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DocumentsPackageSeeder::class,
            PositionSeeder::class,
            MemberSeeder::class,
            EventSeeder::class,
            ActivitySeeder::class
        ]);
    }
}
