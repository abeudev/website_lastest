<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
     * @Route("/services", name="services")
     */
class ServicesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render('services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }


     /**
     * @Route("/internet")
     */
    public function internet(): Response
    {
        return $this->render('/services/internet.html.twig', [
           
        ]);
    }

     /**
     * @Route("/apndedier")
     */
    public function apndedier(): Response
    {
        return $this->render('/services/apndedier.html.twig', [
           
        ]);
    }


    /**
     * @Route("/intranet")
     */
    public function intranet(): Response
    {
        return $this->render('/services/intranet.html.twig', [
           
        ]);
    }

     /**
     * @Route("/mpls")
     */
    public function mpls(): Response
    {
        return $this->render('/services/mpls.html.twig', [
           
        ]);
    }

    /**
     * @Route("/pabx")
     */
    public function pabx(): Response
    {
        return $this->render('/services/pabx.html.twig', [
           
        ]);
    }

    /**
     * @Route("/vsat")
     */
    public function vsat(): Response
    {
        return $this->render('/services/vsat.html.twig', [
           
        ]);
    }


    /**
     * @Route("/drc")
     */
    public function drc(): Response
    {
        return $this->render('/services/drc.html.twig', [
           
        ]);
    }
    
    
}
