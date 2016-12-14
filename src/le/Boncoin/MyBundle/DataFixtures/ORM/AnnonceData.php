<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Annonce;

class AnnonceData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $annonce1 = new \le\Boncoin\MyBundle\Entity\Annonce();
        $annonce1->setDateDepot(new \DateTime());
        $annonce1->setDescription('je vend ma voiture belle ibiza');
        $annonce1->setMedia($this->getReference('media1'));
        $annonce1->setVille($this->getReference('ville1'));
        $annonce1->setPrix(4000);
        $annonce1->setTitre('vente ibiza');
        $annonce1->setVoiture($this->getReference('voiture1'));
        $annonce1->setProprietaire($this->getReference('proprietaire1'));
        
        $manager->persist($annonce1);
     
      
        $annonce2 = new \le\Boncoin\MyBundle\Entity\Annonce();
        $annonce2->setDateDepot(new \DateTime());
        $annonce2->setDescription('je vend ma voiture belle leo');
        $annonce2->setMedia($this->getReference('media2'));
        $annonce2->setVille($this->getReference('ville2'));
        $annonce2->setPrix(3000);
        $annonce2->setTitre('vente leon');
        $annonce2->setVoiture($this->getReference('voiture2'));
        $annonce2->setProprietaire($this->getReference('proprietaire1'));
       
        
        $manager->persist($annonce2);
        
         
        $annonce3 = new \le\Boncoin\MyBundle\Entity\Annonce();
        $annonce3->setDateDepot(new \DateTime());
        $annonce3->setDescription('je vend ma voiture belle clio');
        $annonce3->setMedia($this->getReference('media3'));
        $annonce3->setVille($this->getReference('ville3'));
        $annonce3->setPrix(1000);
        $annonce3->setTitre('vente clio');
        $annonce3->setVoiture($this->getReference('voiture3'));
        $annonce3->setProprietaire($this->getReference('proprietaire2'));
        
        $manager->persist($annonce3);
        
        $annonce4 = new \le\Boncoin\MyBundle\Entity\Annonce();
        $annonce4->setDateDepot(new \DateTime());
        $annonce4->setDescription('je vend ma voiture belle Clio2');
        $annonce4->setMedia($this->getReference('media4'));
        $annonce4->setVille($this->getReference('ville1'));
        $annonce4->setPrix(5000);
        $annonce4->setTitre('vente clio2');
        $annonce4->setVoiture($this->getReference('voiture4'));
        $annonce4->setProprietaire($this->getReference('proprietaire1'));
        
        $manager->persist($annonce4);
        
        $annonce5 = new \le\Boncoin\MyBundle\Entity\Annonce();
        $annonce5->setDateDepot(new \DateTime());
        $annonce5->setDescription('je vend ma voiture belle megane');
        $annonce5->setMedia($this->getReference('media5'));
        $annonce5->setVille($this->getReference('ville1'));
        $annonce5->setPrix(4000);
        $annonce5->setTitre('vente Megane');
        $annonce5->setVoiture($this->getReference('voiture5'));
        $annonce5->setProprietaire($this->getReference('proprietaire1'));
        
        $manager->persist($annonce5);
       
        
        $annonce6 = new \le\Boncoin\MyBundle\Entity\Annonce();
        $annonce6->setDateDepot(new \DateTime());
        $annonce6->setDescription('je vend ma voiture belle tigwan');
        $annonce6->setMedia($this->getReference('media6'));
        $annonce6->setVille($this->getReference('ville1'));
        $annonce6->setPrix(2000);
        $annonce6->setTitre('vente Tigwan');
        $annonce6->setVoiture($this->getReference('voiture6'));
        $annonce6->setProprietaire($this->getReference('proprietaire1'));
        
        $manager->persist($annonce6);
      
       
        $manager->flush();
       
    }

    public function getOrder() {
        return 9;
        
    }

}