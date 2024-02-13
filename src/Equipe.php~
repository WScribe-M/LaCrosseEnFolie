<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

#[ORM\Entity]
#[ORM\Table(name: 'equipes')]
class Equipe
{
   
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $nameTeam;
    #[ManyToOne(targetEntity: Ville::class)]
    #[JoinColumn(name:'ville_id', referencedColumnName: 'id')]
    private Ville|null $ville = null; 
    #[ORM\Column(type: 'string', nullable: true)]
    private string $logo;


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
     * Set nameTeam.
     *
     * @param string $nameTeam
     *
     * @return Equipe
     */
    public function setNameTeam($nameTeam)
    {
        $this->nameTeam = $nameTeam;

        return $this;
    }

    /**
     * Get nameTeam.
     *
     * @return string
     */
    public function getNameTeam()
    {
        return $this->nameTeam;
    }

   /**
     * Set logo.
     *
     * @param string|null $logo
     *
     * @return Equipe
     */
    public function setLogo($logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo.
     *
     * @return string|null
     */
    public function getLogo()
    {
        return base64_encode($this->logo);
    }

    /**
     * Set ville.
     *
     * @param \Ville|null $ville
     *
     * @return Equipe
     */
    public function setVille(\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return \Ville|null
     */
    public function getVille()
    {
        return $this->ville;
    }
}
