<?php

namespace Oxyzal\OpenDataPg;

use Symfony\Component\DomCrawler\Crawler;

class Api
{
    /**
     * @return string[]
     */
    public function getNameAgent() : array
    {
        $url = "https://playvalorant.com/fr-fr/agents";


        $html = (string)file_get_contents($url);

        $crawler = new Crawler($html);

        $agentNames = $crawler->filter('.heading-07')->each(function (Crawler $node, $i) {
            return $node->text();
        });


        return $agentNames;
    }

    /** @noinspection PhpComposerExtensionStubsInspection
     * @return string[]
     */
    public function getAbilitiesAgent(): array
    {
        $agentName = (string)readline("Entrez le nom de l'agent : ");
        $url = "https://playvalorant.com/fr-fr/agents/" . strtolower($agentName);

        $html = (string)file_get_contents($url);
        $crawler = new Crawler($html);

        $agentAbility = $crawler->filter('.heading-05')->each(function (Crawler $node, $i) {
            return $node->text();
        });


        return $agentAbility;
    }
}
