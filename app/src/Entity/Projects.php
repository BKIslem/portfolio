<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectsRepository::class)]
class Projects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $YearOfRelease = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYearOfRelease(): ?\DateTimeInterface
    {
        return $this->YearOfRelease;
    }

    public function setYearOfRelease(\DateTimeInterface $YearOfRelease): static
    {
        $this->YearOfRelease = $YearOfRelease;

        return $this;
    }
}
