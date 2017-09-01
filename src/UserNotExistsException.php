<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class UserNotExistsException extends InvalidArgumentException
{
    /**
     * UserNotExistsException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::USER_NOT_EXISTS)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}