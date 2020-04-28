<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Covoiturage;

class CovoiturageController extends AbstractController
{
    /**
     * @Route("/covoiturage", name="covoiturage")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CovoiturageController.php',
        ]);
    }

    /**
     * @Route("/covoit", name="covoit")
     */
    public function list()
    {
        $covoiturage = $this->getDoctrine()
        ->getRepository(Covoiturage::class)
        ->findAll();

        return $this->json($covoiturage);
    }
}
