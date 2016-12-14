<?php

namespace le\Boncoin\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="le\Boncoin\MyBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
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
     * @ORM\OneToMany(targetEntity="le\Boncoin\MyBundle\Entity\Annonce",mappedBy="proprietaire", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonce;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Proprietaire
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Proprietaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Proprietaire
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proprietaire = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add proprietaire
     *
     * @param \le\Boncoin\MyBundle\Entity\Annonce $proprietaire
     *
     * @return Proprietaire
     */
    public function addProprietaire(\le\Boncoin\MyBundle\Entity\Annonce $proprietaire)
    {
        $this->proprietaire[] = $proprietaire;

        return $this;
    }

    /**
     * Remove proprietaire
     *
     * @param \le\Boncoin\MyBundle\Entity\Annonce $proprietaire
     */
    public function removeProprietaire(\le\Boncoin\MyBundle\Entity\Annonce $proprietaire)
    {
        $this->proprietaire->removeElement($proprietaire);
    }

    /**
     * Get proprietaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
