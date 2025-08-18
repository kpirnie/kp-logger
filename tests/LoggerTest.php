<?php

declare(strict_types=1);

namespace KPT\Tests\Unit;

use KPT\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testLoggerExists(): void
    {
        $this->assertTrue(class_exists(Logger::class));
    }

    public function testConstants(): void
    {
        $this->assertSame(1, Logger::LEVEL_ERROR);
        $this->assertSame(2, Logger::LEVEL_WARNING);
        $this->assertSame(3, Logger::LEVEL_INFO);
        $this->assertSame(4, Logger::LEVEL_DEBUG);
    }
}