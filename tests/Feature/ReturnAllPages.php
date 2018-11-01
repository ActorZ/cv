<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReturnAllPages extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReturnIndexPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
