<?php

namespace App\Entity;

use App\Repository\SituationfamilialeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SituationfamilialeRepository::class)]
class Situationfamiliale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:'Libelle',length: 255, nullable: true)]
    private ?string $Libelle = null;

    /**
     * @var Collection<int, Salarie>
     */
    #[ORM\OneToMany(targetEntity: Salarie::class, mappedBy: 'IdSituFamilliale')]
    private Collection $salaries;

    public function __construct()
    {
        $this->salaries = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Salarie>
     */
    public function getSalaries(): Collection
    {
        return $this->salaries;
    }

    public function addSalary(Salarie $salary): static
    {
        if (!$this->salaries->contains($salary)) {
            $this->salaries->add($salary);
            $salary->setIdSituFamilliale($this);
        }

        return $this;
    }

    public function removeSalary(Salarie $salary): static
    {
        if ($this->salaries->removeElement($salary)) {
            // set the owning side to null (unless already changed)
            if ($salary->getIdSituFamilliale() === $this) {
                $salary->setIdSituFamilliale(null);
            }
        }

        return $this;
    }
}
