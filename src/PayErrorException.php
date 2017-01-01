<?php

// +----------------------------------------------------------------------
// | date: 2016-11-13
// +----------------------------------------------------------------------
// | PayErrorException.php: 支付失败 异常
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class PayErrorException extends InvalidArgumentException
{
    /**
     * PayErrorException constructor.
     *
     * @description 构造方法
     * @author @author yangyifan <yangyifanphp@gmail.com>
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::PAY_ERROR)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}