<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $marque = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $staff = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumDevis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commercial = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ContactPlace = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telCtcPlace = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ChefEquipe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MsgAnnulation = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $AnnulerEvent = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $notifications = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MsgSms = null;

    #[ORM\Column(nullable: true)]
    private ?int $compteurUrssaf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $latitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $longitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $obsLieu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $tenue = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orderEv = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fermerDate = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?User $fermerUser = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $model = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdUserWrite = null;

    #[ORM\Column(nullable: true)]
    private ?int $idDevis = null;

    #[ORM\Column(nullable: true)]
    private ?int $idClient = null;

    #[ORM\Column(nullable: true)]
    private ?int $GroupeWriter = null;

    #[ORM\Column(nullable: true)]
    private ?int $GroupeOrogine = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?Fichierbooking $Brefing = null;

    /**
     * @var Collection<int, Message>
     */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'idEvent')]
    private Collection $messages;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?Groupeuser $groupe = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?Froute $idFroute = null;

    /**
     * @var Collection<int, Eventuser>
     */
    #[ORM\OneToMany(targetEntity: Eventuser::class, mappedBy: 'idEvent')]
    private Collection $eventusers;

    /**
     * @var Collection<int, Observent>
     */
    #[ORM\OneToMany(targetEntity: Observent::class, mappedBy: 'IdEvent')]
    private Collection $observents;

    /**
     * @var Collection<int, Eventnote>
     */
    #[ORM\OneToMany(targetEntity: Eventnote::class, mappedBy: 'IdEvent')]
    private Collection $eventnotes;

    /**
     * @var Collection<int, Contrat>
     */
    #[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'idEvent')]
    private Collection $contrats;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'IdEvent')]
    private Collection $idSalarie;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'IdEvent')]
    private Collection $diffusionsalprests;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->eventusers = new ArrayCollection();
        $this->observents = new ArrayCollection();
        $this->eventnotes = new ArrayCollection();
        $this->contrats = new ArrayCollection();
        $this->idSalarie = new ArrayCollection();
        $this->diffusionsalprests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?string
    {
        return $this->Client;
    }

    public function setClient(?string $Client): static
    {
        $this->Client = $Client;

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

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

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

    

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getStaff(): ?int
    {
        return $this->staff;
    }

    public function setStaff(?int $staff): static
    {
        $this->staff = $staff;

        return $this;
    }

    public function getNumDevis(): ?string
    {
        return $this->NumDevis;
    }

    public function setNumDevis(?string $NumDevis): static
    {
        $this->NumDevis = $NumDevis;

        return $this;
    }

    public function getCommercial(): ?string
    {
        return $this->Commercial;
    }

    public function setCommercial(?string $Commercial): static
    {
        $this->Commercial = $Commercial;

        return $this;
    }

    public function getContactPlace(): ?string
    {
        return $this->ContactPlace;
    }

    public function setContactPlace(?string $ContactPlace): static
    {
        $this->ContactPlace = $ContactPlace;

        return $this;
    }

    public function getTelCtcPlace(): ?string
    {
        return $this->telCtcPlace;
    }

    public function setTelCtcPlace(?string $telCtcPlace): static
    {
        $this->telCtcPlace = $telCtcPlace;

        return $this;
    }

    public function getChefEquipe(): ?string
    {
        return $this->ChefEquipe;
    }

    public function setChefEquipe(?string $ChefEquipe): static
    {
        $this->ChefEquipe = $ChefEquipe;

        return $this;
    }

    public function getMsgAnnulation(): ?string
    {
        return $this->MsgAnnulation;
    }

    public function setMsgAnnulation(?string $MsgAnnulation): static
    {
        $this->MsgAnnulation = $MsgAnnulation;

        return $this;
    }

    public function getAnnulerEvent(): ?int
    {
        return $this->AnnulerEvent;
    }

    public function setAnnulerEvent(?int $AnnulerEvent): static
    {
        $this->AnnulerEvent = $AnnulerEvent;

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

    public function getMsgSms(): ?string
    {
        return $this->MsgSms;
    }

    public function setMsgSms(?string $MsgSms): static
    {
        $this->MsgSms = $MsgSms;

        return $this;
    }

    public function getCompteurUrssaf(): ?int
    {
        return $this->compteurUrssaf;
    }

    public function setCompteurUrssaf(?int $compteurUrssaf): static
    {
        $this->compteurUrssaf = $compteurUrssaf;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getObsLieu(): ?string
    {
        return $this->obsLieu;
    }

    public function setObsLieu(?string $obsLieu): static
    {
        $this->obsLieu = $obsLieu;

        return $this;
    }

    public function getTenue(): ?string
    {
        return $this->tenue;
    }

    public function setTenue(?string $tenue): static
    {
        $this->tenue = $tenue;

        return $this;
    }

    public function getOrderEv(): ?string
    {
        return $this->orderEv;
    }

    public function setOrderEv(?string $orderEv): static
    {
        $this->orderEv = $orderEv;

        return $this;
    }

    public function getFermerDate(): ?\DateTimeInterface
    {
        return $this->fermerDate;
    }

    public function setFermerDate(?\DateTimeInterface $fermerDate): static
    {
        $this->fermerDate = $fermerDate;

        return $this;
    }

    public function getFermerUser(): ?User
    {
        return $this->fermerUser;
    }

    public function setFermerUser(?User $fermerUser): static
    {
        $this->fermerUser = $fermerUser;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(?int $model): static
    {
        $this->model = $model;

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

    public function getIdDevis(): ?int
    {
        return $this->idDevis;
    }

    public function setIdDevis(?int $idDevis): static
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): static
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getGroupeWriter(): ?int
    {
        return $this->GroupeWriter;
    }

    public function setGroupeWriter(?int $GroupeWriter): static
    {
        $this->GroupeWriter = $GroupeWriter;

        return $this;
    }

    public function getGroupeOrogine(): ?int
    {
        return $this->GroupeOrogine;
    }

    public function setGroupeOrogine(?int $GroupeOrogine): static
    {
        $this->GroupeOrogine = $GroupeOrogine;

        return $this;
    }

    public function getBrefing(): ?Fichierbooking
    {
        return $this->Brefing;
    }

    public function setBrefing(?Fichierbooking $Brefing): static
    {
        $this->Brefing = $Brefing;

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): static
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setIdEvent($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): static
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getIdEvent() === $this) {
                $message->setIdEvent(null);
            }
        }

        return $this;
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

    public function getIdFroute(): ?Froute
    {
        return $this->idFroute;
    }

    public function setIdFroute(?Froute $idFroute): static
    {
        $this->idFroute = $idFroute;

        return $this;
    }

    /**
     * @return Collection<int, Eventuser>
     */
    public function getEventusers(): Collection
    {
        return $this->eventusers;
    }

    public function addEventuser(Eventuser $eventuser): static
    {
        if (!$this->eventusers->contains($eventuser)) {
            $this->eventusers->add($eventuser);
            $eventuser->setIdEvent($this);
        }

        return $this;
    }

    public function removeEventuser(Eventuser $eventuser): static
    {
        if ($this->eventusers->removeElement($eventuser)) {
            // set the owning side to null (unless already changed)
            if ($eventuser->getIdEvent() === $this) {
                $eventuser->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Observent>
     */
    public function getObservents(): Collection
    {
        return $this->observents;
    }

    public function addObservent(Observent $observent): static
    {
        if (!$this->observents->contains($observent)) {
            $this->observents->add($observent);
            $observent->setIdEvent($this);
        }

        return $this;
    }

    public function removeObservent(Observent $observent): static
    {
        if ($this->observents->removeElement($observent)) {
            // set the owning side to null (unless already changed)
            if ($observent->getIdEvent() === $this) {
                $observent->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Eventnote>
     */
    public function getEventnotes(): Collection
    {
        return $this->eventnotes;
    }

    public function addEventnote(Eventnote $eventnote): static
    {
        if (!$this->eventnotes->contains($eventnote)) {
            $this->eventnotes->add($eventnote);
            $eventnote->setIdEvent($this);
        }

        return $this;
    }

    public function removeEventnote(Eventnote $eventnote): static
    {
        if ($this->eventnotes->removeElement($eventnote)) {
            // set the owning side to null (unless already changed)
            if ($eventnote->getIdEvent() === $this) {
                $eventnote->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContrats(): Collection
    {
        return $this->contrats;
    }

    public function addContrat(Contrat $contrat): static
    {
        if (!$this->contrats->contains($contrat)) {
            $this->contrats->add($contrat);
            $contrat->setIdEvent($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): static
    {
        if ($this->contrats->removeElement($contrat)) {
            // set the owning side to null (unless already changed)
            if ($contrat->getIdEvent() === $this) {
                $contrat->setIdEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Diffusionsalprest>
     */
    public function getIdSalarie(): Collection
    {
        return $this->idSalarie;
    }

    /**
     * @return Collection<int, Diffusionsalprest>
     */
    public function getDiffusionsalprests(): Collection
    {
        return $this->diffusionsalprests;
    }

    public function addDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if (!$this->diffusionsalprests->contains($diffusionsalprest)) {
            $this->diffusionsalprests->add($diffusionsalprest);
            $diffusionsalprest->setIdEvent($this);
        }

        return $this;
    }

    public function removeDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if ($this->diffusionsalprests->removeElement($diffusionsalprest)) {
            // set the owning side to null (unless already changed)
            if ($diffusionsalprest->getIdEvent() === $this) {
                $diffusionsalprest->setIdEvent(null);
            }
        }

        return $this;
    }

    

   
}
