<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Marque;

class MarqueData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $marque1 = new Marque();
        $marque1->setNom('Renault');
        $manager->persist($marque1);
        
        $marque2 = new Marque();
        $marque2->setNom('Peugeot');
        $manager->persist($marque2);
        
        $marque3 = new Marque();
        $marque3->setNom('Seat');
        $manager->persist($marque3);
        
        
      
        $manager->flush();
        
        $this->addReference('marque1', $marque1);
        $this->addReference('marque2', $marque2);
        $this->addReference('marque3', $marque3);
       
    }

    public function getOrder() {
        return 3;
        
    }

   
}