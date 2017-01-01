<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | AppIsTooOldExceptionTest.php: 测试 AppIsTooOldException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\TimeOutException;

class TimeOutExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\TimeOutException
     */
    public function testException()
    {
        throw new TimeOutException();
    }
}