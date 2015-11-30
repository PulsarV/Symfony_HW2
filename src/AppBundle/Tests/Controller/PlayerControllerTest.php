<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/player/view/Ukraine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Перелік гравців команди', $crawler->filter('h2')->text());

        $client->request('GET', '/player/view/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());

        $client->request('GET', '/player/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());

        $client->request('GET', '/player/view/Ukraine-Ukraine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/player/view/Ukraine1');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testView()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/player/view/Ukraine/Shevchenko');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Інформація про гравця', $crawler->filter('h2')->text());

        $client->request('GET', '/player/view/Ukraine/Shevchenko-Petrenko');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/player/view/Ukraine/Shewchenko1');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());

        $client->request('GET', '/player/view/Ukraine/Shewchenko/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
