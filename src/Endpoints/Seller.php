<?php

namespace IPag\Endpoints;

use IPag\Routes;
use IPag\Endpoints\Endpoint;

class Seller extends Endpoint
{

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function create(array $payload)
    {
        return $this->client->request(
            self::POST,
            Routes::seller()->create(),
            ['json' => $payload]
        );
    }
    
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function list()
    {
        return $this->client->request(
            self::GET,
            Routes::seller()->list(),
            []
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function query(array $payload)
    {
        return $this->client->request(
            self::GET,
            Routes::seller()->query($payload),
            []
        );
    }
    
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function update(array $payload)
    {
        return $this->client->request(
            self::PUT,
            Routes::seller()->update($payload),
            ['json' => $payload]
        );
    }
}

