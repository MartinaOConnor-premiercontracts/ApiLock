<?php
/**
 * Tests for ApiLock
 */

use PHPUnit\Framework\TestCase;
use Apilock\Apilock;

class ApilockTest extends TestCase {
    private Apilock $instance;

    protected function setUp(): void {
        $this->instance = new Apilock(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apilock::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
