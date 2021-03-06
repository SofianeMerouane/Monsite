<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moto
 *
 * @ORM\Table(name="moto")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\MotoRepository")
 */
class Moto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     * @ORM\OneToOne(targetEntity="le\Boncoin\MyBundle\Entity\Cylindrie", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $cylindrie;
    

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Moto
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cylindrie
     *
     * @param \le\Boncoin\MyBundle\Entity\Cylindrie $cylindrie
     * @return Moto
     */
    public function setCylindrie(\le\Boncoin\MyBundle\Entity\Cylindrie $cylindrie)
    {
        $this->cylindrie = $cylindrie;

        return $this;
    }

    /**
     * Get cylindrie
     *
     * @return \le\Boncoin\MyBundle\Entity\Cylindrie 
     */
    public function getCylindrie()
    {
        return $this->cylindrie;
    }
}
