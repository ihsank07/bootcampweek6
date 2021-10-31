<?php

namespace App\Controller;
use App\Entity\Ders; 
use App\Entity\Akademisyen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DersController extends AbstractController
{
    /**
     * @Route("/ders", name="dersler")
     */
    public function load(): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $ders = $this->getDoctrine()->getRepository(Ders::class)->findAll();
        return $this->render('ders/hepsi.html.twig',[
            'ders' => $ders,
          ]
        );
    }
    /**
     * @Route("/ders/{id}", name="ders")
     */
    public function index(Ders $ders): Response
    {   
       

        return $this->render('ders/index.html.twig',[
            'ders' => $ders,
            
          ]
        );
    }
};
