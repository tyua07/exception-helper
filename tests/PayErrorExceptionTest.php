<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | PayErrorExceptionTest.php: 测试 PayErrorException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\PayErrorException;

class PayErrorExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\PayErrorException
     */
    public function testException()
    {
        throw new PayErrorException();
    }
}