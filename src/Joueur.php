<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

#[ORM\Entity]
#[ORM\Table(name: 'joueurs')]
class Joueur
{
   
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $namePlayer;
    #[ORM\Column(type: 'string')]
    private string $firstNamePlayer;
    #[ManyToOne(targetEntity: Equipe::class)]
    #[JoinColumn(name:'equipe_id', referencedColumnName: 'id')]
    private Equipe|null $equipe = null;
    #[ORM\Column(type: 'integer')]
    private int $old; 
    #[ORM\Column(type: 'integer')]
    private int $number; 
    #[ORM\Column(type: 'string')]
    private string $nationality;
    #[ORM\Column(type: 'string')]
    private string $position;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set namePlayer.
     *
     * @param string $namePlayer
     *
     * @return Joueur
     */
    public function setNamePlayer($namePlayer)
    {
        $this->namePlayer = $namePlayer;

        return $this;
    }

    /**
     * Get namePlayer.
     *
     * @return string
     */
    public function getNamePlayer()
    {
        return $this->namePlayer;
    }

    /**
     * Set equipe.
     *
     * @param \Equipe|null $equipe
     *
     * @return Joueur
     */
    public function setEquipe(\Equipe $equipe = null)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe.
     *
     * @return \Equipe|null
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set firstNamePlayer.
     *
     * @param string $firstNamePlayer
     *
     * @return Joueur
     */
    public function setFirstNamePlayer($firstNamePlayer)
    {
        $this->firstNamePlayer = $firstNamePlayer;

        return $this;
    }

    /**
     * Get firstNamePlayer.
     *
     * @return string
     */
    public function getFirstNamePlayer()
    {
        return $this->firstNamePlayer;
    }

    /**
     * Set old.
     *
     * @param int $old
     *
     * @return Joueur
     */
    public function setOld($old)
    {
        $this->old = $old;

        return $this;
    }

    /**
     * Get old.
     *
     * @return int
     */
    public function getOld()
    {
        return $this->old;
    }

    /**
     * Set number.
     *
     * @param int $number
     *
     * @return Joueur
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set nationality.
     *
     * @param string $nationality
     *
     * @return Joueur
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set position.
     *
     * @param string $position
     *
     * @return Joueur
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }
}
