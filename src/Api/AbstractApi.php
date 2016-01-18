<?php

namespace DraperStudio\GetCake\Api;

use DraperStudio\GetCake\Client;

abstract class AbstractApi
{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get($url, $parameters = [])
    {
        return $this->client->get($url, $parameters);
    }
}
