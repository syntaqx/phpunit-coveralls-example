<?php declare (strict_types = 1);

namespace Tests\Unit;

use Example\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSimpleReturnTrue(): void
    {
        $obj = new Example();
        $this->assertTrue($obj->simpleReturnTrue());
    }
}
