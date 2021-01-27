<?php

namespace App\Entity;

use App\Repository\SalleAttenteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalleAttenteRepository::class)
 */
class SalleAttente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idPatient;

    /**
     * @ORM\Column(type="date")
     */
    private $dateArrive;

    /**
     * @ORM\Column(type="time")
     */
    private $heureArrive;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrAttente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPatient(): ?int
    {
        return $this->idPatient;
    }

    public function setIdPatient(int $idPatient): self
    {
        $this->idPatient = $idPatient;

        return $this;
    }

    public function getDateArrive(): ?\DateTimeInterface
    {
        return $this->dateArrive;
    }

    public function setDateArrive(\DateTimeInterface $dateArrive): self
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    public function getHeureArrive(): ?\DateTimeInterface
    {
        return $this->heureArrive;
    }

    public function setHeureArrive(\DateTimeInterface $heureArrive): self
    {
        $this->heureArrive = $heureArrive;

        return $this;
    }

    public function getNbrAttente(): ?int
    {
        return $this->NbrAttente;
    }

    public function setNbrAttente(int $NbrAttente): self
    {
        $this->NbrAttente = $NbrAttente;

        return $this;
    }
}
