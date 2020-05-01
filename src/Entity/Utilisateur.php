<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complement_adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $loisirs;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img_profil;

    /**
     * @ORM\Column(type="boolean")
     */
    private $possede_permis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $possede_vehicule;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Etudier", mappedBy="utilisateur")
     */
    private $etudiers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Envoyer", mappedBy="utilisateur")
     */
    private $envoyers;

    public function __construct()
    {
        $this->etudiers = new ArrayCollection();
        $this->envoyers = new ArrayCollection();
    }

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

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getComplementAdresse(): ?string
    {
        return $this->complement_adresse;
    }

    public function setComplementAdresse(?string $complement_adresse): self
    {
        $this->complement_adresse = $complement_adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getLoisirs(): ?string
    {
        return $this->loisirs;
    }

    public function setLoisirs(?string $loisirs): self
    {
        $this->loisirs = $loisirs;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getImgProfil(): ?string
    {
        return $this->img_profil;
    }

    public function setImgProfil(?string $img_profil): self
    {
        $this->img_profil = $img_profil;

        return $this;
    }

    public function getPossedePermis(): ?bool
    {
        return $this->possede_permis;
    }

    public function setPossedePermis(bool $possede_permis): self
    {
        $this->possede_permis = $possede_permis;

        return $this;
    }

    public function getPossedeVehicule(): ?bool
    {
        return $this->possede_vehicule;
    }

    public function setPossedeVehicule(bool $possede_vehicule): self
    {
        $this->possede_vehicule = $possede_vehicule;

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
            $etudier->setUtilisateur($this);
        }

        return $this;
    }

    public function removeEtudier(Etudier $etudier): self
    {
        if ($this->etudiers->contains($etudier)) {
            $this->etudiers->removeElement($etudier);
            // set the owning side to null (unless already changed)
            if ($etudier->getUtilisateur() === $this) {
                $etudier->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Envoyer[]
     */
    public function getEnvoyers(): Collection
    {
        return $this->envoyers;
    }

    public function addEnvoyer(Envoyer $envoyer): self
    {
        if (!$this->envoyers->contains($envoyer)) {
            $this->envoyers[] = $envoyer;
            $envoyer->setUtilisateur($this);
        }

        return $this;
    }

    public function removeEnvoyer(Envoyer $envoyer): self
    {
        if ($this->envoyers->contains($envoyer)) {
            $this->envoyers->removeElement($envoyer);
            // set the owning side to null (unless already changed)
            if ($envoyer->getUtilisateur() === $this) {
                $envoyer->setUtilisateur(null);
            }
        }

        return $this;
    }
}
