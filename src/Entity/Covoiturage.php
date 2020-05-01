<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CovoiturageRepository")
 */
class Covoiturage
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
    private $vehicule;

    /**
     * @ORM\Column(type="date")
     */
    private $date_depart;

    /**
     * @ORM\Column(type="date")
     */
    private $date_arrivee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $complement_adresse_depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cp_adresse_depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_adresse_depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_arrivee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $complement_adresse_arrivee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cp_adresse_arrivee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_adresse_arrivee;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tchat", inversedBy="covoiturages")
     */
    private $tchat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicule(): ?string
    {
        return $this->vehicule;
    }

    public function setVehicule(string $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->date_depart;
    }

    public function setDateDepart(\DateTimeInterface $date_depart): self
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->date_arrivee;
    }

    public function setDateArrivee(\DateTimeInterface $date_arrivee): self
    {
        $this->date_arrivee = $date_arrivee;

        return $this;
    }

    public function getAdresseDepart(): ?string
    {
        return $this->adresse_depart;
    }

    public function setAdresseDepart(string $adresse_depart): self
    {
        $this->adresse_depart = $adresse_depart;

        return $this;
    }

    public function getComplementAdresseDepart(): ?string
    {
        return $this->complement_adresse_depart;
    }

    public function setComplementAdresseDepart(string $complement_adresse_depart): self
    {
        $this->complement_adresse_depart = $complement_adresse_depart;

        return $this;
    }

    public function getCpAdresseDepart(): ?string
    {
        return $this->cp_adresse_depart;
    }

    public function setCpAdresseDepart(string $cp_adresse_depart): self
    {
        $this->cp_adresse_depart = $cp_adresse_depart;

        return $this;
    }

    public function getVilleAdresseDepart(): ?string
    {
        return $this->ville_adresse_depart;
    }

    public function setVilleAdresseDepart(string $ville_adresse_depart): self
    {
        $this->ville_adresse_depart = $ville_adresse_depart;

        return $this;
    }

    public function getAdresseArrivee(): ?string
    {
        return $this->adresse_arrivee;
    }

    public function setAdresseArrivee(string $adresse_arrivee): self
    {
        $this->adresse_arrivee = $adresse_arrivee;

        return $this;
    }

    public function getComplementAdresseArrivee(): ?string
    {
        return $this->complement_adresse_arrivee;
    }

    public function setComplementAdresseArrivee(string $complement_adresse_arrivee): self
    {
        $this->complement_adresse_arrivee = $complement_adresse_arrivee;

        return $this;
    }

    public function getCpAdresseArrivee(): ?string
    {
        return $this->cp_adresse_arrivee;
    }

    public function setCpAdresseArrivee(string $cp_adresse_arrivee): self
    {
        $this->cp_adresse_arrivee = $cp_adresse_arrivee;

        return $this;
    }

    public function getVilleAdresseArrivee(): ?string
    {
        return $this->ville_adresse_arrivee;
    }

    public function setVilleAdresseArrivee(string $ville_adresse_arrivee): self
    {
        $this->ville_adresse_arrivee = $ville_adresse_arrivee;

        return $this;
    }

    public function getTchat(): ?Tchat
    {
        return $this->tchat;
    }

    public function setTchat(?Tchat $tchat): self
    {
        $this->tchat = $tchat;

        return $this;
    }
}
