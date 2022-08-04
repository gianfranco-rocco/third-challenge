<?php

namespace Acme\Services;

use Acme\AppSettings;
use GuzzleHttp\Client;

class OMDbService
{
    private Client $client;
    private string $apiUri;
    
    public function __construct(bool $fullPlot)
    {
        $this->client = new Client();
        $this->apiUri = $this->getUri($fullPlot);
    }

    public function getMovieInformation(string $movie)
    {
        $response = $this->client->get("{$this->apiUri}&t={$movie}")->getBody();

        return json_decode($response);
    }

    private function getUri(bool $fullPlot = false): string
    {
        $apiUri = AppSettings::OMDB_API_URI;
        $apiKey = AppSettings::OMDB_API_KEY;

        $uri = "{$apiUri}/?apiKey={$apiKey}";

        if ($fullPlot) {
            $uri .= "&plot=full";
        }

        return $uri;
    }
}