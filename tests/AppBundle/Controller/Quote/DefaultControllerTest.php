<?php

namespace Tests\AppBundle\Controller\Quote;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QuoteControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
