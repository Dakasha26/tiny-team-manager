<?php

namespace Tests\Feature;

use Tests\TestCase;

abstract  class TableTest extends TestCase
{
    protected const BASE_URL = 'http://localhost:8000/api';

    protected  function getTableTest($table){
        $response = $this->get(self::BASE_URL.'/work/getTable/'.$table);
        return $response->assertStatus(200);
    }
}
