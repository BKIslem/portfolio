<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'Projects', targetEntity: ProjectImage::class, orphanRemoval: true, cascade: ['persist'])]
    private Collection $projectImages;

    public function __construct()
    {
        $this->projectImages = new ArrayCollection();
    }

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


    /**
     * @return Collection<int, ProjectImage>
     */
    public function getProjectImages(): Collection
    {
        return $this->projectImages;
    }

    public function addProjectImage(ProjectImage $projectImage): static
    {
        if (!$this->projectImages->contains($projectImage)) {
            $this->projectImages->add($projectImage);
            $projectImage->setProjects($this);
        }

        return $this;
    }

    public function removeProjectImage(ProjectImage $projectImage): static
    {
        if ($this->projectImages->removeElement($projectImage)) {
            // set the owning side to null (unless already changed)
            if ($projectImage->getProjects() === $this) {
                $projectImage->setProjects(null);
            }
        }

        return $this;
    }
}
