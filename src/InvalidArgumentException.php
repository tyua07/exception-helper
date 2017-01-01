<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | InvalidArgumentException.php: 自定义异常类
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace Yangyifan\Exception;

use Exception;
use Yangyifan\Response\CodeHelp;

class InvalidArgumentException extends Exception
{
    /**
     * HelpException constructor.
     *
     * @description 构造方法
     * @author @author yangyifan <yangyifanphp@gmail.com>
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($message, $code = CodeHelp::NORMAL_ERROR)
    {
        parent::__construct($message, $code);
    }
}