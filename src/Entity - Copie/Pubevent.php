<?php

namespace App\Entity;

use App\Repository\PubeventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PubeventRepository::class)]
class Pubevent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'pubevents')]
    private ?Groupeuser $groupe = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUserWrite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(nullable: true)]
    private ?bool $homme = null;

    #[ORM\Column(nullable: true)]
    private ?bool $femme = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoAppelle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debutPub = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $finPub = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionPub = null;

    #[ORM\Column(nullable: true)]
    private ?bool $demiTrav = null;

    #[ORM\Column(nullable: true)]
    private ?bool $jourTrav = null;

    #[ORM\Column(nullable: true)]
    private ?bool $soirtrav = null;

    #[ORM\Column(nullable: true)]
    private ?bool $publier = null;

    #[ORM\Column(nullable: true)]
    private ?bool $notifications = null;

    /**
     * @var Collection<int, Imagepubevent>
     */
    #[ORM\OneToMany(targetEntity: Imagepubevent::class, mappedBy: 'idPubEvent')]
    private Collection $imagepubevents;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Imagepubevent $imgPubEvent = null;

    public function __construct()
    {
        $this->imagepubevents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?Groupeuser
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupeuser $groupe): static
    {
        $this->groupe = $groupe;

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

    public function getIdUserWrite(): ?int
    {
        return $this->idUserWrite;
    }

    public function setIdUserWrite(?int $idUserWrite): static
    {
        $this->idUserWrite = $idUserWrite;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getInfoDate(): ?string
    {
        return $this->infoDate;
    }

    public function setInfoDate(?string $infoDate): static
    {
        $this->infoDate = $infoDate;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function isHomme(): ?bool
    {
        return $this->homme;
    }

    public function setHomme(?bool $homme): static
    {
        $this->homme = $homme;

        return $this;
    }

    public function isFemme(): ?bool
    {
        return $this->femme;
    }

    public function setFemme(?bool $femme): static
    {
        $this->femme = $femme;

        return $this;
    }

    public function getInfoAppelle(): ?string
    {
        return $this->infoAppelle;
    }

    public function setInfoAppelle(?string $infoAppelle): static
    {
        $this->infoAppelle = $infoAppelle;

        return $this;
    }

    public function getDebutPub(): ?\DateTimeInterface
    {
        return $this->debutPub;
    }

    public function setDebutPub(?\DateTimeInterface $debutPub): static
    {
        $this->debutPub = $debutPub;

        return $this;
    }

    public function getFinPub(): ?\DateTimeInterface
    {
        return $this->finPub;
    }

    public function setFinPub(?\DateTimeInterface $finPub): static
    {
        $this->finPub = $finPub;

        return $this;
    }

    public function getDescriptionPub(): ?string
    {
        return $this->descriptionPub;
    }

    public function setDescriptionPub(?string $descriptionPub): static
    {
        $this->descriptionPub = $descriptionPub;

        return $this;
    }

    public function isDemiTrav(): ?bool
    {
        return $this->demiTrav;
    }

    public function setDemiTrav(?bool $demiTrav): static
    {
        $this->demiTrav = $demiTrav;

        return $this;
    }

    public function isJourTrav(): ?bool
    {
        return $this->jourTrav;
    }

    public function setJourTrav(?bool $jourTrav): static
    {
        $this->jourTrav = $jourTrav;

        return $this;
    }

    public function isSoirtrav(): ?bool
    {
        return $this->soirtrav;
    }

    public function setSoirtrav(bool $soirtrav): static
    {
        $this->soirtrav = $soirtrav;

        return $this;
    }

    public function isPublier(): ?bool
    {
        return $this->publier;
    }

    public function setPublier(bool $publier): static
    {
        $this->publier = $publier;

        return $this;
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

    /**
     * @return Collection<int, Imagepubevent>
     */
    public function getImagepubevents(): Collection
    {
        return $this->imagepubevents;
    }

    public function addImagepubevent(Imagepubevent $imagepubevent): static
    {
        if (!$this->imagepubevents->contains($imagepubevent)) {
            $this->imagepubevents->add($imagepubevent);
            $imagepubevent->setIdPubEvent($this);
        }

        return $this;
    }

    public function removeImagepubevent(Imagepubevent $imagepubevent): static
    {
        if ($this->imagepubevents->removeElement($imagepubevent)) {
            // set the owning side to null (unless already changed)
            if ($imagepubevent->getIdPubEvent() === $this) {
                $imagepubevent->setIdPubEvent(null);
            }
        }

        return $this;
    }

    public function getImgPubEvent(): ?Imagepubevent
    {
        return $this->imgPubEvent;
    }

    public function setImgPubEvent(?Imagepubevent $imgPubEvent): static
    {
        $this->imgPubEvent = $imgPubEvent;

        return $this;
    }
}
