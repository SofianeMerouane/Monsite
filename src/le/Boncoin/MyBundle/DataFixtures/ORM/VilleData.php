<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Ville;

class VilleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ville1 = new Ville();
        $ville1->setNom('Gieres');
        $ville1->setCp('38610');
        $ville1->setRegion($this->getReference('region1'));
       
        $manager->persist($ville1);
        
        $ville2 = new Ville();
        $ville2->setNom('saint martin dheres');
        $ville2->setCp('38400');
        $ville2->setRegion($this->getReference('region1'));
        $manager->persist($ville2);
      
        $ville3 = new Ville();
        $ville3->setNom('Caen');
        $ville3->setCp('14000');
        $ville3->setRegion($this->getReference('region3'));
        $manager->persist($ville3);
      
        $ville4 = new Ville();
        $ville4->setNom('Clermont-ferrand');
        $ville4->setCp('63154');
        $ville4->setRegion($this->getReference('region4'));
        $manager->persist($ville4);
      
      
      
        
        $manager->flush();
        
        $this->addReference('ville1', $ville1);
        $this->addReference('ville2', $ville2);
        $this->addReference('ville3', $ville3);
       
    }

    public function getOrder() {
        return 2;
        
    }

}