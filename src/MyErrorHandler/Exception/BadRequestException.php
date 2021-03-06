<?php

/**
 *
 * @author Stefano Torresi <webdeveloper@stefanotorresi.it>
 */

namespace MyErrorHandler\Exception;

class BadRequestException extends Exception
{
    public function __construct($message = 'Bad Request', $http_code = 400)
    {
        parent::__construct($message, $http_code);
    }
}
