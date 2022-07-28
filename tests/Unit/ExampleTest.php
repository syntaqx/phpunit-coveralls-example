<?php declare (strict_types = 1);

namespace Tests\Unit;

use Example\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->example = new Example();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSimpleReturnTrue(): void
    {
        $response = $this->example->simpleReturnTrue();
        $this->assertTrue($response);
    }
}
