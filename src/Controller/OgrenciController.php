<?php

namespace App\Controller;

use App\Entity\Ogrenci;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OgrenciController extends AbstractController
{
        /**
     * @Route("/ogrenci", name="ogrenci.show")
     */
    public function load(): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
       
        $ogrenciler = $this->getDoctrine()->getRepository(Ogrenci::class)->findAll();

        return $this->render('ogrenci/hepsi.html.twig',[
            'ogrenciler' => $ogrenciler,
          ]
        );

    }
    /**
     * @Route("/ogrenci/{id}", name="ogrenci")
     */
    public function index(Ogrenci $ogrenci): Response
    {
      
          return $this->render('ogrenci/index.html.twig',[
              'ogrenci' => $ogrenci

            ]
            );
    }
}
