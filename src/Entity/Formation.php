<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="formation_duree", type="string", length=255, nullable=false)
     */
    private $formationDuree;

    /**
     * @var string
     *
     * @ORM\Column(name="formation_libelle", type="string", length=255, nullable=false)
     */
    private $formationLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="formation_etablissement", type="string", length=255, nullable=false)
     */
    private $formationEtablissement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idFormation")
     */
    private $idUtilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUtilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
