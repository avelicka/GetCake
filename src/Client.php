<?php

namespace DraperStudio\GetCake;

class Client
{
    private $baseUrl = '%s/affiliates/api/';

    private $affiliateId;

    private $apiKey;

    public function __construct($baseUrl, $affiliateId, $apiKey)
    {
        $this->baseUrl = sprintf($this->baseUrl, $baseUrl);
        $this->affiliateId = $affiliateId;
        $this->apiKey = $apiKey;
    }

    public function api($class)
    {
        $class = __NAMESPACE__.'\\Api\\'.$class;

        return new $class($this);
    }

    public function get($path, $parameters)
    {
        $parameters['affiliate_id'] = $this->affiliateId;
        $parameters['api_key'] = $this->apiKey;

        $url = $this->baseUrl.$path.'?'.http_build_query($parameters);

        return $this->object2array(simplexml_load_file($url));
    }

    private function object2array($data)
    {
        return json_decode(json_encode($data), true);
    }
}
