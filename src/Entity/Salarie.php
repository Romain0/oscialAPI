<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SalarieRepository")
 */
class Salarie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Utilisateur", cascade={"persist", "remove"})
     */
    private $utilisitateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anciennete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisitateur(): ?Utilisateur
    {
        return $this->utilisitateur;
    }

    public function setUtilisitateur(?Utilisateur $utilisitateur): self
    {
        $this->utilisitateur = $utilisitateur;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getAnciennete(): ?string
    {
        return $this->anciennete;
    }

    public function setAnciennete(string $anciennete): self
    {
        $this->anciennete = $anciennete;

        return $this;
    }
}
