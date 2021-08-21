<?php

namespace App\Entity;

use App\Repository\ArrestationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArrestationRepository::class)
 */
class Arrestation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $identiteEmetteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $identiteAttache;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateHeure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomSuspect;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomSuspect;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateNaissanceSuspect;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroSuspect;

    /**
     * @ORM\Column(type="blob")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $permisConduire;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $permisPpa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $heureDroit;

    /**
     * @ORM\Column(type="boolean")
     */
    private $recidiviste;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $cooperation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photoFouilleUn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoFouilleDeux;

    /**
     * @ORM\Column(type="blob")
     */
    private $fairReproche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $carteIdentite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $permisConduireImg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $permisPpaImg;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $suspectFace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $suspectDos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $suspectProfilUn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $suspectProfilDeux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoVehiculeUn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoVehiculeDeux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoPlaque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentiteEmetteur(): ?string
    {
        return $this->identiteEmetteur;
    }

    public function setIdentiteEmetteur(string $identiteEmetteur): self
    {
        $this->identiteEmetteur = $identiteEmetteur;

        return $this;
    }

    public function getIdentiteAttache(): ?string
    {
        return $this->identiteAttache;
    }

    public function setIdentiteAttache(string $identiteAttache): self
    {
        $this->identiteAttache = $identiteAttache;

        return $this;
    }

    public function getDateHeure(): ?string
    {
        return $this->dateHeure;
    }

    public function setDateHeure(string $dateHeure): self
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    public function getNomSuspect(): ?string
    {
        return $this->nomSuspect;
    }

    public function setNomSuspect(string $nomSuspect): self
    {
        $this->nomSuspect = $nomSuspect;

        return $this;
    }

    public function getPrenomSuspect(): ?string
    {
        return $this->prenomSuspect;
    }

    public function setPrenomSuspect(string $prenomSuspect): self
    {
        $this->prenomSuspect = $prenomSuspect;

        return $this;
    }

    public function getDateNaissanceSuspect(): ?string
    {
        return $this->dateNaissanceSuspect;
    }

    public function setDateNaissanceSuspect(string $dateNaissanceSuspect): self
    {
        $this->dateNaissanceSuspect = $dateNaissanceSuspect;

        return $this;
    }

    public function getNumeroSuspect(): ?string
    {
        return $this->numeroSuspect;
    }

    public function setNumeroSuspect(string $numeroSuspect): self
    {
        $this->numeroSuspect = $numeroSuspect;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPermisConduire(): ?string
    {
        return $this->permisConduire;
    }

    public function setPermisConduire(string $permisConduire): self
    {
        $this->permisConduire = $permisConduire;

        return $this;
    }

    public function getPermisPpa(): ?string
    {
        return $this->permisPpa;
    }

    public function setPermisPpa(string $permisPpa): self
    {
        $this->permisPpa = $permisPpa;

        return $this;
    }

    public function getHeureDroit(): ?string
    {
        return $this->heureDroit;
    }

    public function setHeureDroit(string $heureDroit): self
    {
        $this->heureDroit = $heureDroit;

        return $this;
    }

    public function getRecidiviste(): ?bool
    {
        return $this->recidiviste;
    }

    public function setRecidiviste(bool $recidiviste): self
    {
        $this->recidiviste = $recidiviste;

        return $this;
    }

    public function getCooperation(): ?string
    {
        return $this->cooperation;
    }

    public function setCooperation(string $cooperation): self
    {
        $this->cooperation = $cooperation;

        return $this;
    }

    public function getPhotoFouilleUn(): ?string
    {
        return $this->photoFouilleUn;
    }

    public function setPhotoFouilleUn(string $photoFouilleUn): self
    {
        $this->photoFouilleUn = $photoFouilleUn;

        return $this;
    }

    public function getPhotoFouilleDeux(): ?string
    {
        return $this->photoFouilleDeux;
    }

    public function setPhotoFouilleDeux(?string $photoFouilleDeux): self
    {
        $this->photoFouilleDeux = $photoFouilleDeux;

        return $this;
    }

    public function getFairReproche()
    {
        return $this->fairReproche;
    }

    public function setFairReproche($fairReproche): self
    {
        $this->fairReproche = $fairReproche;

        return $this;
    }

    public function getCarteIdentite(): ?string
    {
        return $this->carteIdentite;
    }

    public function setCarteIdentite(string $carteIdentite): self
    {
        $this->carteIdentite = $carteIdentite;

        return $this;
    }

    public function getPermisConduireImg(): ?string
    {
        return $this->permisConduireImg;
    }

    public function setPermisConduireImg(?string $permisConduireImg): self
    {
        $this->permisConduireImg = $permisConduireImg;

        return $this;
    }

    public function getPermisPpaImg(): ?string
    {
        return $this->permisPpaImg;
    }

    public function setPermisPpaImg(?string $permisPpaImg): self
    {
        $this->permisPpaImg = $permisPpaImg;

        return $this;
    }

    public function getSuspectFace(): ?string
    {
        return $this->suspectFace;
    }

    public function setSuspectFace(string $suspectFace): self
    {
        $this->suspectFace = $suspectFace;

        return $this;
    }

    public function getSuspectDos(): ?string
    {
        return $this->suspectDos;
    }

    public function setSuspectDos(string $suspectDos): self
    {
        $this->suspectDos = $suspectDos;

        return $this;
    }

    public function getSuspectProfilUn(): ?string
    {
        return $this->suspectProfilUn;
    }

    public function setSuspectProfilUn(string $suspectProfilUn): self
    {
        $this->suspectProfilUn = $suspectProfilUn;

        return $this;
    }

    public function getSuspectProfilDeux(): ?string
    {
        return $this->suspectProfilDeux;
    }

    public function setSuspectProfilDeux(string $suspectProfilDeux): self
    {
        $this->suspectProfilDeux = $suspectProfilDeux;

        return $this;
    }

    public function getPhotoVehiculeUn(): ?string
    {
        return $this->photoVehiculeUn;
    }

    public function setPhotoVehiculeUn(?string $photoVehiculeUn): self
    {
        $this->photoVehiculeUn = $photoVehiculeUn;

        return $this;
    }

    public function getPhotoVehiculeDeux(): ?string
    {
        return $this->photoVehiculeDeux;
    }

    public function setPhotoVehiculeDeux(?string $photoVehiculeDeux): self
    {
        $this->photoVehiculeDeux = $photoVehiculeDeux;

        return $this;
    }

    public function getPhotoPlaque(): ?string
    {
        return $this->photoPlaque;
    }

    public function setPhotoPlaque(?string $photoPlaque): self
    {
        $this->photoPlaque = $photoPlaque;

        return $this;
    }
}
