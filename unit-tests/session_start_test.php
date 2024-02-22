<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function testSomething(): void
    {
        // Arrange
        $expected = 'Hello, world!';

        // Act
        $actual = 'Hello, world!';

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
