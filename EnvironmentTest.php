<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $this->assertTrue(true);
        // $netflix = env('NETFLIX');

        // self::assertEquals('VOD', $netflix);


        // $response = $this->get('/');
        // $response->assertStatus(200);
    }

    public function testAppEnv()
    {
        var_dump(App::environment('testing'));
        if (App::environment()) {
            self::assertTrue(true);
        }


    }
}