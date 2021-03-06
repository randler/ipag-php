<?php

namespace IPag;

use IPag\Anonymous;

class Routes
{
    /**
     * @return \IPag\Anonymous
     */
    public static function payment()
    {
        $anonymous = new Anonymous();

        $anonymous->create = static function () {
            return Client::SERVICE . "/payment";
        };

        $anonymous->details = static function ($id) {
            return Client::SERVICE . "/consult?id=$id";
        };

        $anonymous->cancel = static function ($id) {
            return Client::SERVICE . "/cancel?id=$id";
        };

        $anonymous->capture = static function ($id) {
            return Client::SERVICE . "/capture?id=$id";
        };

        return $anonymous;
    }
    
    /**
     * @return \IPag\Anonymous
     */
    public static function card()
    {
        $anonymous = new Anonymous();

        $anonymous->tokens = static function () {
            return Client::SERVICE .  
                Client::RESOURCE .
                "/card_tokens";
        };
        $anonymous->getToken = static function ($tokenId) {
            return Client::SERVICE .  
                Client::RESOURCE .
                "/card_tokens?token=$tokenId";
        };

        return $anonymous;
    }
    
    /**
     * @return \IPag\Anonymous
     */
    public static function webhook()
    {
        $anonymous = new Anonymous();

        $anonymous->create = static function () {
            return Client::SERVICE .  
                Client::RESOURCE . 
                "/webhooks";
        };
        $anonymous->detail = static function ($id) {
            return Client::SERVICE .  
                Client::RESOURCE .
                "/webhooks?id=$id";
        };
        $anonymous->list = static function () {
            return Client::SERVICE .  
                Client::RESOURCE .
                "/webhooks";
        };
        $anonymous->delete = static function ($id) {
            return Client::SERVICE .  
                Client::RESOURCE .
                "/webhooks?id=$id";
        };

        return $anonymous;
    }
}
