<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoachController extends Controller
{
    /**
     * @Route("/coach/view/{teamName}/{coachName}", requirements={"teamName": "[-A-Za-z]+", "coachName": "[-A-Za-z]+"}, name="coachview")
     * @Method("GET")
     * @Template()
     */
    public function viewAction($teamName, $coachName)
    {
        return [];
    }

    /**
     * @Route("/coach/view/{teamName}", requirements={"teamName": "[-A-Za-z]+"}, name="coachindex")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($teamName)
    {
        return [];
    }
}
