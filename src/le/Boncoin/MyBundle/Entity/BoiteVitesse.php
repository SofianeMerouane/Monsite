<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoiteVitesse
 *
 * @ORM\Table(name="boite_vitesse")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\BoiteVitesseRepository")
 */
class BoiteVitesse
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
     * @ORM\OneToMany(targetEntity="le\Boncoin\MyBundle\Entity\Voiture",mappedBy="boiteVitesse", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;
    

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
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
     * @return BoiteVitesse
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
     * @return BoiteVitesse
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
}
