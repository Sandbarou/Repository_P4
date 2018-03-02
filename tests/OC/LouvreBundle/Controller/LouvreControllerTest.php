<?php

namespace Tests\OC\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LouvreControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('a:contains("Commander un ticket")')->count() > 0);

        // Récupère le premier lien, puis vérifie qu'il amène bien à la page correspondante
        $linkDate = $crawler->selectLink('Commander un ticket')->link();
        $client->click($linkDate);

        // Vérifie que 'a' contient bien le titre du lien
        $this->assertEquals(1, $crawler->filter('a:contains("Commander un ticket")')->count());

    }


    public function testDate()
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/date');

        $this->assertEquals(1, $crawler->filter('html:contains("Veuillez sélectionner une date de visite")')->count());

        $form = $crawler->selectButton('Poursuivre ma commande')->form();
        $form['visit[date]'] = '2018-03-31';
        $form['visit[number]'] = 2;
        $form['visit[fullday]'] = false;
        $client->submit($form);

        $crawler = $client->followRedirect(); // Attention à bien récupérer le crawler mis à jour

        $this->assertEquals(1, $crawler->filter('html:contains("Vous souhaitez visiter le musée le")')->count());

    }


    public function testCommande()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/commande');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Vous souhaitez visiter le musée le")')->count()
        );
    }

}


