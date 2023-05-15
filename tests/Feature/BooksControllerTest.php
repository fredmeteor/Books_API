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

    $response = $this->getJson('/books', ['title' => 'War of the Worlds']);
    $response->assertStatus(200);
//$response->assertStatus(200);
}

/** @test **/
public function show_should_return_a_valid_book()
{
//$this->markTestIncomplete('Pending test');
$response = $this
->getJson('/books/1',[
'id' => 1,
'title' => 'War of the Worlds',
'description' => 'A science fiction masterpiece about Martians invading London',
'author' => 'H. G. Wells'
]);
$response->assertOk();

$data = json_decode($response->getContent(), true);
$this->assertArrayHasKey('created_at', $data);
$this->assertArrayHasKey('updated_at', $data);
}
/** @test **/
public function show_should_fail_when_the_book_id_does_not_exist()
{
//$this->markTestIncomplete('Pending test');
$response = $this
->getJson('/books/99999',[
'error' => [
'message' => 'Book not found'
]
]);

$response->assertStatus(404);
}

/** @test **/

public function show_route_should_not_match_an_invalid_route()
{
$this->markTestIncomplete('Pending test');
// $response = $this->get('/books/this-is-invalid');
// $this->assertNotRegExp(
// '/Book not found/',
// $this->$response->getContent(),
// 'BooksController@show route matching when it should not.'
// );
// $response->assertStatus(404);
}

/** @test **/
public function store_should_save_new_book_in_the_database()
{
$this->markTestIncomplete('pending');
}
/** @test */
public function store_should_respond_with_a_201_and_location_header_when_successful()
{
$this->markTestIncomplete('pending');
}
}

