<?php

/**
 * Description of LuckyController
 *
 * @author khangld
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends Controller {

    /**
     * @Route("/lucky/{firstName}/{lastName}/page=3")
     */
    public function indexAction($firstName, $lastName, Request $request) {
        $page = $request->query->get('page', 1);
//        echo $firstName . ' ' . $lastName;
        echo $firtName . ' ' . $lastName . ' ' . $page;
        return new Response();
    }

    /**
     * @Route("/lucky/number/{count}")
     */
    public function numberAction($count) {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);
        //
//        $html = $this->container->get('templating')->render(
//                'lucky/number.html.twig',
//                array('luckyNumberList' => $numbersList)
//                );
//        
//        return new Response($html);

        return $this->render(
                        'lucky/number.html.twig', array('luckyNumberList' => $numbersList)
        );
    }

    /**
     * @Route("/api/lucky/number");
     */
    public function apiNumberAction() {
        $data = array('lucky_number' => rand(0, 100));
        return new JsonResponse($data);
    }

}
