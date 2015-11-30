<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CountryController extends Controller
{
    /**
     * @Route("/country/view/{countryName}", requirements={"countryName": "[-A-Za-z]+"}, name="countryview")
     * @Method("GET")
     * @Template()
     */
    public function viewAction($countryName)
    {
        return [];
    }

    /**
     * @Route("/country/view/", name="countryindex")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }
}
