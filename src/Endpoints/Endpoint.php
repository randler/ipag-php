<?php

namespace IPag\Endpoints;

use IPag\Client;

abstract class Endpoint
{
    /**
     * @var string
     */
    const POST = 'POST';
    /**
     * @var string
     */
    const GET = 'GET';
    /**
     * @var string
     */
    const PUT = 'PUT';
    /**
     * @var string
     */
    const DELETE = 'DELETE';

    /**
     * @var \IPag\Client
     */
    protected $client;

    /**
     * @param \IPag\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
