<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class TimeOutException extends InvalidArgumentException
{
    /**
     * RequestMethodErrorException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::APP_IS_TOO_OLD)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}