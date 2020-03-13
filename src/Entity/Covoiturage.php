<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Covoiturage
 *
 * @ORM\Table(name="covoiturage", indexes={@ORM\Index(name="fk_covoit_id_tchat_id_tchat", columns={"ID_tchat"})})
 * @ORM\Entity
 */
class Covoiturage
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_covoit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCovoit;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_vehicule", type="string", length=255, nullable=false)
     */
    private $covoitVehicule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="covoit_date_depart", type="datetime", nullable=false)
     */
    private $covoitDateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="covoit_date_arrive", type="datetime", nullable=false)
     */
    private $covoitDateArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_adresse_depart", type="string", length=255, nullable=false)
     */
    private $covoitAdresseDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_adresse_complementaire_depart", type="string", length=255, nullable=false)
     */
    private $covoitAdresseComplementaireDepart;

    /**
     * @var int
     *
     * @ORM\Column(name="covoit_code_postal_depart", type="integer", nullable=false)
     */
    private $covoitCodePostalDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_ville_depart", type="string", length=255, nullable=false)
     */
    private $covoitVilleDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_adresse_arrivee", type="string", length=255, nullable=false)
     */
    private $covoitAdresseArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_adresse_complementaire_arrivee", type="string", length=255, nullable=false)
     */
    private $covoitAdresseComplementaireArrivee;

    /**
     * @var int
     *
     * @ORM\Column(name="covoit_code_postal_arrivee", type="integer", nullable=false)
     */
    private $covoitCodePostalArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="covoit_ville_arrivee", type="string", length=255, nullable=false)
     */
    private $covoitVilleArrivee;

    /**
     * @var \Tchat
     *
     * @ORM\ManyToOne(targetEntity="Tchat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_tchat", referencedColumnName="ID_tchat")
     * })
     */
    private $idTchat;


}
