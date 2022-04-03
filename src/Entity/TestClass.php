<?php

namespace App\Entity;

use App\Repository\TestClassRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestClassRepository::class)]
class TestClass
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 25)]
    private $name;

    #[ORM\Column(type: 'string', length: 25)]
    private $sername;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSername(): ?string
    {
        return $this->sername;
    }

    public function setSername(string $sername): self
    {
        $this->sername = $sername;

        return $this;
    }
}
