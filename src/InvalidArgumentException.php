<?php

namespace Yangyifan\Exception;

use Exception;
use Yangyifan\Response\CodeHelp;
use Yangyifan\Response\ResponseHelper;

class InvalidArgumentException extends Exception
{
    /**
     * InvalidArgumentException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($message, $code = CodeHelp::NORMAL_ERROR)
    {
        parent::__construct($message, $code);
    }

    /**
     * 响应
     */
    public function render()
    {
        return ResponseHelper::errorResponse($this->getMessage(), $this->getCode());
    }
}