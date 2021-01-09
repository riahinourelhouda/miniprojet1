<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Voiture;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\VoitureType;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture", name="voiture")
     */
    public function index(): Response
    {
      $voitures=$this->getDoctrine()->getRepository(Voiture::class)->findAll();


        return  $this->render('voiture/index.html.twig',[
            'Voitures' => $voitures,
        ]);

    }
}
public  function CreateVoiture():Response
{
    $voiture = new Voiture();
    $form = $this->createform(VoitureType::class, $voiture);
    return $this->render('voiture/ajouter.html.twig',[
        'form' => $form->createView()
    ]);
}