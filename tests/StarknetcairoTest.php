<?php
/**
 * Tests for StarknetCairo
 */

use PHPUnit\Framework\TestCase;
use Starknetcairo\Starknetcairo;

class StarknetcairoTest extends TestCase {
    private Starknetcairo $instance;

    protected function setUp(): void {
        $this->instance = new Starknetcairo(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Starknetcairo::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
