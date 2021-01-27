<?php

namespace App\Entity;

use App\Repository\FichePatientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichePatientRepository::class)
 */
class FichePatient
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numCnam;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $situationPatient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dentfracturee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrvisite;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDerinerVisite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getNumCnam(): ?string
    {
        return $this->numCnam;
    }

    public function setNumCnam(?string $numCnam): self
    {
        $this->numCnam = $numCnam;

        return $this;
    }

    public function getSituationPatient(): ?string
    {
        return $this->situationPatient;
    }

    public function setSituationPatient(?string $situationPatient): self
    {
        $this->situationPatient = $situationPatient;

        return $this;
    }

    public function getDentfracturee(): ?string
    {
        return $this->dentfracturee;
    }

    public function setDentfracturee(?string $dentfracturee): self
    {
        $this->dentfracturee = $dentfracturee;

        return $this;
    }

    public function getNbrvisite(): ?int
    {
        return $this->nbrvisite;
    }

    public function setNbrvisite(?int $nbrvisite): self
    {
        $this->nbrvisite = $nbrvisite;

        return $this;
    }

    public function getDateDerinerVisite(): ?\DateTimeInterface
    {
        return $this->dateDerinerVisite;
    }

    public function setDateDerinerVisite(\DateTimeInterface $dateDerinerVisite): self
    {
        $this->dateDerinerVisite = $dateDerinerVisite;

        return $this;
    }
}
