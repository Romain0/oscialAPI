<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_nom", type="string", length=255, nullable=false)
     */
    private $utilisateurNom;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_prenom", type="string", length=255, nullable=false)
     */
    private $utilisateurPrenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="utilisateur_date_naissance", type="date", nullable=false)
     */
    private $utilisateurDateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_adresse_postale", type="string", length=255, nullable=false)
     */
    private $utilisateurAdressePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_adresse_complementaire", type="string", length=255, nullable=false)
     */
    private $utilisateurAdresseComplementaire;

    /**
     * @var int
     *
     * @ORM\Column(name="utilisateur_code_postal", type="integer", nullable=false)
     */
    private $utilisateurCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_ville", type="string", length=255, nullable=false)
     */
    private $utilisateurVille;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="utilisateur_sexe", type="boolean", nullable=true)
     */
    private $utilisateurSexe;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_loisirs", type="text", length=65535, nullable=false)
     */
    private $utilisateurLoisirs;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_telephone", type="string", length=255, nullable=false)
     */
    private $utilisateurTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_img_profil", type="string", length=255, nullable=false)
     */
    private $utilisateurImgProfil;

    /**
     * @var bool
     *
     * @ORM\Column(name="utilisateur_possede_permis", type="boolean", nullable=false)
     */
    private $utilisateurPossedePermis;

    /**
     * @var bool
     *
     * @ORM\Column(name="utilisateur_possede_vehicule", type="boolean", nullable=false)
     */
    private $utilisateurPossedeVehicule;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Message", inversedBy="idUtilisateur")
     * @ORM\JoinTable(name="envoyer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_utilisateur", referencedColumnName="ID_utilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_message", referencedColumnName="ID_message")
     *   }
     * )
     */
    private $idMessage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Formation", inversedBy="idUtilisateur")
     * @ORM\JoinTable(name="etudier",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_utilisateur", referencedColumnName="ID_utilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_formation", referencedColumnName="ID_formation")
     *   }
     * )
     */
    private $idFormation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idUtilisateur2")
     */
    private $idUtilisateur1;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMessage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idFormation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idUtilisateur1 = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
