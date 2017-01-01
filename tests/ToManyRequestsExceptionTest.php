<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | ToManyRequestsExceptionTest.php: 测试 ToManyRequestsException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\ToManyRequestsException;

class ToManyRequestsExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\ToManyRequestsException
     */
    public function testException()
    {
        throw new ToManyRequestsException();
    }
}