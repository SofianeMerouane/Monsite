<?php
namespace le\Boncoin\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use le\Boncoin\MyBundle\Entity\Marque;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new \le\Boncoin\MyBundle\Entity\Media();
        $media1->setAlt('ibiza');
        $media1->setPath('https://kckdata.io/i/c0a/26f/274/seat-ibiza-iv-1-9-tdi-105-fap-sport-1_450x338z10.jpg');
        $manager->persist($media1);
        
        
        $media2 = new \le\Boncoin\MyBundle\Entity\Media();
        $media2->setAlt('leon');
        $media2->setPath('https://galerie.automobile.tn/max/2012/07/6793.JPG');
        $manager->persist($media2);
        
        
          
        $media3 = new \le\Boncoin\MyBundle\Entity\Media();
        $media3->setAlt('clio');
        $media3->setPath('http://voiture.kidioui.fr/image/img-auto/renault-clio-rs.jpg');
        $manager->persist($media3);
        
        $media4 = new \le\Boncoin\MyBundle\Entity\Media();
        $media4->setAlt('clio 2');
        $media4->setPath('http://images.caradisiac.com/logos-ref/modele/modele--renault-clio-2/S7-modele--renault-clio-2.jpg');
        $manager->persist($media4);
        $manager->flush();
        
        $media5 = new \le\Boncoin\MyBundle\Entity\Media();
        $media5->setAlt('megane');
        $media5->setPath('http://i-cms.linternaute.com/image_cms/original/10310347-nouvelle-renault-megane-4-tous-les-tarifs-et-les-details-de-la-gamme-photos-prix-motorisations-essai.jpg');
        $manager->persist($media5);
        $manager->flush();
        
        $media6 = new \le\Boncoin\MyBundle\Entity\Media();
        $media6->setAlt('tigwan');
        $media6->setPath('http://images.hgmsites.net/hug/new-volkswagen-tiguan-european-spec-2015-frankfurt-auto-show_100527679_h.jpg');
        $manager->persist($media6);
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
       
    }

    public function getOrder() {
        return 6;
        
    }

   
}