<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Library = null;

    #[ORM\Column(length: 255)]
    private ?string $Languages = null;

    #[ORM\Column(length: 255)]
    private ?string $FrameWork = null;

    #[ORM\Column(length: 255)]
    private ?string $SoftWare = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibrary(): ?string
    {
        return $this->Library;
    }

    public function setLibrary(string $Library): static
    {
        $this->Library = $Library;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->Languages;
    }

    public function setLanguages(string $Languages): static
    {
        $this->Languages = $Languages;

        return $this;
    }

    public function getFrameWork(): ?string
    {
        return $this->FrameWork;
    }

    public function setFrameWork(string $FrameWork): static
    {
        $this->FrameWork = $FrameWork;

        return $this;
    }

    public function getSoftWare(): ?string
    {
        return $this->SoftWare;
    }

    public function setSoftWare(string $SoftWare): static
    {
        $this->SoftWare = $SoftWare;

        return $this;
    }
}
