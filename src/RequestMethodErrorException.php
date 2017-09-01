<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class RequestMethodErrorException extends InvalidArgumentException
{
    /**
     * RequestMethodErrorException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::HTTP_REQUEST_METHOD_ERROR)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}