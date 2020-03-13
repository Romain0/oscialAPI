<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var string
     *
     * @ORM\Column(name="evenement_type", type="string", length=255, nullable=false)
     */
    private $evenementType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evenement_date_debut", type="datetime", nullable=false)
     */
    private $evenementDateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evenement_date_fin", type="datetime", nullable=false)
     */
    private $evenementDateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="evenement_adresse", type="string", length=255, nullable=false)
     */
    private $evenementAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="evenement_adresse_complementaire", type="string", length=255, nullable=false)
     */
    private $evenementAdresseComplementaire;

    /**
     * @var int
     *
     * @ORM\Column(name="evenement_code_postal", type="integer", nullable=false)
     */
    private $evenementCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="evenement_ville", type="string", length=255, nullable=false)
     */
    private $evenementVille;

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
