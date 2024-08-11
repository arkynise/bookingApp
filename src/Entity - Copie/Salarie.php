<?php

namespace App\Entity;

use App\Repository\SalarieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalarieRepository::class)]
class Salarie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Matricule = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Civilite $Civilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomeJf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Etablissement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Adress1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Complement1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CodePosatl1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $BureauDist1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Tel1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TelPort1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $ChoixAdrBulletin = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Nationalite $IdNationalite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NCarteSejour = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateExpirationSejour = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DeptNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commune = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NSec = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CleSec = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Situationfamiliale $IdSituFamilliale = null;

    #[ORM\Column(nullable: true)]
    private ?int $NbEnfant = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Bulletinmodele $IdBulletinModele = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $HeuresRemuneres = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Dascipz $IdDasCipz = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Dascodeinsee $IdDasCodeInsee = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Dascategorie $IdDasCategorie = null;

    #[ORM\Column(nullable: true)]
    private ?int $Taille = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Coulcheveux $IdCouleurCheveux = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Coulyeux $IdCouleurYeux = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Pointure = null;

    #[ORM\Column(nullable: true)]
    private ?int $TailleUniforme = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Voiture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Divers = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdSociete = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Exclu = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Treizemois $IdTreizeMois = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDebEmploi = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateFinEmploi = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Naturecontart $IdCodeNatContrat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $FinPeriodeEssai = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $SalaireBrutTotal = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $HoraireMensuel = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Qualification $IdQualification = null;

    #[ORM\Column(nullable: true)]
    private ?int $IdLieuTravail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Niveau = null;

    #[ORM\Column(nullable: true)]
    private ?int $Coef = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PaysNaissance = null;

    #[ORM\Column(nullable: true)]
    private ?int $DasProfession = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Selected = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PaysAdr1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TailleVeste = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TailleChemise = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TaillePantalon = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Permis = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DatePermis = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Moto = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Bac = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Diplome = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $OutilsInfo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nationalite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NationaliteAutre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $RefProf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ObjPro = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $CmtObjPro = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomAgences = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CmtConnus = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $AdrFb = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomJoindre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrenomJoindre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $QualiteJoindre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TelJoindre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $InfoDispoplus = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Event = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $EntTmpPtMatin = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $EntTmpPtMidi = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $EntTmpPl = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $OtherAgence = null;




    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?string $UserSelect = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Accpeter = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Imageprofile $ImageProfile = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Disponibilite $IdDisponibilite = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Languevivant $IdLv = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NivEtude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $EntTmpPlDure = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Fichierbooking $FichierCv = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $AdrInstagram = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $PermisMoto = null;

    #[ORM\ManyToOne]
    private ?Fichierbooking $FichierVoiture = null;

    #[ORM\ManyToOne]
    private ?Fichierbooking $FichierMoto = null;

    #[ORM\ManyToOne]
    private ?Fichierbooking $FichierVital = null;

    #[ORM\ManyToOne]
    private ?Fichierbooking $Signature = null;

    #[ORM\ManyToOne]
    private ?Fichierbooking $AccordSig = null;

    #[ORM\ManyToOne(inversedBy: 'salaries')]
    private ?Userapi $iduserapi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $natif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PageLinkedIn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TokenRobo = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $MajRobo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateSelectExport = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $NonInscrit = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $FinEtude = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $EntTmpWk = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $EntTmpSr = null;

    #[ORM\ManyToOne]
    private ?fichierbooking $AccordNonSig = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $excluMsg = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $excluDate = null;

    #[ORM\Column(nullable: true)]
    private ?int $excluWrite = null;

    /**
     * @var Collection<int, Avisnotation>
     */
    #[ORM\OneToMany(targetEntity: Avisnotation::class, mappedBy: 'IdCandidat')]
    private Collection $avisnotations;

    /**
     * @var Collection<int, Cataloguesalarie>
     */
    #[ORM\OneToMany(targetEntity: Cataloguesalarie::class, mappedBy: 'idSal')]
    private Collection $cataloguesalaries;

    /**
     * @var Collection<int, Salarienote>
     */
    #[ORM\OneToMany(targetEntity: Salarienote::class, mappedBy: 'IdSalarie')]
    private Collection $salarienotes;

    /**
     * @var Collection<int, Contrat>
     */
    #[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'idSal')]
    private Collection $contrats;

    /**
     * @var Collection<int, Diffusionsalprest>
     */
    #[ORM\OneToMany(targetEntity: Diffusionsalprest::class, mappedBy: 'idSalarie')]
    private Collection $diffusionsalprests;

    /**
     * @var Collection<int, Documentsal>
     */
    #[ORM\OneToMany(targetEntity: Documentsal::class, mappedBy: 'idSalarie')]
    private Collection $documentsals;

    /**
     * @var Collection<int, Failedautocompteapi>
     */
    #[ORM\OneToMany(targetEntity: Failedautocompteapi::class, mappedBy: 'salarie')]
    private Collection $failedautocompteapis;

    /**
     * @var Collection<int, Fraffectation>
     */
    #[ORM\OneToMany(targetEntity: Fraffectation::class, mappedBy: 'idSalarie')]
    private Collection $fraffectations;

    /**
     * @var Collection<int, Imagebooking>
     */
    #[ORM\OneToMany(targetEntity: Imagebooking::class, mappedBy: 'IdSalarie')]
    private Collection $imagebookings;

    /**
     * @var Collection<int, Langueparsalarie>
     */
    #[ORM\OneToMany(targetEntity: Langueparsalarie::class, mappedBy: 'idSalarie')]
    private Collection $langueparsalaries;

    /**
     * @var Collection<int, Newnotification>
     */
    #[ORM\OneToMany(targetEntity: Newnotification::class, mappedBy: 'idSalarie')]
    private Collection $newnotifications;

    /**
     * @var Collection<int, Obseventpanier>
     */
    #[ORM\OneToMany(targetEntity: Obseventpanier::class, mappedBy: 'IdSalarie')]
    private Collection $obseventpaniers;

    /**
     * @var Collection<int, Retourmsdispo>
     */
    #[ORM\OneToMany(targetEntity: Retourmsdispo::class, mappedBy: 'idSalarie')]
    private Collection $retourmsdispos;

    /**
     * @var Collection<int, Paniermsdispo>
     */
    #[ORM\OneToMany(targetEntity: Paniermsdispo::class, mappedBy: 'idSalarie')]
    private Collection $paniermsdispos;

    /**
     * @var Collection<int, Panierpub>
     */
    #[ORM\OneToMany(targetEntity: Panierpub::class, mappedBy: 'idSalarie')]
    private Collection $panierpubs;

    public function __construct()
    {
        $this->avisnotations = new ArrayCollection();
        $this->cataloguesalaries = new ArrayCollection();
        $this->salarienotes = new ArrayCollection();
        $this->contrats = new ArrayCollection();
        $this->diffusionsalprests = new ArrayCollection();
        $this->documentsals = new ArrayCollection();
        $this->failedautocompteapis = new ArrayCollection();
        $this->fraffectations = new ArrayCollection();
        $this->imagebookings = new ArrayCollection();
        $this->langueparsalaries = new ArrayCollection();
        $this->newnotifications = new ArrayCollection();
        $this->obseventpaniers = new ArrayCollection();
        $this->retourmsdispos = new ArrayCollection();
        $this->paniermsdispos = new ArrayCollection();
        $this->panierpubs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(?string $Matricule): static
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getCivilite(): ?Civilite
    {
        return $this->Civilite;
    }

    public function setCivilite(?Civilite $Civilite): static
    {
        $this->Civilite = $Civilite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getNomeJf(): ?string
    {
        return $this->NomeJf;
    }

    public function setNomeJf(?string $NomeJf): static
    {
        $this->NomeJf = $NomeJf;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->Etablissement;
    }

    public function setEtablissement(?string $Etablissement): static
    {
        $this->Etablissement = $Etablissement;

        return $this;
    }

    public function getAdress1(): ?string
    {
        return $this->Adress1;
    }

    public function setAdress1(?string $Adress1): static
    {
        $this->Adress1 = $Adress1;

        return $this;
    }

    public function getComplement1(): ?string
    {
        return $this->Complement1;
    }

    public function setComplement1(?string $Complement1): static
    {
        $this->Complement1 = $Complement1;

        return $this;
    }

    public function getCodePosatl1(): ?string
    {
        return $this->CodePosatl1;
    }

    public function setCodePosatl1(?string $CodePosatl1): static
    {
        $this->CodePosatl1 = $CodePosatl1;

        return $this;
    }

    public function getBureauDist1(): ?string
    {
        return $this->BureauDist1;
    }

    public function setBureauDist1(?string $BureauDist1): static
    {
        $this->BureauDist1 = $BureauDist1;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->Tel1;
    }

    public function setTel1(?string $Tel1): static
    {
        $this->Tel1 = $Tel1;

        return $this;
    }

    public function getTelPort1(): ?string
    {
        return $this->TelPort1;
    }

    public function setTelPort1(?string $TelPort1): static
    {
        $this->TelPort1 = $TelPort1;

        return $this;
    }

    public function getChoixAdrBulletin(): ?int
    {
        return $this->ChoixAdrBulletin;
    }

    public function setChoixAdrBulletin(?int $ChoixAdrBulletin): static
    {
        $this->ChoixAdrBulletin = $ChoixAdrBulletin;

        return $this;
    }

    public function getIdNationalite(): ?Nationalite
    {
        return $this->IdNationalite;
    }

    public function setIdNationalite(?Nationalite $IdNationalite): static
    {
        $this->IdNationalite = $IdNationalite;

        return $this;
    }

    public function getNCarteSejour(): ?string
    {
        return $this->NCarteSejour;
    }

    public function setNCarteSejour(?string $NCarteSejour): static
    {
        $this->NCarteSejour = $NCarteSejour;

        return $this;
    }

    public function getDateExpirationSejour(): ?\DateTimeInterface
    {
        return $this->DateExpirationSejour;
    }

    public function setDateExpirationSejour(?\DateTimeInterface $DateExpirationSejour): static
    {
        $this->DateExpirationSejour = $DateExpirationSejour;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $DateNaissance): static
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getDeptNaissance(): ?string
    {
        return $this->DeptNaissance;
    }

    public function setDeptNaissance(?string $DeptNaissance): static
    {
        $this->DeptNaissance = $DeptNaissance;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->Commune;
    }

    public function setCommune(?string $Commune): static
    {
        $this->Commune = $Commune;

        return $this;
    }

    public function getNSec(): ?string
    {
        return $this->NSec;
    }

    public function setNSec(?string $NSec): static
    {
        $this->NSec = $NSec;

        return $this;
    }

    public function getCleSec(): ?string
    {
        return $this->CleSec;
    }

    public function setCleSec(?string $CleSec): static
    {
        $this->CleSec = $CleSec;

        return $this;
    }

    public function getIdSituFamilliale(): ?Situationfamiliale
    {
        return $this->IdSituFamilliale;
    }

    public function setIdSituFamilliale(?Situationfamiliale $IdSituFamilliale): static
    {
        $this->IdSituFamilliale = $IdSituFamilliale;

        return $this;
    }

    public function getNbEnfant(): ?int
    {
        return $this->NbEnfant;
    }

    public function setNbEnfant(?int $NbEnfant): static
    {
        $this->NbEnfant = $NbEnfant;

        return $this;
    }

    public function getIdBulletinModele(): ?Bulletinmodele
    {
        return $this->IdBulletinModele;
    }

    public function setIdBulletinModele(?Bulletinmodele $IdBulletinModele): static
    {
        $this->IdBulletinModele = $IdBulletinModele;

        return $this;
    }

    public function getHeuresRemuneres(): ?string
    {
        return $this->HeuresRemuneres;
    }

    public function setHeuresRemuneres(?string $HeuresRemuneres): static
    {
        $this->HeuresRemuneres = $HeuresRemuneres;

        return $this;
    }

    public function getIdDasCipz(): ?Dascipz
    {
        return $this->IdDasCipz;
    }

    public function setIdDasCipz(?Dascipz $IdDasCipz): static
    {
        $this->IdDasCipz = $IdDasCipz;

        return $this;
    }

    public function getIdDasCodeInsee(): ?Dascodeinsee
    {
        return $this->IdDasCodeInsee;
    }

    public function setIdDasCodeInsee(?Dascodeinsee $IdDasCodeInsee): static
    {
        $this->IdDasCodeInsee = $IdDasCodeInsee;

        return $this;
    }

    public function getIdDasCategorie(): ?Dascategorie
    {
        return $this->IdDasCategorie;
    }

    public function setIdDasCategorie(?Dascategorie $IdDasCategorie): static
    {
        $this->IdDasCategorie = $IdDasCategorie;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->Taille;
    }

    public function setTaille(?int $Taille): static
    {
        $this->Taille = $Taille;

        return $this;
    }

    public function getIdCouleurCheveux(): ?Coulcheveux
    {
        return $this->IdCouleurCheveux;
    }

    public function setIdCouleurCheveux(?Coulcheveux $IdCouleurCheveux): static
    {
        $this->IdCouleurCheveux = $IdCouleurCheveux;

        return $this;
    }

    public function getIdCouleurYeux(): ?Coulyeux
    {
        return $this->IdCouleurYeux;
    }

    public function setIdCouleurYeux(?Coulyeux $IdCouleurYeux): static
    {
        $this->IdCouleurYeux = $IdCouleurYeux;

        return $this;
    }

    public function getPointure(): ?string
    {
        return $this->Pointure;
    }

    public function setPointure(?string $Pointure): static
    {
        $this->Pointure = $Pointure;

        return $this;
    }

    public function getTailleUniforme(): ?int
    {
        return $this->TailleUniforme;
    }

    public function setTailleUniforme(?int $TailleUniforme): static
    {
        $this->TailleUniforme = $TailleUniforme;

        return $this;
    }

    public function getVoiture(): ?int
    {
        return $this->Voiture;
    }

    public function setVoiture(?int $Voiture): static
    {
        $this->Voiture = $Voiture;

        return $this;
    }

    public function getDivers(): ?string
    {
        return $this->Divers;
    }

    public function setDivers(?string $Divers): static
    {
        $this->Divers = $Divers;

        return $this;
    }

    public function getIdSociete(): ?int
    {
        return $this->IdSociete;
    }

    public function setIdSociete(?int $IdSociete): static
    {
        $this->IdSociete = $IdSociete;

        return $this;
    }

    public function getExclu(): ?int
    {
        return $this->Exclu;
    }

    public function setExclu(?int $Exclu): static
    {
        $this->Exclu = $Exclu;

        return $this;
    }

    public function getIdTreizeMois(): ?Treizemois
    {
        return $this->IdTreizeMois;
    }

    public function setIdTreizeMois(?Treizemois $IdTreizeMois): static
    {
        $this->IdTreizeMois = $IdTreizeMois;

        return $this;
    }

    public function getDateDebEmploi(): ?\DateTimeInterface
    {
        return $this->DateDebEmploi;
    }

    public function setDateDebEmploi(?\DateTimeInterface $DateDebEmploi): static
    {
        $this->DateDebEmploi = $DateDebEmploi;

        return $this;
    }

    public function getDateFinEmploi(): ?\DateTimeInterface
    {
        return $this->DateFinEmploi;
    }

    public function setDateFinEmploi(?\DateTimeInterface $DateFinEmploi): static
    {
        $this->DateFinEmploi = $DateFinEmploi;

        return $this;
    }

    public function getIdCodeNatContrat(): ?Naturecontart
    {
        return $this->IdCodeNatContrat;
    }

    public function setIdCodeNatContrat(?Naturecontart $IdCodeNatContrat): static
    {
        $this->IdCodeNatContrat = $IdCodeNatContrat;

        return $this;
    }

    public function getFinPeriodeEssai(): ?\DateTimeInterface
    {
        return $this->FinPeriodeEssai;
    }

    public function setFinPeriodeEssai(?\DateTimeInterface $FinPeriodeEssai): static
    {
        $this->FinPeriodeEssai = $FinPeriodeEssai;

        return $this;
    }

    public function getSalaireBrutTotal(): ?string
    {
        return $this->SalaireBrutTotal;
    }

    public function setSalaireBrutTotal(?string $SalaireBrutTotal): static
    {
        $this->SalaireBrutTotal = $SalaireBrutTotal;

        return $this;
    }

    public function getHoraireMensuel(): ?string
    {
        return $this->HoraireMensuel;
    }

    public function setHoraireMensuel(?string $HoraireMensuel): static
    {
        $this->HoraireMensuel = $HoraireMensuel;

        return $this;
    }

    public function getIdQualification(): ?Qualification
    {
        return $this->IdQualification;
    }

    public function setIdQualification(?Qualification $IdQualification): static
    {
        $this->IdQualification = $IdQualification;

        return $this;
    }

    public function getIdLieuTravail(): ?int
    {
        return $this->IdLieuTravail;
    }

    public function setIdLieuTravail(?int $IdLieuTravail): static
    {
        $this->IdLieuTravail = $IdLieuTravail;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }

    public function setNiveau(?string $Niveau): static
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getCoef(): ?int
    {
        return $this->Coef;
    }

    public function setCoef(?int $Coef): static
    {
        $this->Coef = $Coef;

        return $this;
    }

    public function getPaysNaissance(): ?string
    {
        return $this->PaysNaissance;
    }

    public function setPaysNaissance(?string $PaysNaissance): static
    {
        $this->PaysNaissance = $PaysNaissance;

        return $this;
    }

    public function getDasProfession(): ?int
    {
        return $this->DasProfession;
    }

    public function setDasProfession(?int $DasProfession): static
    {
        $this->DasProfession = $DasProfession;

        return $this;
    }

    public function getSelected(): ?int
    {
        return $this->Selected;
    }

    public function setSelected(?int $Selected): static
    {
        $this->Selected = $Selected;

        return $this;
    }

    public function getPaysAdr1(): ?string
    {
        return $this->PaysAdr1;
    }

    public function setPaysAdr1(?string $PaysAdr1): static
    {
        $this->PaysAdr1 = $PaysAdr1;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTailleVeste(): ?string
    {
        return $this->TailleVeste;
    }

    public function setTailleVeste(?string $TailleVeste): static
    {
        $this->TailleVeste = $TailleVeste;

        return $this;
    }

    public function getTailleChemise(): ?string
    {
        return $this->TailleChemise;
    }

    public function setTailleChemise(?string $TailleChemise): static
    {
        $this->TailleChemise = $TailleChemise;

        return $this;
    }

    public function getTaillePantalon(): ?string
    {
        return $this->TaillePantalon;
    }

    public function setTaillePantalon(?string $TaillePantalon): static
    {
        $this->TaillePantalon = $TaillePantalon;

        return $this;
    }

    public function getPermis(): ?int
    {
        return $this->Permis;
    }

    public function setPermis(?int $Permis): static
    {
        $this->Permis = $Permis;

        return $this;
    }

    public function getDatePermis(): ?\DateTimeInterface
    {
        return $this->DatePermis;
    }

    public function setDatePermis(?\DateTimeInterface $DatePermis): static
    {
        $this->DatePermis = $DatePermis;

        return $this;
    }

    public function getMoto(): ?int
    {
        return $this->Moto;
    }

    public function setMoto(?int $Moto): static
    {
        $this->Moto = $Moto;

        return $this;
    }

    public function getBac(): ?int
    {
        return $this->Bac;
    }

    public function setBac(?int $Bac): static
    {
        $this->Bac = $Bac;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->Diplome;
    }

    public function setDiplome(?string $Diplome): static
    {
        $this->Diplome = $Diplome;

        return $this;
    }

    public function getOutilsInfo(): ?string
    {
        return $this->OutilsInfo;
    }

    public function setOutilsInfo(?string $OutilsInfo): static
    {
        $this->OutilsInfo = $OutilsInfo;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->Nationalite;
    }

    public function setNationalite(?string $Nationalite): static
    {
        $this->Nationalite = $Nationalite;

        return $this;
    }

    public function getNationaliteAutre(): ?string
    {
        return $this->NationaliteAutre;
    }

    public function setNationaliteAutre(?string $NationaliteAutre): static
    {
        $this->NationaliteAutre = $NationaliteAutre;

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

    public function getRefProf(): ?string
    {
        return $this->RefProf;
    }

    public function setRefProf(?string $RefProf): static
    {
        $this->RefProf = $RefProf;

        return $this;
    }

    public function getObjPro(): ?string
    {
        return $this->ObjPro;
    }

    public function setObjPro(?string $ObjPro): static
    {
        $this->ObjPro = $ObjPro;

        return $this;
    }

    public function getCmtObjPro(): ?string
    {
        return $this->CmtObjPro;
    }

    public function setCmtObjPro(?string $CmtObjPro): static
    {
        $this->CmtObjPro = $CmtObjPro;

        return $this;
    }

    public function getNomAgences(): ?string
    {
        return $this->NomAgences;
    }

    public function setNomAgences(?string $NomAgences): static
    {
        $this->NomAgences = $NomAgences;

        return $this;
    }

    public function getCmtConnus(): ?string
    {
        return $this->CmtConnus;
    }

    public function setCmtConnus(?string $CmtConnus): static
    {
        $this->CmtConnus = $CmtConnus;

        return $this;
    }

    public function getAdrFb(): ?string
    {
        return $this->AdrFb;
    }

    public function setAdrFb(?string $AdrFb): static
    {
        $this->AdrFb = $AdrFb;

        return $this;
    }

    public function getNomJoindre(): ?string
    {
        return $this->NomJoindre;
    }

    public function setNomJoindre(?string $NomJoindre): static
    {
        $this->NomJoindre = $NomJoindre;

        return $this;
    }

    public function getPrenomJoindre(): ?string
    {
        return $this->PrenomJoindre;
    }

    public function setPrenomJoindre(?string $PrenomJoindre): static
    {
        $this->PrenomJoindre = $PrenomJoindre;

        return $this;
    }

    public function getQualiteJoindre(): ?string
    {
        return $this->QualiteJoindre;
    }

    public function setQualiteJoindre(?string $QualiteJoindre): static
    {
        $this->QualiteJoindre = $QualiteJoindre;

        return $this;
    }

    public function getTelJoindre(): ?string
    {
        return $this->TelJoindre;
    }

    public function setTelJoindre(?string $TelJoindre): static
    {
        $this->TelJoindre = $TelJoindre;

        return $this;
    }

    public function getInfoDispoplus(): ?string
    {
        return $this->InfoDispoplus;
    }

    public function setInfoDispoplus(?string $InfoDispoplus): static
    {
        $this->InfoDispoplus = $InfoDispoplus;

        return $this;
    }

    public function getEvent(): ?int
    {
        return $this->Event;
    }

    public function setEvent(?int $Event): static
    {
        $this->Event = $Event;

        return $this;
    }

    public function getEntTmpPtMatin(): ?int
    {
        return $this->EntTmpPtMatin;
    }

    public function setEntTmpPtMatin(?int $EntTmpPtMatin): static
    {
        $this->EntTmpPtMatin = $EntTmpPtMatin;

        return $this;
    }

    public function getEntTmpPtMidi(): ?int
    {
        return $this->EntTmpPtMidi;
    }

    public function setEntTmpPtMidi(?int $EntTmpPtMidi): static
    {
        $this->EntTmpPtMidi = $EntTmpPtMidi;

        return $this;
    }

    public function getEntTmpPl(): ?int
    {
        return $this->EntTmpPl;
    }

    public function setEntTmpPl(?int $EntTmpPl): static
    {
        $this->EntTmpPl = $EntTmpPl;

        return $this;
    }

    public function getOtherAgence(): ?int
    {
        return $this->OtherAgence;
    }

    public function setOtherAgence(?int $OtherAgence): static
    {
        $this->OtherAgence = $OtherAgence;

        return $this;
    }

   

 

    

   
    


    public function getUserSelect(): ?string
    {
        return $this->UserSelect;
    }

    public function setUserSelect(?string $UserSelect): static
    {
        $this->UserSelect = $UserSelect;

        return $this;
    }

    public function getAccpeter(): ?int
    {
        return $this->Accpeter;
    }

    public function setAccpeter(?int $Accpeter): static
    {
        $this->Accpeter = $Accpeter;

        return $this;
    }

    public function getImageProfile(): ?Imageprofile
    {
        return $this->ImageProfile;
    }

    public function setImageProfile(?Imageprofile $ImageProfile): static
    {
        $this->ImageProfile = $ImageProfile;

        return $this;
    }

    public function getIdDisponibilite(): ?Disponibilite
    {
        return $this->IdDisponibilite;
    }

    public function setIdDisponibilite(?Disponibilite $IdDisponibilite): static
    {
        $this->IdDisponibilite = $IdDisponibilite;

        return $this;
    }

    public function getIdLv(): ?Languevivant
    {
        return $this->IdLv;
    }

    public function setIdLv(?Languevivant $IdLv): static
    {
        $this->IdLv = $IdLv;

        return $this;
    }

    public function getNivEtude(): ?string
    {
        return $this->NivEtude;
    }

    public function setNivEtude(?string $NivEtude): static
    {
        $this->NivEtude = $NivEtude;

        return $this;
    }

    public function getEntTmpPlDure(): ?string
    {
        return $this->EntTmpPlDure;
    }

    public function setEntTmpPlDure(?string $EntTmpPlDure): static
    {
        $this->EntTmpPlDure = $EntTmpPlDure;

        return $this;
    }

    public function getFichierCv(): ?Fichierbooking
    {
        return $this->FichierCv;
    }

    public function setFichierCv(?Fichierbooking $FichierCv): static
    {
        $this->FichierCv = $FichierCv;

        return $this;
    }

    public function getAdrInstagram(): ?string
    {
        return $this->AdrInstagram;
    }

    public function setAdrInstagram(?string $AdrInstagram): static
    {
        $this->AdrInstagram = $AdrInstagram;

        return $this;
    }

    public function getPermisMoto(): ?int
    {
        return $this->PermisMoto;
    }

    public function setPermisMoto(?int $PermisMoto): static
    {
        $this->PermisMoto = $PermisMoto;

        return $this;
    }

    public function getFichierVoiture(): ?Fichierbooking
    {
        return $this->FichierVoiture;
    }

    public function setFichierVoiture(?Fichierbooking $FichierVoiture): static
    {
        $this->FichierVoiture = $FichierVoiture;

        return $this;
    }

    public function getFichierMoto(): ?Fichierbooking
    {
        return $this->FichierMoto;
    }

    public function setFichierMoto(?Fichierbooking $FichierMoto): static
    {
        $this->FichierMoto = $FichierMoto;

        return $this;
    }

    public function getFichierVital(): ?Fichierbooking
    {
        return $this->FichierVital;
    }

    public function setFichierVital(?Fichierbooking $FichierVital): static
    {
        $this->FichierVital = $FichierVital;

        return $this;
    }

    public function getSignature(): ?Fichierbooking
    {
        return $this->Signature;
    }

    public function setSignature(?Fichierbooking $Signature): static
    {
        $this->Signature = $Signature;

        return $this;
    }

    public function getAccordSig(): ?Fichierbooking
    {
        return $this->AccordSig;
    }

    public function setAccordSig(?Fichierbooking $AccordSig): static
    {
        $this->AccordSig = $AccordSig;

        return $this;
    }

    public function getIduserapi(): ?Userapi
    {
        return $this->iduserapi;
    }

    public function setIduserapi(?Userapi $iduserapi): static
    {
        $this->iduserapi = $iduserapi;

        return $this;
    }

    public function getNatif(): ?string
    {
        return $this->natif;
    }

    public function setNatif(?string $natif): static
    {
        $this->natif = $natif;

        return $this;
    }

    public function getPageLinkedIn(): ?string
    {
        return $this->PageLinkedIn;
    }

    public function setPageLinkedIn(?string $PageLinkedIn): static
    {
        $this->PageLinkedIn = $PageLinkedIn;

        return $this;
    }

    public function getTokenRobo(): ?string
    {
        return $this->TokenRobo;
    }

    public function setTokenRobo(?string $TokenRobo): static
    {
        $this->TokenRobo = $TokenRobo;

        return $this;
    }

    public function getMajRobo(): ?int
    {
        return $this->MajRobo;
    }

    public function setMajRobo(?int $MajRobo): static
    {
        $this->MajRobo = $MajRobo;

        return $this;
    }

    public function getDateSelectExport(): ?\DateTimeInterface
    {
        return $this->DateSelectExport;
    }

    public function setDateSelectExport(?\DateTimeInterface $DateSelectExport): static
    {
        $this->DateSelectExport = $DateSelectExport;

        return $this;
    }

    public function getNonInscrit(): ?int
    {
        return $this->NonInscrit;
    }

    public function setNonInscrit(?int $NonInscrit): static
    {
        $this->NonInscrit = $NonInscrit;

        return $this;
    }

    public function getFinEtude(): ?int
    {
        return $this->FinEtude;
    }

    public function setFinEtude(?int $FinEtude): static
    {
        $this->FinEtude = $FinEtude;

        return $this;
    }

    public function getEntTmpWk(): ?int
    {
        return $this->EntTmpWk;
    }

    public function setEntTmpWk(?int $EntTmpWk): static
    {
        $this->EntTmpWk = $EntTmpWk;

        return $this;
    }

    public function getEntTmpSr(): ?int
    {
        return $this->EntTmpSr;
    }

    public function setEntTmpSr(?int $EntTmpSr): static
    {
        $this->EntTmpSr = $EntTmpSr;

        return $this;
    }

    public function getAccordNonSig(): ?fichierbooking
    {
        return $this->AccordNonSig;
    }

    public function setAccordNonSig(?fichierbooking $AccordNonSig): static
    {
        $this->AccordNonSig = $AccordNonSig;

        return $this;
    }

    public function getExcluMsg(): ?string
    {
        return $this->excluMsg;
    }

    public function setExcluMsg(?string $excluMsg): static
    {
        $this->excluMsg = $excluMsg;

        return $this;
    }

    public function getExcluDate(): ?\DateTimeInterface
    {
        return $this->excluDate;
    }

    public function setExcluDate(?\DateTimeInterface $excluDate): static
    {
        $this->excluDate = $excluDate;

        return $this;
    }

    public function getExcluWrite(): ?int
    {
        return $this->excluWrite;
    }

    public function setExcluWrite(?int $excluWrite): static
    {
        $this->excluWrite = $excluWrite;

        return $this;
    }

    /**
     * @return Collection<int, Avisnotation>
     */
    public function getAvisnotations(): Collection
    {
        return $this->avisnotations;
    }

    public function addAvisnotation(Avisnotation $avisnotation): static
    {
        if (!$this->avisnotations->contains($avisnotation)) {
            $this->avisnotations->add($avisnotation);
            $avisnotation->setIdCandidat($this);
        }

        return $this;
    }

    public function removeAvisnotation(Avisnotation $avisnotation): static
    {
        if ($this->avisnotations->removeElement($avisnotation)) {
            // set the owning side to null (unless already changed)
            if ($avisnotation->getIdCandidat() === $this) {
                $avisnotation->setIdCandidat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cataloguesalarie>
     */
    public function getCataloguesalaries(): Collection
    {
        return $this->cataloguesalaries;
    }

    public function addCataloguesalary(Cataloguesalarie $cataloguesalary): static
    {
        if (!$this->cataloguesalaries->contains($cataloguesalary)) {
            $this->cataloguesalaries->add($cataloguesalary);
            $cataloguesalary->setIdSal($this);
        }

        return $this;
    }

    public function removeCataloguesalary(Cataloguesalarie $cataloguesalary): static
    {
        if ($this->cataloguesalaries->removeElement($cataloguesalary)) {
            // set the owning side to null (unless already changed)
            if ($cataloguesalary->getIdSal() === $this) {
                $cataloguesalary->setIdSal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Salarienote>
     */
    public function getSalarienotes(): Collection
    {
        return $this->salarienotes;
    }

    public function addSalarienote(Salarienote $salarienote): static
    {
        if (!$this->salarienotes->contains($salarienote)) {
            $this->salarienotes->add($salarienote);
            $salarienote->setIdSalarie($this);
        }

        return $this;
    }

    public function removeSalarienote(Salarienote $salarienote): static
    {
        if ($this->salarienotes->removeElement($salarienote)) {
            // set the owning side to null (unless already changed)
            if ($salarienote->getIdSalarie() === $this) {
                $salarienote->setIdSalarie(null);
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
            $contrat->setIdSal($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): static
    {
        if ($this->contrats->removeElement($contrat)) {
            // set the owning side to null (unless already changed)
            if ($contrat->getIdSal() === $this) {
                $contrat->setIdSal(null);
            }
        }

        return $this;
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
            $diffusionsalprest->setIdSalarie($this);
        }

        return $this;
    }

    public function removeDiffusionsalprest(Diffusionsalprest $diffusionsalprest): static
    {
        if ($this->diffusionsalprests->removeElement($diffusionsalprest)) {
            // set the owning side to null (unless already changed)
            if ($diffusionsalprest->getIdSalarie() === $this) {
                $diffusionsalprest->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Documentsal>
     */
    public function getDocumentsals(): Collection
    {
        return $this->documentsals;
    }

    public function addDocumentsal(Documentsal $documentsal): static
    {
        if (!$this->documentsals->contains($documentsal)) {
            $this->documentsals->add($documentsal);
            $documentsal->setIdSalarie($this);
        }

        return $this;
    }

    public function removeDocumentsal(Documentsal $documentsal): static
    {
        if ($this->documentsals->removeElement($documentsal)) {
            // set the owning side to null (unless already changed)
            if ($documentsal->getIdSalarie() === $this) {
                $documentsal->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Failedautocompteapi>
     */
    public function getFailedautocompteapis(): Collection
    {
        return $this->failedautocompteapis;
    }

    public function addFailedautocompteapi(Failedautocompteapi $failedautocompteapi): static
    {
        if (!$this->failedautocompteapis->contains($failedautocompteapi)) {
            $this->failedautocompteapis->add($failedautocompteapi);
            $failedautocompteapi->setSalarie($this);
        }

        return $this;
    }

    public function removeFailedautocompteapi(Failedautocompteapi $failedautocompteapi): static
    {
        if ($this->failedautocompteapis->removeElement($failedautocompteapi)) {
            // set the owning side to null (unless already changed)
            if ($failedautocompteapi->getSalarie() === $this) {
                $failedautocompteapi->setSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fraffectation>
     */
    public function getFraffectations(): Collection
    {
        return $this->fraffectations;
    }

    public function addFraffectation(Fraffectation $fraffectation): static
    {
        if (!$this->fraffectations->contains($fraffectation)) {
            $this->fraffectations->add($fraffectation);
            $fraffectation->setIdSalarie($this);
        }

        return $this;
    }

    public function removeFraffectation(Fraffectation $fraffectation): static
    {
        if ($this->fraffectations->removeElement($fraffectation)) {
            // set the owning side to null (unless already changed)
            if ($fraffectation->getIdSalarie() === $this) {
                $fraffectation->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Imagebooking>
     */
    public function getImagebookings(): Collection
    {
        return $this->imagebookings;
    }

    public function addImagebooking(Imagebooking $imagebooking): static
    {
        if (!$this->imagebookings->contains($imagebooking)) {
            $this->imagebookings->add($imagebooking);
            $imagebooking->setIdSalarie($this);
        }

        return $this;
    }

    public function removeImagebooking(Imagebooking $imagebooking): static
    {
        if ($this->imagebookings->removeElement($imagebooking)) {
            // set the owning side to null (unless already changed)
            if ($imagebooking->getIdSalarie() === $this) {
                $imagebooking->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Langueparsalarie>
     */
    public function getLangueparsalaries(): Collection
    {
        return $this->langueparsalaries;
    }

    public function addLangueparsalary(Langueparsalarie $langueparsalary): static
    {
        if (!$this->langueparsalaries->contains($langueparsalary)) {
            $this->langueparsalaries->add($langueparsalary);
            $langueparsalary->setIdSalarie($this);
        }

        return $this;
    }

    public function removeLangueparsalary(Langueparsalarie $langueparsalary): static
    {
        if ($this->langueparsalaries->removeElement($langueparsalary)) {
            // set the owning side to null (unless already changed)
            if ($langueparsalary->getIdSalarie() === $this) {
                $langueparsalary->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Newnotification>
     */
    public function getNewnotifications(): Collection
    {
        return $this->newnotifications;
    }

    public function addNewnotification(Newnotification $newnotification): static
    {
        if (!$this->newnotifications->contains($newnotification)) {
            $this->newnotifications->add($newnotification);
            $newnotification->setIdSalarie($this);
        }

        return $this;
    }

    public function removeNewnotification(Newnotification $newnotification): static
    {
        if ($this->newnotifications->removeElement($newnotification)) {
            // set the owning side to null (unless already changed)
            if ($newnotification->getIdSalarie() === $this) {
                $newnotification->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Obseventpanier>
     */
    public function getObseventpaniers(): Collection
    {
        return $this->obseventpaniers;
    }

    public function addObseventpanier(Obseventpanier $obseventpanier): static
    {
        if (!$this->obseventpaniers->contains($obseventpanier)) {
            $this->obseventpaniers->add($obseventpanier);
            $obseventpanier->setIdSalarie($this);
        }

        return $this;
    }

    public function removeObseventpanier(Obseventpanier $obseventpanier): static
    {
        if ($this->obseventpaniers->removeElement($obseventpanier)) {
            // set the owning side to null (unless already changed)
            if ($obseventpanier->getIdSalarie() === $this) {
                $obseventpanier->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Retourmsdispo>
     */
    public function getRetourmsdispos(): Collection
    {
        return $this->retourmsdispos;
    }

    public function addRetourmsdispo(Retourmsdispo $retourmsdispo): static
    {
        if (!$this->retourmsdispos->contains($retourmsdispo)) {
            $this->retourmsdispos->add($retourmsdispo);
            $retourmsdispo->setIdSalarie($this);
        }

        return $this;
    }

    public function removeRetourmsdispo(Retourmsdispo $retourmsdispo): static
    {
        if ($this->retourmsdispos->removeElement($retourmsdispo)) {
            // set the owning side to null (unless already changed)
            if ($retourmsdispo->getIdSalarie() === $this) {
                $retourmsdispo->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Paniermsdispo>
     */
    public function getPaniermsdispos(): Collection
    {
        return $this->paniermsdispos;
    }

    public function addPaniermsdispo(Paniermsdispo $paniermsdispo): static
    {
        if (!$this->paniermsdispos->contains($paniermsdispo)) {
            $this->paniermsdispos->add($paniermsdispo);
            $paniermsdispo->setIdSalarie($this);
        }

        return $this;
    }

    public function removePaniermsdispo(Paniermsdispo $paniermsdispo): static
    {
        if ($this->paniermsdispos->removeElement($paniermsdispo)) {
            // set the owning side to null (unless already changed)
            if ($paniermsdispo->getIdSalarie() === $this) {
                $paniermsdispo->setIdSalarie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panierpub>
     */
    public function getPanierpubs(): Collection
    {
        return $this->panierpubs;
    }

    public function addPanierpub(Panierpub $panierpub): static
    {
        if (!$this->panierpubs->contains($panierpub)) {
            $this->panierpubs->add($panierpub);
            $panierpub->setIdSalarie($this);
        }

        return $this;
    }

    public function removePanierpub(Panierpub $panierpub): static
    {
        if ($this->panierpubs->removeElement($panierpub)) {
            // set the owning side to null (unless already changed)
            if ($panierpub->getIdSalarie() === $this) {
                $panierpub->setIdSalarie(null);
            }
        }

        return $this;
    }
}
