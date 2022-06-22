<?php

namespace IPag;

use GuzzleHttp\Exception\ClientException;
use IPag\Exceptions\IPagException;
use IPag\Exceptions\InvalidJsonException;

class ResponseHandler
{
    /**
     * @param string $payload
     *
     * @throws \IPag\Exceptions\InvalidJsonException
     * @return \ArrayObject
     */
    public static function success($payload)
    {
        return self::toJson($payload);
    }

    /**
     * @param ClientException $originalException
     *
     * @throws IPagException
     * @return void
     */
    public static function failure(\Exception $originalException)
    {
        throw self::parseException($originalException);
    }

    /**
     * @param ClientException $guzzleException
     *
     * @return IPagException|ClientException
     */
    private static function parseException(ClientException $guzzleException)
    {

        //fwrite(STDERR, print_r($guzzleException));

        if($guzzleException->getMessage()) {
            $message = $guzzleException->getMessage();
            $response = explode("response:", $message)[1];
            $response = json_decode($response, true);
            
            if(isset($response['error'])) {
                $response = $response['error'];
            }
            
            $code = isset($response['code']) ? $response['code'] : '';
            $message = isset($response['message']) ? $response['message'] : '';
            
            if(is_array($message)) {
                $message = json_encode($message);
            }
            
            $resource = isset($response['resource']) ? $response['resource'] : '';
            
            return new IPagException(
                $code,
                $resource,
                $message
            );
        } else if($guzzleException->getResponse()) {
            $response = $guzzleException->getResponse();
            if($response->getStatusCode() != 200) {
                $code = $response->getStatusCode();
                $resource = $response->getReasonPhrase();
                $message = $response->getReasonPhrase();

                return new IPagException(
                    $code,
                    $resource,
                    $message
                );

            }
        }
    }

    /**
     * @param string $json
     * @return \ArrayObject
     */
    private static function toJson($json)
    {
        $result = json_decode($json);

        if (json_last_error() != \JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg());
        }

        return $result;
    }
}
