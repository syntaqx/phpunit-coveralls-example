<?php declare (strict_types = 1);

namespace Tests\Unit;

use Example\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testSimpleReturnTrue(): void
    {
        $obj = new Example();
        $this->assertTrue($obj->simpleReturnTrue());
    }
}
