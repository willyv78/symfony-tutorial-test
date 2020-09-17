<?php

namespace tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainFunctionalTest extends WebTestCase
{
    public function testShowHomeAndSubmitForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $form = $crawler->selectButton('Enviar')->form();

        $form['contact[name]'] = 'Wilsom';
        $form['contact[message]'] = '¡Hola!';
        $form['contact[phone]'] = '3204274564';

        $crawler = $client->submit($form);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains(
            '<h1>Esto es una página corporativa</h1>',
            $client->getResponse()->getContent()
        );
    }
}