<?php

namespace Database\Seeders;

use App\Models\WorksTables\DocumentsPackage;
use Illuminate\Database\Seeder;

class DocumentsPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentsPackage::factory()->count(10)->create();
    }
}
