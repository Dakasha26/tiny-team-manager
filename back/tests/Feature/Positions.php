<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class  Positions extends TableTest
{

    public function test_example()
    {
        return $this->getTableTest("positions");
    }

}
