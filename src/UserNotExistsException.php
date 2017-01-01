<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | UserNotExistsException.php: 用户不存在异常
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class UserNotExistsException extends InvalidArgumentException
{
    /**
     * UserNotExistsException constructor.
     *
     * @description  构造方法
     * @author @author yangyifan <yangyifanphp@gmail.com>
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::USER_NOT_EXISTS)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}