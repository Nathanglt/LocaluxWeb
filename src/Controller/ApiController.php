<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiController extends AbstractController
{
    /**
     * @Route("/apiH", name="api", methods="GET")
     */
    public function getListeHackathons(PdoLocalux $monPdo): JsonResponse
    {
        $lesHackathons = $monPdo->getLesHackathons();
        $tabJson=[];
        foreach ($lesHackathons as $unHackathon){
            $tabJson[]=[
                'id_hackathon'=>$unHackathon->getIdHackathon(),
                'date_debut'=>$unHackathon->getDateDebut(),
                'date_fin'=>$unHackathon->getDateFin(),
                'date_limite'=> $unHackathon ->getDateLimite(),
                'heure_debut'=>$unHackathon->getHeureDebut(),
                'heure_fin'=> $unHackathon ->getHeureFin(),
                'lieu'=>$unHackathon->getLieu(),
                'rue'=>$unHackathon->getRue(),
                'ville' => $unHackathon ->getVille(),
                'code_postal'=>$unHackathon->getCodePostal(),
                'theme'=>$unHackathon->getTheme(),
                'nb_places' => $unHackathon ->getNbPlaces(),
                'image' => $unHackathon ->getImage(),
            ];
        }
        return new JsonResponse($tabJson);
    }
}
