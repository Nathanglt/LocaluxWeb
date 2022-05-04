<?php

namespace App\Controller;

use App\Entity\Formule;
use App\Entity\Formulesanschauffeur;
use App\Entity\Locationsanschauffeur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Modele;
use App\Service\PdoLocalux;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/réservation", name="réservation")
     */
    public function réservation(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Modele::class);
        $modele = $repository->findAll();
        $test = $this->getDoctrine()->getRepository(Formulesanschauffeur::class);
        $test2 = $test->findAll();
        return $this->render('home/form.html.twig', [
            'lesModeles' => $modele,
            'lesFormules' => $test2,
        ]);
    }

     /**
     * @Route("addRéservation/{id}", name="addRéservation")
     */
    public function add(Request $request): Response
    {
        $serie = new Serie();
        $form=$this->createForm(SerieType::class, $serie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();  
            return $this->redirectToRoute("series");
        }
        return $this->render('admin/index.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }
}
