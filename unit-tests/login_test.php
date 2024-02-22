<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function testLogin(): void
    {
        // Arrange
        $email = 'admin@example.com';
        $password = 'password';

        // Act
        $result = login($email, $password);

        // Assert
        $this->assertTrue($result);
    }

    public function testInvalidLogin(): void
    {
        // Arrange
        $email = 'invalid@example.com';
        $password = 'invalid';

        // Act
        $result = login($email, $password);

        // Assert
        $this->assertFalse($result);
    }
}
