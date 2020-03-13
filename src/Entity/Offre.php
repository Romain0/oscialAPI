<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="offre_date_expiration", type="datetime", nullable=false)
     */
    private $offreDateExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="offre_niveau_etudes", type="string", length=255, nullable=false)
     */
    private $offreNiveauEtudes;

    /**
     * @var string
     *
     * @ORM\Column(name="offre_entreprise_adresse_postale", type="string", length=255, nullable=false)
     */
    private $offreEntrepriseAdressePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="offre_entreprise_adresse_complementaire", type="string", length=255, nullable=false)
     */
    private $offreEntrepriseAdresseComplementaire;

    /**
     * @var int
     *
     * @ORM\Column(name="offre_entreprise_code_postal", type="integer", nullable=false)
     */
    private $offreEntrepriseCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="offre_entreprise_ville", type="string", length=255, nullable=false)
     */
    private $offreEntrepriseVille;

    /**
     * @var int
     *
     * @ORM\Column(name="offre_nb_max_candidats", type="integer", nullable=false)
     */
    private $offreNbMaxCandidats;

    /**
     * @var \Post
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_post", referencedColumnName="ID_post")
     * })
     */
    private $idPost;


}
