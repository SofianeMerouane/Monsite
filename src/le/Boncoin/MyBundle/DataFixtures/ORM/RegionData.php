<?php

namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Region;

class RegionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $region1 = new Region();
        $region1->setNom('Rhône-Alpes');
        $manager->persist($region1);   
        
        $region2 = new Region();
        $region2->setNom('Basse Normandie');
        $manager->persist($region2);  
        
        $region3 = new Region();
        $region3->setNom('Auvergne');
        $manager->persist($region3);  
        
        $region4 = new Region();
        $region4->setNom('Alsace');
        $manager->persist($region4);  
        
        $region5 = new Region();
        $region5->setNom('Bourgogne');
        $manager->persist($region5);  
        
        
        $region6 = new Region();
        $region6->setNom('Bretagne');
        $manager->persist($region6);   
        
        


        $manager->flush();
        
        $this->addReference('region1',$region1);
        $this->addReference('region2',$region2);
        $this->addReference('region3',$region3);
        $this->addReference('region4',$region4);
        $this->addReference('region5',$region5);
        $this->addReference('region6',$region6);
       
      
    }
    
    public function getOrder()
    {
        return 1;
    }
    
}