<?php

namespace App\Entity;

use App\Repository\ObserventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObserventRepository::class)]
class Observent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Libelle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'observents')]
    private ?User $ecritpar = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $notifications = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $obsCibler = null;

    #[ORM\ManyToOne(inversedBy: 'observents')]
    private ?Event $IdEvent = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getEcritpar(): ?User
    {
        return $this->ecritpar;
    }

    public function setEcritpar(?User $ecritpar): static
    {
        $this->ecritpar = $ecritpar;

        return $this;
    }

    public function getNotifications(): ?int
    {
        return $this->notifications;
    }

    public function setNotifications(?int $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getObsCibler(): ?int
    {
        return $this->obsCibler;
    }

    public function setObsCibler(?int $obsCibler): static
    {
        $this->obsCibler = $obsCibler;

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
}
