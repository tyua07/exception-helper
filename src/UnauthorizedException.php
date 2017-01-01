<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | UnauthorizedException.php: 授权失败异常
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class UnauthorizedException extends InvalidArgumentException
{
    /**
     * UnauthorizedException constructor.
     *
     * @description 构造方法
     * @author @author yangyifan <yangyifanphp@gmail.com>
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::UN_AUTHORIZED)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}