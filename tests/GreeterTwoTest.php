<?php 

declare(strict_types=1);

namespace Tests;

use App\GreeterTwo;
use PHPUnit\Framework\TestCase;

final class GreeterTwoTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new GreeterTwo;

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Alice!', $greeting);
    }
}