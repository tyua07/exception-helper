<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class UnLoginException extends InvalidArgumentException
{
    /**
     * UnLoginException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::UN_LOGIN)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}