<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PositionsTest extends TestCase
{
    protected const BASE_URL = 'http://localhost:8000/api';

    public function test()
    {
        $response = $this->get(self::BASE_URL.'/work/getTable/'.'positions');
        $response->assertStatus(200);
    }

}
