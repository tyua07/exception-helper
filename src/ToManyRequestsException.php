<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class ToManyRequestsException extends InvalidArgumentException
{
    /**
     * ToManyRequestsException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::TO_MANY_REQUESTS)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}