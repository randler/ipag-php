<?php

namespace IPag\Endpoints;

use IPag\Routes;
use IPag\Endpoints\Endpoint;

class Payment extends Endpoint
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
            Routes::payment()->create(),
            ['json' => $payload],
        );
    }
    
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function details(string $id)
    {
        return $this->client->request(
            self::GET,
            Routes::payment()->details($id),
            [],
        );
    }
    
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function cancel(string $id)
    {
        return $this->client->request(
            self::PUT,
            Routes::payment()->cancel($id),
            [],
        );
    }
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function capture(string $id)
    {
        return $this->client->request(
            self::PUT,
            Routes::payment()->capture($id),
            [],
        );
    }
}

