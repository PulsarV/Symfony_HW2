<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CountryControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/country/view/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Країни учасниці', $crawler->filter('h2')->text());

        $client->request('GET', '/country/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testView()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/country/view/Ukraine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Інформація про країну', $crawler->filter('h2')->text());

        $client->request('GET', '/country/view/Ukraine-Ukraine');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/country/view/Ukraine1');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());

        $client->request('GET', '/country/view/Ukraine/');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
