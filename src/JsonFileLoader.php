<?php

declare(strict_types=1);

namespace Marussia\JsonFileLoader;

use Marussia\JsonFileLoader\Exceptions\InvalidJsonException;

class JsonFileLoader
{
    public static function load(string $resource)
    {
        $content = [];

        $data = file_get_contents($resource);

        if ($data !== false) {
            $content = json_decode($data, true);
            $errorCode = json_last_error();
            if ($errorCode > 0) {
                throw new InvalidJsonException($resource, $errorCode);
            }
        }

        return $content;
    }
}
