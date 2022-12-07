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

        //fwrite(STDERR, print_r($guzzleException->getMessage()));

        //return var_Dump($guzzleException->getMessage());

        if($guzzleException->getMessage()) {
            $message = $guzzleException->getMessage();

            $response = explode("response:", $message)[1];
            if(strpos($response, '(truncated...)') !== false) {
                $response = trim(str_replace('(truncated...)', '"', $response));
            }

            $responseDecoded = json_decode($response, true);
            
            if(!$responseDecoded) {
                throw new IPagException(
                    406,
                    '',
                    $response
                );
            }


            if(isset($responseDecoded['error'])) {
                $responseDecoded = $responseDecoded['error'];
            }
            
            $code = isset($responseDecoded['code']) ? $responseDecoded['code'] : '';
            $message = isset($responseDecoded['message']) ? $responseDecoded['message'] : '';
            
            if(is_array($message)) {
                $message = json_encode($message);
            }
            
            $resource = isset($responseDecoded['resource']) ? $responseDecoded['resource'] : '';
            
            throw new IPagException(
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

                throw new IPagException(
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
