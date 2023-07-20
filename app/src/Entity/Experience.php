<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $WorkPlace = null;

    #[ORM\Column(length: 255)]
    private ?string $Occupation = null;

    #[ORM\Column(length: 255)]
    private ?string $DateStart = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkPlace(): ?string
    {
        return $this->WorkPlace;
    }

    public function setWorkPlace(string $WorkPlace): static
    {
        $this->WorkPlace = $WorkPlace;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->Occupation;
    }

    public function setOccupation(string $Occupation): static
    {
        $this->Occupation = $Occupation;

        return $this;
    }

    public function getDateStart(): ?string
    {
        return $this->DateStart;
    }

    public function setDateStart(string $DateStart): static
    {
        $this->DateStart = $DateStart;

        return $this;
    }
}
