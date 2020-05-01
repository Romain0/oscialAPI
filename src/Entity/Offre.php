<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OffreRepository")
 */
class Offre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_expiration;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveau_etudes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise_adresse_postale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise_cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise_ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_max_candidats;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Post", inversedBy="offres")
     */
    private $post;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->date_expiration;
    }

    public function setDateExpiration(\DateTimeInterface $date_expiration): self
    {
        $this->date_expiration = $date_expiration;

        return $this;
    }

    public function getNiveauEtudes(): ?int
    {
        return $this->niveau_etudes;
    }

    public function setNiveauEtudes(int $niveau_etudes): self
    {
        $this->niveau_etudes = $niveau_etudes;

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

    public function getEntrepriseAdressePostale(): ?string
    {
        return $this->entreprise_adresse_postale;
    }

    public function setEntrepriseAdressePostale(string $entreprise_adresse_postale): self
    {
        $this->entreprise_adresse_postale = $entreprise_adresse_postale;

        return $this;
    }

    public function getEntrepriseCp(): ?string
    {
        return $this->entreprise_cp;
    }

    public function setEntrepriseCp(string $entreprise_cp): self
    {
        $this->entreprise_cp = $entreprise_cp;

        return $this;
    }

    public function getEntrepriseVille(): ?string
    {
        return $this->entreprise_ville;
    }

    public function setEntrepriseVille(string $entreprise_ville): self
    {
        $this->entreprise_ville = $entreprise_ville;

        return $this;
    }

    public function getNbMaxCandidats(): ?int
    {
        return $this->nb_max_candidats;
    }

    public function setNbMaxCandidats(int $nb_max_candidats): self
    {
        $this->nb_max_candidats = $nb_max_candidats;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): self
    {
        $this->post = $post;

        return $this;
    }
}
