<?php

namespace App\Entity;

use App\Repository\ProjectImageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

use Vich\UploaderBundle\Mapping\Annotation as Vich;
#[ORM\Entity(repositoryClass: ProjectImageRepository::class)]
#[Vich\Uploadable]
class ProjectImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Vich\UploadableField(mapping: 'Projects', fileNameProperty: 'name')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $UpdateAt = null;

    #[ORM\ManyToOne(inversedBy: 'projectImages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Projects $Projects = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->UpdateAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }


    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->UpdateAt;
    }

    public function setUpdateAt(?\DateTimeImmutable $UpdateAt): static
    {
        $this->UpdateAt = $UpdateAt;

        return $this;
    }

    public function getProjects(): ?Projects
    {
        return $this->Projects;
    }

    public function setProjects(?Projects $Projects): static
    {
        $this->Projects = $Projects;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
