<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DebugTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {$response = $this->get('/');
        $response->assertStatus(200);
$response->dumpHeaders();
$response->dumpSession();
$response->dump();
    }
}
