<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    /**
     * @Route("/player/view/{teamName}/{playerName}", requirements={"teamName": "[-A-Za-z]+", "playerName": "[-A-Za-z]+"}, name="playerview")
     * @Method("GET")
     * @Template()
     */
    public function viewAction($teamName, $playerName)
    {
        return [];
    }

    /**
     * @Route("/player/view/{teamName}", requirements={"teamName": "[-A-Za-z]+"}, name="playerindex")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($teamName)
    {
        return [];
    }
}
