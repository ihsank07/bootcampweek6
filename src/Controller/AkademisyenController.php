<?php

namespace App\Controller;

use App\Entity\Akademisyen;
use App\Entity\Ders;
use App\Repository\AkademisyenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class AkademisyenController extends AbstractController
{
  /**
   * @Route("/akademisyen", name="show.akademisyen")
   */
  public function akademi()
  {


    $entityManager = $this->getDoctrine()->getManager();
    $akademiler = $this->getDoctrine()->getRepository(Akademisyen::class)->findAll();
    return $this->render(
      'akademisyen/index.html.twig',
      [
        'akademiler' => $akademiler
      ]
    );
  }
  /**
   * @Route("/akademisyen/{id}", name="akademisyen")
   */
  public function index(int $id): Response
  {
   
    $akademi = $this->getDoctrine()->getRepository(Akademisyen::class)->find($id);

    $ders = $akademi->getDersAdi();
    
    $all = $ders->first();
    $all->getDersAdi();


    return $this->render(
      'akademisyen/detay.html.twig',
      [
        'items' => $akademi->getDersAdi(),
          'akademi' => $akademi
      ]

    );
  }
}
