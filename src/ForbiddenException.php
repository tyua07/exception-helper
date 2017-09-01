<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class ForbiddenException extends InvalidArgumentException
{
    /**
     * ForbiddenException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::FORBIDDEN)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}