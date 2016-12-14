<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Voiture;

class VoitureData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $voiture1 = new Voiture();
        $voiture1->setAnnee(new \DateTime());
        $voiture1->setNom('Ibiza');
        $voiture1->setBoiteVitesse($this->getReference('boite1'));
        $voiture1->setCarburant($this->getReference('carburant1'));
        $voiture1->setMarque($this->getReference('marque1'));
       
     
        $manager->persist($voiture1);
        
        $voiture2 = new Voiture();
        $voiture2->setAnnee(new \DateTime());
        $voiture2->setNom('leon');
        $voiture2->setBoiteVitesse($this->getReference('boite1'));
        $voiture2->setCarburant($this->getReference('carburant1'));
        $voiture2->setMarque($this->getReference('marque2'));
      
       
       
        
        $manager->persist($voiture2);
        
        $voiture3 = new Voiture();
        $voiture3->setAnnee(new \DateTime());
        $voiture3->setNom('Clio3');
        $voiture3->setBoiteVitesse($this->getReference('boite1'));
        $voiture3->setCarburant($this->getReference('carburant2'));
        $voiture3->setMarque($this->getReference('marque2'));
       
        $manager->persist($voiture3);
        
          
        $voiture4 = new Voiture();
        $voiture4->setAnnee(new \DateTime());
        $voiture4->setNom('Clio2');
        $voiture4->setBoiteVitesse($this->getReference('boite1'));
        $voiture4->setCarburant($this->getReference('carburant2'));
        $voiture4->setMarque($this->getReference('marque1'));
       
        $manager->persist($voiture4);
      
          
        $voiture5 = new Voiture();
        $voiture5->setAnnee(new \DateTime());
        $voiture5->setNom('megane');
        $voiture5->setBoiteVitesse($this->getReference('boite1'));
        $voiture5->setCarburant($this->getReference('carburant2'));
        $voiture5->setMarque($this->getReference('marque1'));
       
        $manager->persist($voiture5);
      
             
        $voiture6 = new Voiture();
        $voiture6->setAnnee(new \DateTime());
        $voiture6->setNom('megane');
        $voiture6->setBoiteVitesse($this->getReference('boite1'));
        $voiture6->setCarburant($this->getReference('carburant2'));
        $voiture6->setMarque($this->getReference('marque3'));
       
        $manager->persist($voiture6);
      
      
      
      
        
        $manager->flush();
        $this->addReference('voiture1', $voiture1);
        $this->addReference('voiture2', $voiture2);
        $this->addReference('voiture3', $voiture3);
        $this->addReference('voiture4', $voiture4);
        $this->addReference('voiture5', $voiture5);
        $this->addReference('voiture6', $voiture6);
    }

    public function getOrder() {
        return 7;
        
    }

}