<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tchat
 *
 * @ORM\Table(name="tchat")
 * @ORM\Entity
 */
class Tchat
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_tchat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTchat;

    /**
     * @var string
     *
     * @ORM\Column(name="tchat_titre", type="string", length=255, nullable=false)
     */
    private $tchatTitre;


}
