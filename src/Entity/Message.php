<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
 */
class Message
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_envoi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tchat", inversedBy="messages")
     */
    private $tchat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Envoyer", mappedBy="message")
     */
    private $envoyers;

    public function __construct()
    {
        $this->envoyers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->date_envoi;
    }

    public function setDateEnvoi(\DateTimeInterface $date_envoi): self
    {
        $this->date_envoi = $date_envoi;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getTchat(): ?Tchat
    {
        return $this->tchat;
    }

    public function setTchat(?Tchat $tchat): self
    {
        $this->tchat = $tchat;

        return $this;
    }

    /**
     * @return Collection|Envoyer[]
     */
    public function getEnvoyers(): Collection
    {
        return $this->envoyers;
    }

    public function addEnvoyer(Envoyer $envoyer): self
    {
        if (!$this->envoyers->contains($envoyer)) {
            $this->envoyers[] = $envoyer;
            $envoyer->setMessage($this);
        }

        return $this;
    }

    public function removeEnvoyer(Envoyer $envoyer): self
    {
        if ($this->envoyers->contains($envoyer)) {
            $this->envoyers->removeElement($envoyer);
            // set the owning side to null (unless already changed)
            if ($envoyer->getMessage() === $this) {
                $envoyer->setMessage(null);
            }
        }

        return $this;
    }
}
