<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | ServerErrorExceptionTest.php: 测试 ServerErrorException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\ServerErrorException;

class ServerErrorExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\ServerErrorException
     */
    public function testException()
    {
        throw new ServerErrorException();
    }
}