<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'villes')]
class Ville
{
   
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $nameCity;
    #[ORM\Column(type: 'string')]
    private string $codePostal;


    public function __toString() {
        return $this->nameCity;
    }
    
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
     * Set nameCity.
     *
     * @param string $nameCity
     *
     * @return Ville
     */
    public function setNameCity($nameCity)
    {
        $this->nameCity = $nameCity;

        return $this;
    }

    /**
     * Get nameCity.
     *
     * @return string
     */
    public function getNameCity()
    {
        return $this->nameCity;
    }

    /**
     * Set codePostal.
     *
     * @param string $codePostal
     *
     * @return Ville
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
}
