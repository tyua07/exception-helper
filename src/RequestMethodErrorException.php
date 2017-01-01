<?php

// +----------------------------------------------------------------------
// | date: 2016-11-13
// +----------------------------------------------------------------------
// | RequestMethodErrorException.php: 接口请求方式异常
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class RequestMethodErrorException extends InvalidArgumentException
{
    /**
     * RequestMethodErrorException constructor.
     *
     * @description 构造方法
     * @author @author yangyifan <yangyifanphp@gmail.com>
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::HTTP_REQUEST_METHOD_ERROR)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}