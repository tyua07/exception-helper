<?php

namespace Yangyifan\Exception;

use Exception;
use Yangyifan\Response\CodeHelp;

class ServerErrorException extends InvalidArgumentException
{
    /**
     * ServerErrorException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::FATAL_ERROR)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}