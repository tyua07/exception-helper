<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | HelpExceptionTest.php: 测试 HelpException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\InvalidArgumentException;
use Yangyifan\Response\CodeHelp;

class HelpExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\InvalidArgumentException
     * @expectedExceptionMessage 测试错误
     * @expectedExceptionCode 20000
     */
    public function testException()
    {
        throw new InvalidArgumentException('测试错误', Yangyifan\Response\CodeHelp::NORMAL_ERROR);
    }
}