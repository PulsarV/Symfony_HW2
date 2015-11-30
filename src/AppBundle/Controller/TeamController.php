<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller
{
    /**
     * @Route("/team/view/{teamName}", requirements={"teamName": "[-A-Za-z]+"}, name="teamview")
     * @Method("GET")
     * @Template()
     */
    public function viewAction($teamName)
    {
        return [];
    }

    /**
     * @Route("/team/view/", name="teamindex")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }
}
