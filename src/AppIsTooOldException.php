<?php

// +----------------------------------------------------------------------
// | date: 2016-11-13
// +----------------------------------------------------------------------
// | AppIsTooOldException.php: APP 版本提示更新 异常
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Exception;

use Yangyifan\Response\CodeHelp;

class AppIsTooOldException extends InvalidArgumentException
{
    /**
     * RequestMethodErrorException constructor.
     *
     * @description 构造方法
     * @author @author yangyifan <yangyifanphp@gmail.com>
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = CodeHelp::APP_IS_TOO_OLD)
    {
        $message = empty($message) ? CodeHelp::getErrorMsg($code) : $message;

        parent::__construct($message, $code);
    }
}