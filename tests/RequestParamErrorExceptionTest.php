<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | RequestParamErrorExceptionTest.php: 测试 RequestParamErrorException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\RequestParamErrorException;

class RequestParamErrorExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\RequestParamErrorException
     */
    public function testException()
    {
        throw new RequestParamErrorException();
    }
}