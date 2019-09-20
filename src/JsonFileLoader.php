<?php

declare(stric_types=1);

namespace Marussia\JsonFileLoader;

use Marussia\JsonFileLoader\Exceptions\InvalidJsonException;

class JsonFileLoader extends FileLoader
{
    public static function load(string $resource)
    {
        $messages = [];
        
        $data = file_get_contents($resource);
        
        if ($data !== false) {
            $messages = json_decode($data, true);
            $errorCode = json_last_error();
            if ($errorCode > 0) {
                throw new InvalidJsonException($errorCode);
            }
        }
        
        return $messages;
    }
}
