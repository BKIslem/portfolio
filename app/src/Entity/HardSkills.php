<?php

namespace App\Entity;

use App\Repository\HardSkillsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HardSkillsRepository::class)]
class HardSkills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Percentage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPercentage(): ?string
    {
        return $this->Percentage;
    }

    public function setPercentage(string $Percentage): static
    {
        $this->Percentage = $Percentage;

        return $this;
    }
}
