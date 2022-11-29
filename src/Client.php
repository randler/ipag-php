<?php

namespace IPag;

use IPag\Endpoints\Card;
use IPag\Endpoints\Webhook;
use IPag\Endpoints\Payment;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use IPag\Endpoints\Seller;
use IPag\Exceptions\InvalidJsonException;

class Client
{
    /**
     * @var string
     */
    const BASE_URI          = 'https://api.ipag.com.br';
    const BASE_URI_SANDBOX  = 'https://sandbox.ipag.com.br';
    public const SERVICE = '/service';
    public const RESOURCE = '/resources';

    /**
     * @var string header used to identify application's requests
     */
    const DELIVERY_USER_AGENT_HEADER = 'X-Ipag-User-Agent';

    /**
     * @var \GuzzleHttp\Client
     */
    private $http;

    /**
     * @var string
     */
    private $authorization;

    /**
     * @var \IPag\Endpoints\Payment
     */
    private $payment;
    
    /**
     * @var \IPag\Endpoints\Seller
     */
    private $seller;
    
    /**
     * @var \IPag\Endpoints\Card
     */
    private $card;
    
    /**
     * @var \IPag\Endpoints\Card
     */
    private $webhook;
    
    
    
    /**
     * @var bool
     */
    private $sandbox = false;

    /**
     * @param string $apiKey
     * @param array|null $extras
     * @param boolean|false $test
     */
    public function __construct(string $appId, string $appKey, bool $sandbox = false)
    {
        $this->sandbox = $sandbox;
        
        $this->authorization = Key::getKeyBase64($appId, $appKey);

        $this->payment = new Payment($this);
        $this->seller = new Seller($this);
        $this->card = new Card($this);
        $this->webhook = new Webhook($this);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     *
     * @throws \IPag\Exceptions\IPagException
     * @return \ArrayObject
     *
     * @psalm-suppress InvalidNullableReturnType
     */
    public function request($method, $uri, $options = [])
    {
        try {

            if($this->sandbox) {
                $base_url = self::BASE_URI_SANDBOX;
            } else {
                $base_url = self::BASE_URI;
            }
    
            $options = array_merge($options, ['base_uri' => $base_url]);

            $options['headers'] = array(
                'Content-Type' => "application/json",
                'Authorization' => $this->authorization,
                'x-api-version' => '2'
            );

            $this->http = new HttpClient($options);
            
            $response = $this->http->request(
                $method,
                $uri,
                $options
            );

            return ResponseHandler::success((string)$response->getBody());

        } catch (InvalidJsonException $exception) {
            throw $exception;
        } catch (ClientException $exception) {
            ResponseHandler::failure($exception);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * @return \IPag\Endpoints\Payment
     */
    public function payment()
    {
        return $this->payment;
    }

    /**
     * @return \IPag\Endpoints\Seller
     */
    public function seller()
    {
        return $this->seller;
    }

    /**
     * @return \IPag\Endpoints\Card
     */
    public function card()
    {
        return $this->card;
    }

    /**
     * @return \IPag\Endpoints\Webhook
     */
    public function webhook()
    {
        return $this->webhook;
    }

    /**
     * Get the value of service
     *
     * @return  string
     */ 
    public function getService()
    {
        return $this->service;
    }

	/**
	 * Set the value of resource
	 *
	 * @param   string  $resource  
	 * 
	 * return $this
	 *
	 */
	public function setResource(string $resource)
	{
		$this->resource = $resource;
		return $this;
	}

    /**
     * Get the value of resource
     *
     * @return  string
     */ 
    public function getResource()
    {
        return $this->resource;
    }
}
