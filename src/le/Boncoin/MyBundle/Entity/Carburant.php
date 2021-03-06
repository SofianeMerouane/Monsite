<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carburant
 *
 * @ORM\Table(name="carburant")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\CarburantRepository")
 */
class Carburant
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
     * @ORM\OneToMany(targetEntity="le\Boncoin\MyBundle\Entity\Voiture",mappedBy="carburant", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;
    

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20)
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
     * @return Carburant
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
     * Set voiture
     *
     * @param \le\Boncoin\MyBundle\Entity\Voiture $voiture
     *
     * @return Carburant
     */
    public function setVoiture(\le\Boncoin\MyBundle\Entity\Voiture $voiture)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return \le\Boncoin\MyBundle\Entity\Voiture
     */
    public function getVoiture()
    {
        return $this->voiture;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->voiture = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add voiture
     *
     * @param \le\Boncoin\MyBundle\Entity\Voiture $voiture
     *
     * @return Carburant
     */
    public function addVoiture(\le\Boncoin\MyBundle\Entity\Voiture $voiture)
    {
        $this->voiture[] = $voiture;

        return $this;
    }

    /**
     * Remove voiture
     *
     * @param \le\Boncoin\MyBundle\Entity\Voiture $voiture
     */
    public function removeVoiture(\le\Boncoin\MyBundle\Entity\Voiture $voiture)
    {
        $this->voiture->removeElement($voiture);
    }
}
