<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class BaiganTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/veggies/baigan');

        $response->assertStatus(200);
    }
}
