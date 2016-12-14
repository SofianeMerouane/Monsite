<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Carburant;

class CarburantData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $carburant1 = new Carburant();
        $carburant1->setNom('Diesel');
        $manager->persist($carburant1);
        
        $carburant2 = new Carburant();
        $carburant2->setNom('Essence');
        $manager->persist($carburant2);
        
        $carburant3 = new Carburant();
        $carburant3->setNom('GPL');
        $manager->persist($carburant3);
        
      
        $manager->flush();
        
        $this->addReference('carburant1', $carburant1);
        $this->addReference('carburant2', $carburant2);
        $this->addReference('carburant3', $carburant3);
       
    }

    public function getOrder() {
        return 4;
        
    }

}