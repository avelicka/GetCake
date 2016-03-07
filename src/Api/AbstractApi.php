<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\GetCake\Api;

use DraperStudio\GetCake\Client;

/**
 * Class AbstractApi.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractApi
{
    /**
     * AbstractApi constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $url
     * @param array $parameters
     *
     * @return mixed
     */
    protected function get($url, $parameters = [])
    {
        return $this->client->get($url, $parameters);
    }
}
