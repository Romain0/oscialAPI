<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{
    /**
     * @Route("/", name="index_utilisateur")
     */
    public function index (UtilisateurRepository $utilisateurRepository)
    {

        $utilisateurs = $utilisateurRepository->findAll();

        $encoders = [new JsonEncoder()];

        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($utilisateurs, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);

        $response = new Response($jsonContent);

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/{id}", name="utilisateur_show", methods={"GET"})
     */
    public function show (Request $request, UtilisateurRepository $utilisateurRepository)
    {
        $id = $request->get('id');
        $utilisateur = $utilisateurRepository->find($id);

        $encoders = [new JsonEncoder()];

        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($utilisateur, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);

        $response = new Response($jsonContent);

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/new", name="utilisateur_new", methods={"GET"})
     */
    public function new (Request $request)
    {
        $utilisateur = new Utilisateur;

        try {
            $utilisateur->setNom($request->get('nom'));
            $utilisateur->setPrenom($request->get('prenom'));
            $utilisateur->setDateNaissance($request->get('dateNaissance'));
            $utilisateur->setAdresse($request->get('adresse'));
            $utilisateur->setComplementAdresse($request->get('complementAdresse'));
            $utilisateur->setCodePostal($request->get('codePostal'));
            $utilisateur->setVille($request->get('ville'));
            $utilisateur->setSexe($request->get('sexe'));
            $utilisateur->setLoisir($request->get('loisirs'));
            $utilisateur->setTelephone($request->get('telephone'));
            $utilisateur->setimgProfile($request->get('imgProfile'));
            $utilisateur->setPossedePermis($request->get('possedePermis'));
            $utilisateur->setPossedeVehicule($request->get('possedeVehicule'));
            $utilisateur->setEtudiers($request->get('etudiers'));
            $utilisateur->setEnvoyer($request->get('envoyer'));

            $this->getDoctrine()->getManager()->flush();
        } catch (\Throwable $th) {
            return json_encode($th);
        }
            return http_response_code(201);



    }
}
