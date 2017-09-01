<?php

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class RequestParamErrorException extends InvalidArgumentException
{
    /**
     * RequestParamErrorException constructor.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::HTTP_REQUEST_PARAM_ERROR)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}