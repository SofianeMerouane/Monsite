<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\AnnonceRepository")
 */
class Annonce
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
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\Ville",inversedBy ="annonce", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;
    
    
   
    
    
    /**
     * @ORM\OneToOne(targetEntity="le\Boncoin\MyBundle\Entity\Media", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $media;
   
     /**
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\Voiture",inversedBy ="annonce", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $voiture;
    
     /**
     * @ORM\ManyToOne(targetEntity="le\Boncoin\MyBundle\Entity\Proprietaire", inversedBy="annonce",cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $proprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepot", type="datetime")
     */
    private $dateDepot;


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
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateDepot
     *
     * @param \DateTime $dateDepot
     * @return Annonce
     */
    public function setDateDepot($dateDepot)
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Get dateDepot
     *
     * @return \DateTime 
     */
    public function getDateDepot()
    {
        return $this->dateDepot;
    }

    /**
     * Set ville
     *
     * @param \le\Boncoin\MyBundle\Entity\Ville $ville
     * @return Annonce
     */
    public function setVille(\le\Boncoin\MyBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \le\Boncoin\MyBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }

   

    /**
     * Set media
     *
     * @param \le\Boncoin\MyBundle\Entity\Media $media
     * @return Annonce
     */
    public function setMedia(\le\Boncoin\MyBundle\Entity\Media $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \le\Boncoin\MyBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
     public function  __construct()
    {
        $this->voiture = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set voiture
     *
     * @param \le\Boncoin\MyBundle\Entity\Voiture $voiture
     *
     * @return Annonce
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
     * Set proprietaire
     *
     * @param \le\Boncoin\MyBundle\Entity\Proprietaire $proprietaire
     *
     * @return Annonce
     */
    public function setProprietaire(\le\Boncoin\MyBundle\Entity\Proprietaire $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \le\Boncoin\MyBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
