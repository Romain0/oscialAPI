<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie")
 * @ORM\Entity
 */
class Salarie
{
    /**
     * @var string
     *
     * @ORM\Column(name="salarie_entreprise", type="string", length=255, nullable=false)
     */
    private $salarieEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salarie_anciennete", type="string", length=255, nullable=true)
     */
    private $salarieAnciennete;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_utilisateur", referencedColumnName="ID_utilisateur")
     * })
     */
    private $idUtilisateur;


}
