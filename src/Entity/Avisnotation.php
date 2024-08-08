<?php

namespace App\Entity;

use App\Repository\AvisnotationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisnotationRepository::class)]
class Avisnotation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Avis = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\ManyToOne(inversedBy: 'avisnotations')]
    private ?Salarie $IdCandidat = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdBu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $BuLibelle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getAvis(): ?int
    {
        return $this->Avis;
    }

    public function setAvis(?int $Avis): static
    {
        $this->Avis = $Avis;

        return $this;
    }

    public function getIdUserWrite(): ?int
    {
        return $this->IdUserWrite;
    }

    public function setIdUserWrite(?int $IdUserWrite): static
    {
        $this->IdUserWrite = $IdUserWrite;

        return $this;
    }

    public function getIdCandidat(): ?Salarie
    {
        return $this->IdCandidat;
    }

    public function setIdCandidat(?Salarie $IdCandidat): static
    {
        $this->IdCandidat = $IdCandidat;

        return $this;
    }

    public function getIdBu(): ?int
    {
        return $this->IdBu;
    }

    public function setIdBu(?int $IdBu): static
    {
        $this->IdBu = $IdBu;

        return $this;
    }

    public function getBuLibelle(): ?string
    {
        return $this->BuLibelle;
    }

    public function setBuLibelle(?string $BuLibelle): static
    {
        $this->BuLibelle = $BuLibelle;

        return $this;
    }
}
