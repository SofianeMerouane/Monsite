<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\OneToMany(targetEntity="le\Boncoin\MyBundle\Entity\Annonce",mappedBy = "ville", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonce;
    
    public function __construct() {
        $this->annonce = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
     /**
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\Region", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;


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
     * @return Ville
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
     * Set cp
     *
     * @param integer $cp
     * @return Ville
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set region
     *
     * @param \le\Boncoin\MyBundle\Entity\Region $region
     * @return Ville
     */
    public function setRegion(\le\Boncoin\MyBundle\Entity\Region $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \le\Boncoin\MyBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add annonce
     *
     * @param \le\Boncoin\MyBundle\Entity\Annonce $annonce
     *
     * @return Ville
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
