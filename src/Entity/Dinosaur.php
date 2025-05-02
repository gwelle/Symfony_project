<?php

namespace App\Entity;

use App\Repository\DinosaurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DinosaurRepository::class)]
class Dinosaur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $length = null;

    #[ORM\Column(length: 255)]
    private ?string $enclosure = null;

    #[ORM\Column(length: 255)]
    private ?string $genus = null;

    /**
     * Dinosaur constructor.
     * @param string $name
     * @param string $genus
     * @param int $length
     * @param string $enclosure
     */
    public function __construct(string $name, string $genus, int $length, string $enclosure) {
        $this->name = $name;
        $this->length = $length;
        $this->enclosure = $enclosure;
        $this->genus = $genus;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function getEnclosure(): ?string
    {
        return $this->enclosure;
    }

    public function setEnclosure(string $enclosure): static
    {
        $this->enclosure = $enclosure;

        return $this;
    }

    public function getGenus(): ?string
    {
        return $this->genus;
    }

    public function setGenus(string $genus): static
    {
        $this->genus = $genus;

        return $this;
    }

    // Enable to write simple code to make it pass
    public function getSizeDescription(): string
    {
        if ($this->length >= 10) {
            return 'Large';
        } elseif ($this->length < 5) {
            return 'Small';
        } elseif ($this->length < 10) {
            return 'Medium';
        }
        else {
            return 'Unknown';
        }

    }
}
