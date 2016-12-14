<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\VoitureRepository")
 */
class Voiture
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
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\Carburant",inversedBy="voiture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $carburant;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\BoiteVitesse", inversedBy="voiture",cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $boiteVitesse;

     /**
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\Marque",inversedBy ="voiture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;
    
    
     /**
     * @ORM\OneToMany(targetEntity="le\Boncoin\MyBundle\Entity\Annonce",mappedBy ="voiture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonce;
    
    
   
    
    
     /**
     * @var \Date
     *
     * @ORM\Column(name="annee", type="date")
     */
    private $annee;
    
    

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
     * @return Voiture
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
     * Set carburant
     *
     * @param \le\Boncoin\MyBundle\Entity\Carburant $carburant
     * @return Voiture
     */
    public function setCarburant(\le\Boncoin\MyBundle\Entity\Carburant $carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return \le\Boncoin\MyBundle\Entity\Carburant 
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set boiteVitesse
     *
     * @param \le\Boncoin\MyBundle\Entity\BoiteVitesse $boiteVitesse
     * @return Voiture
     */
    public function setBoiteVitesse(\le\Boncoin\MyBundle\Entity\BoiteVitesse $boiteVitesse)
    {
        $this->boiteVitesse = $boiteVitesse;

        return $this;
    }

    /**
     * Get boiteVitesse
     *
     * @return \le\Boncoin\MyBundle\Entity\BoiteVitesse 
     */
    public function getBoiteVitesse()
    {
        return $this->boiteVitesse;
    }

    /**
     * Set marque
     *
     * @param \le\Boncoin\MyBundle\Entity\Marque $marque
     * @return Voiture
     */
    public function setMarque(\le\Boncoin\MyBundle\Entity\Marque $marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \le\Boncoin\MyBundle\Entity\Marque 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    

 

    /**
     * Set annee
     *
     * @param \DateTime $annee
     *
     * @return Voiture
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carburant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->boiteVitesse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->annonce = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carburant
     *
     * @param \le\Boncoin\MyBundle\Entity\Carburant $carburant
     *
     * @return Voiture
     */
    public function addCarburant(\le\Boncoin\MyBundle\Entity\Carburant $carburant)
    {
        $this->carburant[] = $carburant;

        return $this;
    }

    /**
     * Remove carburant
     *
     * @param \le\Boncoin\MyBundle\Entity\Carburant $carburant
     */
    public function removeCarburant(\le\Boncoin\MyBundle\Entity\Carburant $carburant)
    {
        $this->carburant->removeElement($carburant);
    }

    /**
     * Add boiteVitesse
     *
     * @param \le\Boncoin\MyBundle\Entity\BoiteVitesse $boiteVitesse
     *
     * @return Voiture
     */
    public function addBoiteVitesse(\le\Boncoin\MyBundle\Entity\BoiteVitesse $boiteVitesse)
    {
        $this->boiteVitesse[] = $boiteVitesse;

        return $this;
    }

    /**
     * Remove boiteVitesse
     *
     * @param \le\Boncoin\MyBundle\Entity\BoiteVitesse $boiteVitesse
     */
    public function removeBoiteVitesse(\le\Boncoin\MyBundle\Entity\BoiteVitesse $boiteVitesse)
    {
        $this->boiteVitesse->removeElement($boiteVitesse);
    }

    /**
     * Add annonce
     *
     * @param \le\Boncoin\MyBundle\Entity\Annonce $annonce
     *
     * @return Voiture
     */
    public function addAnnonce(\le\Boncoin\MyBundle\Entity\Annonce $annonce)
    {
        $this->annonce[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \le\Boncoin\MyBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\le\Boncoin\MyBundle\Entity\Annonce $annonce)
    {
        $this->annonce->removeElement($annonce);
    }

    /**
     * Get annonce
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
