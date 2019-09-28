<?php

namespace Marussia\JsonFileLoader\Exceptions;

class InvalidJsonException extends \Exception
{
    public function __construct(string $resource, int $errorCode)
    {
        parent::__construct('Error parsing JSON. ' . 'Resource - ' . $resource . ' Error code - '. $errorCode);
    }
}
