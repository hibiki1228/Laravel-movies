<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreateMovie()
    {
        $response = $this->post('/create', [MovieController::class, 'create'], ['title' => 'ahi', 'image_url' => 'http://hogehoge.com']);

        $response->assertStatus(201);
    }
}
