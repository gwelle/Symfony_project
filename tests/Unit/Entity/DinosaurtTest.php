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

    // Write a test for the Feature
    public function testDinosaurOver10MetersOrGreaterIsLarge():void {
        
        $dino = new Dinosaur(
            name: 'Big Rex',
            genus: '',
            length: 10,
            enclosure:''
        );

        //  Run the test and watch it fail
        self::assertSame('Large', $dino->getSizeDescription(),
         'Expected size description to be "Large" for length 15');
    }

    public function testDinoBetween5And9MetersIsMedium(): void
    {
        $carnivor = new Dinosaur(
            name: 'Big Carnivor',
            genus: '',
            length: 5,
            enclosure: '',
        );
        self::assertSame('Medium', $carnivor->getSizeDescription(),
        'This is supposed to be a medium Dinosaur');
    }

    public function testDinoUnder5MetersIsSmall(): void
    {
        $herbivor = new Dinosaur(
            name: 'Big Herbivor',
            genus: '',
            length: 4,
            enclosure: '',
        );
        self::assertSame('Small', $herbivor->getSizeDescription(),
        'This is supposed to be a small Dinosaur');
    }
}
