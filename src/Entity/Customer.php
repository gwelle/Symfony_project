<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotNull(
        message: 'Name cannot be null',
        groups: ['create', 'update'],
    )]
    #[Assert\Length(
        min: 2,
        max: 30,
        minMessage: 'Name must be at least {{ limit }} characters long',
        maxMessage: 'Name cannot be longer than {{ limit }} characters',
        groups: ['create', 'update'],
    )]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[Assert\NotNull(
        message: 'Name cannot be null',
        groups: ['create', 'update'],
    )]
    #[Assert\Length(
        min: 2,
        max: 30,
        minMessage: 'Name must be at least {{ limit }} characters long',
        maxMessage: 'Name cannot be longer than {{ limit }} characters',
        groups: ['create', 'update'],
    )]
    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[Assert\NotNull(
        message: 'Name cannot be null',
        groups: ['create', 'update'],
    )]
    #[Assert\Length(
        min: 2,
        max: 30,
        minMessage: 'Name must be at least {{ limit }} characters long',
        maxMessage: 'Name cannot be longer than {{ limit }} characters',
        groups: ['create', 'update'],
    )]
    #[Assert\Email(
        message: 'The email "{{ value }}" is not a valid email.',
        groups: ['create', 'update'],
    )]
    #[ORM\Column(length: 255)]
    private ?string $email = null;

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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
