<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_id_tchat_id_tchat", columns={"ID_tchat"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="message_contenu", type="text", length=65535, nullable=false)
     */
    private $messageContenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_date_envoi", type="datetime", nullable=false)
     */
    private $messageDateEnvoi;

    /**
     * @var \Tchat
     *
     * @ORM\ManyToOne(targetEntity="Tchat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_tchat", referencedColumnName="ID_tchat")
     * })
     */
    private $idTchat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idMessage")
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
