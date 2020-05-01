<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etablissement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Etudier", mappedBy="formation")
     */
    private $etudiers;

    public function __construct()
    {
        $this->etudiers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * @return Collection|Etudier[]
     */
    public function getEtudiers(): Collection
    {
        return $this->etudiers;
    }

    public function addEtudier(Etudier $etudier): self
    {
        if (!$this->etudiers->contains($etudier)) {
            $this->etudiers[] = $etudier;
            $etudier->setFormation($this);
        }

        return $this;
    }

    public function removeEtudier(Etudier $etudier): self
    {
        if ($this->etudiers->contains($etudier)) {
            $this->etudiers->removeElement($etudier);
            // set the owning side to null (unless already changed)
            if ($etudier->getFormation() === $this) {
                $etudier->setFormation(null);
            }
        }

        return $this;
    }
}
