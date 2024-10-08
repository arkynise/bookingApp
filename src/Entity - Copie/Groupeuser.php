<?php

namespace App\Entity;

use App\Repository\GroupeuserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeuserRepository::class)]
class Groupeuser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $EnMarch = null;

    #[ORM\ManyToOne(inversedBy: 'groupeusers')]
    private ?Agence $AttacherAgence = null;

    /**
     * @var Collection<int, Event>
     */
    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'groupe')]
    private Collection $events;

    /**
     * @var Collection<int, UserGroupeuser>
     */
    #[ORM\OneToMany(targetEntity: UserGroupeuser::class, mappedBy: 'groupeuser')]
    private Collection $userGroupeusers;

    /**
     * @var Collection<int, Catalogue>
     */
    #[ORM\OneToMany(targetEntity: Catalogue::class, mappedBy: 'groupe')]
    private Collection $catalogues;

    /**
     * @var Collection<int, Missiondispo>
     */
    #[ORM\OneToMany(targetEntity: Missiondispo::class, mappedBy: 'groupe')]
    private Collection $missiondispos;

    /**
     * @var Collection<int, Pubevent>
     */
    #[ORM\OneToMany(targetEntity: Pubevent::class, mappedBy: 'groupe')]
    private Collection $pubevents;

    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->userGroupeusers = new ArrayCollection();
        $this->catalogues = new ArrayCollection();
        $this->missiondispos = new ArrayCollection();
        $this->pubevents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEnMarch(): ?int
    {
        return $this->EnMarch;
    }

    public function setEnMarch(?int $EnMarch): static
    {
        $this->EnMarch = $EnMarch;

        return $this;
    }

    public function getAttacherAgence(): ?Agence
    {
        return $this->AttacherAgence;
    }

    public function setAttacherAgence(?Agence $AttacherAgence): static
    {
        $this->AttacherAgence = $AttacherAgence;

        return $this;
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setGroupe($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getGroupe() === $this) {
                $event->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserGroupeuser>
     */
    public function getUserGroupeusers(): Collection
    {
        return $this->userGroupeusers;
    }

    public function addUserGroupeuser(UserGroupeuser $userGroupeuser): static
    {
        if (!$this->userGroupeusers->contains($userGroupeuser)) {
            $this->userGroupeusers->add($userGroupeuser);
            $userGroupeuser->setGroupeuser($this);
        }

        return $this;
    }

    public function removeUserGroupeuser(UserGroupeuser $userGroupeuser): static
    {
        if ($this->userGroupeusers->removeElement($userGroupeuser)) {
            // set the owning side to null (unless already changed)
            if ($userGroupeuser->getGroupeuser() === $this) {
                $userGroupeuser->setGroupeuser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Catalogue>
     */
    public function getCatalogues(): Collection
    {
        return $this->catalogues;
    }

    public function addCatalogue(Catalogue $catalogue): static
    {
        if (!$this->catalogues->contains($catalogue)) {
            $this->catalogues->add($catalogue);
            $catalogue->setGroupe($this);
        }

        return $this;
    }

    public function removeCatalogue(Catalogue $catalogue): static
    {
        if ($this->catalogues->removeElement($catalogue)) {
            // set the owning side to null (unless already changed)
            if ($catalogue->getGroupe() === $this) {
                $catalogue->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Missiondispo>
     */
    public function getMissiondispos(): Collection
    {
        return $this->missiondispos;
    }

    public function addMissiondispo(Missiondispo $missiondispo): static
    {
        if (!$this->missiondispos->contains($missiondispo)) {
            $this->missiondispos->add($missiondispo);
            $missiondispo->setGroupe($this);
        }

        return $this;
    }

    public function removeMissiondispo(Missiondispo $missiondispo): static
    {
        if ($this->missiondispos->removeElement($missiondispo)) {
            // set the owning side to null (unless already changed)
            if ($missiondispo->getGroupe() === $this) {
                $missiondispo->setGroupe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Pubevent>
     */
    public function getPubevents(): Collection
    {
        return $this->pubevents;
    }

    public function addPubevent(Pubevent $pubevent): static
    {
        if (!$this->pubevents->contains($pubevent)) {
            $this->pubevents->add($pubevent);
            $pubevent->setGroupe($this);
        }

        return $this;
    }

    public function removePubevent(Pubevent $pubevent): static
    {
        if ($this->pubevents->removeElement($pubevent)) {
            // set the owning side to null (unless already changed)
            if ($pubevent->getGroupe() === $this) {
                $pubevent->setGroupe(null);
            }
        }

        return $this;
    }
}
