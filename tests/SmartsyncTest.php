<?php
/**
 * Tests for smartSync
 */

use PHPUnit\Framework\TestCase;
use Smartsync\Smartsync;

class SmartsyncTest extends TestCase {
    private Smartsync $instance;

    protected function setUp(): void {
        $this->instance = new Smartsync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartsync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
