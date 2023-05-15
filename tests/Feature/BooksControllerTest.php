<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;

use Tests\TestCase;

class BooksControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_status_code_should_be_200()
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    /** @test **/
public function test_index_should_return_a_collection_of_records()
{

    $response = $this->get('/books')->seeJson([
'title' => 'War of the Worlds'])->seeJson(['title' => 'A Wrinkle in Time'
]);
$response->assertStatus(200);
}
}
