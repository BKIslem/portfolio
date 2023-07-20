<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducationRepository::class)]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Diploma = null;

    #[ORM\Column(length: 255)]
    private ?string $Establishment = null;

    #[ORM\Column(length: 255)]
    private ?string $Year = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiploma(): ?string
    {
        return $this->Diploma;
    }

    public function setDiploma(string $Diploma): static
    {
        $this->Diploma = $Diploma;

        return $this;
    }

    public function getEstablishment(): ?string
    {
        return $this->Establishment;
    }

    public function setEstablishment(string $Establishment): static
    {
        $this->Establishment = $Establishment;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->Year;
    }

    public function setYear(string $Year): static
    {
        $this->Year = $Year;

        return $this;
    }
}
