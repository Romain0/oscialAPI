<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity
 */
class Formateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="formateur_matiere", type="string", length=255, nullable=false)
     */
    private $formateurMatiere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formateur_anciennete", type="string", length=255, nullable=true)
     */
    private $formateurAnciennete;

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
