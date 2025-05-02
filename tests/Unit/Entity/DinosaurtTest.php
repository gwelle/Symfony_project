<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;

class DinosaurtTest extends TestCase
{
    /**
     * @test("test with assertEquals")
     */
    public function testItWorks(): void
    {
        //self::assertEquals(42, 42);
        self::assertEquals('42', 42); // 42 == '42'
    }

    /**
     * @test("test with assertSame")
     */
    public function testTtWorksTheSame():void
    {
        //self::assertSame(42, 42);
        self::assertSame('42', 42); // 42 === '42'
    }
}
