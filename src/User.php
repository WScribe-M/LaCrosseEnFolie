<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;


#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    
    
    
    #[ORM\Column(type: 'string')]
    private string $nom;
    #[ORM\Column(type: 'string')]
    private string $prenom;
    #[ORM\Column(type: 'string')]
    private string $login;
    #[ORM\Column(type: 'string', length:12)]
    private string $password;
    #[ORM\Column(type: 'string', nullable: true)]
    private string $avatar;
    #[ORM\Column(type: 'date', nullable: true)]
    private DateTime $dateNaissance;
    #[ManyToOne(targetEntity: Droit::class)]
    //#[JoinColumn(name:'role_id', referencedColumnName: 'id')]
    private Droit|null $role = null; 
    
    

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
     * Set nom.
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set avatar.
     *
     * @param string|null $avatar
     *
     * @return User
     */
    public function setAvatar($avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar.
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set dateNaissance.
     *
     * @param \DateTime|null $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance = null)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance.
     *
     * @return \DateTime|null
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set role.
     *
     * @param \Droit|null $role
     *
     * @return User
     */
    public function setRole(\Droit $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role.
     *
     * @return \Droit|null
     */
    public function getRole()
    {
        return $this->role;
    }
}
