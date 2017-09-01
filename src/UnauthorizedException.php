<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class UnauthorizedException extends InvalidArgumentException
{
    /**
     * UnauthorizedException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::UN_AUTHORIZED)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}