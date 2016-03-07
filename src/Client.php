<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\GetCake;

/**
 * Class Client.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Client
{
    /**
     * @var string
     */
    private $baseUrl = '%s/affiliates/api/';

    /**
     * @var
     */
    private $affiliateId;

    /**
     * @var
     */
    private $apiKey;

    /**
     * Client constructor.
     *
     * @param $baseUrl
     * @param $affiliateId
     * @param $apiKey
     */
    public function __construct($baseUrl, $affiliateId, $apiKey)
    {
        $this->baseUrl = sprintf($this->baseUrl, $baseUrl);
        $this->affiliateId = $affiliateId;
        $this->apiKey = $apiKey;
    }

    /**
     * @param $class
     *
     * @return mixed
     */
    public function api($class)
    {
        $class = __NAMESPACE__.'\\Api\\'.$class;

        return new $class($this);
    }

    /**
     * @param $path
     * @param $parameters
     *
     * @return mixed
     */
    public function get($path, $parameters)
    {
        $parameters['affiliate_id'] = $this->affiliateId;
        $parameters['api_key'] = $this->apiKey;

        $url = $this->baseUrl.$path.'?'.http_build_query($parameters);

        return $this->object2array(simplexml_load_file($url));
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    private function object2array($data)
    {
        return json_decode(json_encode($data), true);
    }
}
