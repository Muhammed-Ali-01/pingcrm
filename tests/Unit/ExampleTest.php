<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertEquals(4646+231657.46545, 4646+231657.46545);
        $this->assertEquals(4646+231657.46545, 4646+231657.46545);
        $this->assertNotEquals(4646+231657.46545, 4646+231657.46546);
    }
}
