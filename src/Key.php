<?php

namespace IPag;

use Exception;

class Key
{
    /**
     * @param string $appId
     * @param string $appKey
     *
     * @throws \Exceptions
     * @return string
     *
     */
    public static function getKeyBase64($appId, $appKey)
    {
        if(isset($appId) && !empty($appId) &&
            isset($appKey) && !empty($appKey) ) {
            return "Basic " . base64_encode($appId . ':' . $appKey);
        }
        throw new Exception('Chaves inválidas e/ou vazias.');
    }
}
