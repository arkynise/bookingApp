<?php

namespace App\Entity;

use App\Repository\PanierpubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierpubRepository::class)]
class Panierpub
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    #[ORM\ManyToOne(inversedBy: 'panierpubs')]
    private ?salarie $idSalarie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isNotifications(): ?bool
    {
        return $this->notifications;
    }

    public function setNotifications(?bool $notifications): static
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getIdSalarie(): ?salarie
    {
        return $this->idSalarie;
    }

    public function setIdSalarie(?salarie $idSalarie): static
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }
}
