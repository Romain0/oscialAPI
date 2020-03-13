<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var string
     *
     * @ORM\Column(name="etudiant_niveau_etudes", type="string", length=255, nullable=false)
     */
    private $etudiantNiveauEtudes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etudiant_entreprise", type="string", length=255, nullable=true)
     */
    private $etudiantEntreprise;

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
