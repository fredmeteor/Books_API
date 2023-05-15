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
    public function test_it_can_return_fine_debug_messages()
    {$response = $this->get('/');
        $response->assertStatus(200);
        //Debugging Responses
//$response->dumpHeaders();
//$response->dumpSession();
//$response->dump();
    }
}
