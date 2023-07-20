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

    #[ORM\Column]
    private ?string $Name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $YearOfRelease = null;

    #[ORM\OneToOne(mappedBy: 'project', cascade: ['persist', 'remove'])]
    private ?ProjectImg $projectImg = null;

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

    public function getYearOfRelease(): ?\DateTimeInterface
    {
        return $this->YearOfRelease;
    }

    public function setYearOfRelease(\DateTimeInterface $YearOfRelease): static
    {
        $this->YearOfRelease = $YearOfRelease;

        return $this;
    }

    public function getProjectImg(): ?ProjectImg
    {
        return $this->projectImg;
    }

    public function setProjectImg(ProjectImg $projectImg): static
    {
        // set the owning side of the relation if necessary
        if ($projectImg->getProject() !== $this) {
            $projectImg->setProject($this);
        }

        $this->projectImg = $projectImg;

        return $this;
    }
}
