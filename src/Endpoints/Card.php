<?php

namespace IPag\Endpoints;

use IPag\Routes;
use IPag\Endpoints\Endpoint;

class Card extends Endpoint
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
            Routes::card()->tokens(),
            ['json' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function getToken(array $tokenId)
    {
        return $this->client->request(
            self::POST,
            Routes::card()->getToken($tokenId),
            []
        );
    }
}

