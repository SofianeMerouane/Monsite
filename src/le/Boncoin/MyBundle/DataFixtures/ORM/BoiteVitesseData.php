<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\BoiteVitesse;

class BoiteVitesseData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $boite1 = new BoiteVitesse();
        $boite1->setNom('Manuelle');
        $manager->persist($boite1);
        
        
        $boite2 = new BoiteVitesse();
        $boite2->setNom('Automatique');
        $manager->persist($boite2);
        
          
        $boite3 = new BoiteVitesse();
        $boite3->setNom('electric');
        $manager->persist($boite3);
        
        $manager->flush();
        
        $this->addReference('boite1', $boite1);
        $this->addReference('boite2', $boite2);
        $this->addReference('boite3', $boite3);
    }

    public function getOrder() {
        return 5;
        
    }

}