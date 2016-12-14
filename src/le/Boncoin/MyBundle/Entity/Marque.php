<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="marque")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\MarqueRepository")
 */
class Marque
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
     * @ORM\OneToMany(targetEntity="le\Boncoin\MyBundle\Entity\Voiture",mappedBy = "marque", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;
    
    public function __construct() {
        $this->voiture = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25)
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
     * @return Marque
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
     * Add voiture
     *
     * @param \le\Boncoin\MyBundle\Entity\Voiture $voiture
     *
     * @return Marque
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

    /**
     * Get voiture
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVoiture()
    {
        return $this->voiture;
    }
   
}
