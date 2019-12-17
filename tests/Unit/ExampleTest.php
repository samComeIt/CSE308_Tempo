<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $response = $this->post('/open', [
            'Name' => '',
            'Category' => '',
            'Location' => '',
            'Type' => '',
            'Capacity' => '',
            'filename' => '',
            'mime' => '',
            'original_filename' => '',
            'Status' => '',
        ]);
        $response->assertOk();

        $this->assertTrue(true);
    }
}
