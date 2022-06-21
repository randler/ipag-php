<?php

namespace IPag\Endpoints;

use IPag\Client;
use IPag\Routes;
use IPag\Endpoints\Endpoint;

class Webhook extends Endpoint
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
            Routes::webhook()->create($payload),
            ['json' => $payload]
        );
    }

    /**
     * @param string $id
     *
     * @return \ArrayObject
     */
    public function details(string $id)
    {
        return $this->client->request(
            self::PUT,
            Routes::webhook()->details($id),
            []
        );
    }
    /**
     *
     * @return \ArrayObject
     */
    public function list()
    {
        return $this->client->request(
            self::PUT,
            Routes::webhook()->list(),
            []
        );
    }
    /**
     * @param string $id
     *
     * @return \ArrayObject
     */
    public function delete(string $id)
    {
        return $this->client->request(
            self::DELETE,
            Routes::webhook()->delete($id),
            []
        );
    }
}

