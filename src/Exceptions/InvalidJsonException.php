<?php

namespace Marussia\JsonFileLoader\Exceptions;

class InvalidJsonException
{
    public function __construct(int $errorCode)
    {
        parent::__construct('Error parsing JSON. Error code - '. $errorCode);
    }
}
