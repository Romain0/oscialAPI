<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date_creation", type="datetime", nullable=false)
     */
    private $postDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="post_titre", type="string", length=255, nullable=false)
     */
    private $postTitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="post_description", type="text", length=65535, nullable=true)
     */
    private $postDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="post_img", type="string", length=255, nullable=true)
     */
    private $postImg;


}
