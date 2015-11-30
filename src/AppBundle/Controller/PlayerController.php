<?php

namespace AppBundle\Controller;

use AppBundle\Model\Player;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    private function createFakePlayer($count, $team = '', $player = '')
    {
        $faker = \Faker\Factory::create();
        $players = [];
        for ($i = 0; $i < $count; $i++) {
            if ($team && $team) {
                $players = new Player($faker->name, $team , $faker->text(5000));
            } else {
                $players = new Player($player, $faker->country . ' national football team' , $faker->text(5000));
            }
        }
        return $players;
    }

    /**
     * @Route("/player/view/{teamName}", requirements={"teamName": "[-A-Za-z]+"}, name="playerindex")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($teamName)
    {
        return ['players' => $this->createFakePlayer(30)];
    }

    /**
     * @Route("/player/view/{teamName}/{playerName}", requirements={"teamName": "[-A-Za-z]+", "playerName": "[-A-Za-z]+"}, name="playerview")
     * @Method("GET")
     * @Template()
     */
    public function viewAction($teamName, $playerName)
    {
        return ['players' => $this->createFakePlayer(1, $teamName, $playerName)];
    }
}
