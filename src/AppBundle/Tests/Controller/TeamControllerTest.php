<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TeamControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/team/view/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Перелік команд, що грають за країну', $crawler->filter('h2')->text());

        $client->request('GET', '/team/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testView()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/team/view/Ukraine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Інформація про команду', $crawler->filter('h2')->text());

        $client->request('GET', '/team/view/Ukraine-Ukraine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/team/view/Ukraine1');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());

        $client->request('GET', '/team/view/Ukraine/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
