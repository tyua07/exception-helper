<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | RequestMethodErrorExceptionTest.php: 测试 RequestMethodErrorException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\RequestMethodErrorException;

class RequestMethodErrorExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\RequestMethodErrorException
     */
    public function testException()
    {
        throw new RequestMethodErrorException();
    }
}