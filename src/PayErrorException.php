<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class PayErrorException extends InvalidArgumentException
{
    /**
     * PayErrorException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::PAY_ERROR)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}