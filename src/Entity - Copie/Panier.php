<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    private ?Event $IdEvent = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Message $idMsg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Libelle = null;

    #[ORM\Column(nullable: true)]
    private ?bool $dltDoublon = null;

    #[ORM\Column(nullable: true)]
    private ?bool $cloture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titrePop = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $msgPop = null;

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

    public function getIdEvent(): ?Event
    {
        return $this->IdEvent;
    }

    public function setIdEvent(?Event $IdEvent): static
    {
        $this->IdEvent = $IdEvent;

        return $this;
    }

    public function getIdMsg(): ?Message
    {
        return $this->idMsg;
    }

    public function setIdMsg(?Message $idMsg): static
    {
        $this->idMsg = $idMsg;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(?string $Libelle): static
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function isDltDoublon(): ?bool
    {
        return $this->dltDoublon;
    }

    public function setDltDoublon(?bool $dltDoublon): static
    {
        $this->dltDoublon = $dltDoublon;

        return $this;
    }

    public function isCloture(): ?bool
    {
        return $this->cloture;
    }

    public function setCloture(?bool $cloture): static
    {
        $this->cloture = $cloture;

        return $this;
    }

    public function getTitrePop(): ?string
    {
        return $this->titrePop;
    }

    public function setTitrePop(?string $titrePop): static
    {
        $this->titrePop = $titrePop;

        return $this;
    }

    public function getMsgPop(): ?string
    {
        return $this->msgPop;
    }

    public function setMsgPop(?string $msgPop): static
    {
        $this->msgPop = $msgPop;

        return $this;
    }
}
