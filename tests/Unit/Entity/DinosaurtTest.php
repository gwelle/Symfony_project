<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Dinosaur;
use Symfony\Component\Validator\Constraints\Length;

class DinosaurtTest extends TestCase
{
    public function testCanGetAndSetData(): void
    
    {
        // Create a new Dinosaur object
    
        $dinosaur = new Dinosaur(
            name: 'Big Eaty',
            genus: 'Tyrannosaurus',
            length: 15,
            enclosure: 'Paddock A',
        );

        self::assertGreaterThan(10, $dinosaur->getLength(), 'Length should be greater than 10');

        self::assertSame('Big Eaty', $dinosaur->getName());
        self::assertSame('Tyrannosaurus', $dinosaur->getGenus());
        self::assertSame(15, $dinosaur->getLength());
        self::assertSame('Paddock A', $dinosaur->getEnclosure());
    }
}
