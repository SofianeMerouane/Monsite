<?php

namespace le\Boncoin\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyController extends Controller
{
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $media = $em->getRepository('leBoncoinMyBundle:Media')->findAll();
        return $this->render('leBoncoinMyBundle:Home\layout:index.html.twig');
    }
    
    
    public function annoncesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('leBoncoinMyBundle:Annonce')->findAll();
        $marque = $em->getRepository('leBoncoinMyBundle:Marque')->findAll();
        
        $carburant = $em->getRepository('leBoncoinMyBundle:Carburant')->findAll();
        
        $BoiteVitesse = $em->getRepository('leBoncoinMyBundle:BoiteVitesse')->findAll();
        
        return $this->render('leBoncoinMyBundle:Home\layout:annonces.html.twig', array('annonce'=>$annonce, 'marque'=>$marque, 'carburant'=>$carburant, 'BoiteVitesse'=>$BoiteVitesse));
    }
    
    
}
