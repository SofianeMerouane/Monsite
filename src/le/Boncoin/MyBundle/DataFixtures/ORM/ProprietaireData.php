<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Proprietaire;

class ProprietaireData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        $proprietaire1 = new Proprietaire();
        $proprietaire1->setMail('soso@yahoo.fr');
        $proprietaire1->setNom('merouane');
        $proprietaire1->setPrenom('sofiane');
       
        $manager->persist($proprietaire1);
        
         
        $proprietaire2 = new Proprietaire();
        $proprietaire2->setMail('na@yahoo.fr');
        $proprietaire2->setNom('fouka');
        $proprietaire2->setPrenom('nadir');
       
        $manager->persist($proprietaire2);
        
        
        $manager->flush();
        
        $this->addReference('proprietaire1', $proprietaire1);
        $this->addReference('proprietaire2', $proprietaire2);
       
       
    }

    public function getOrder() {
        return 8;
        
    }

   
}