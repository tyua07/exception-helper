<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | UnauthorizedExceptionTest.php: 测试 UnauthorizedException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\UnauthorizedException;

class UnauthorizedExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\UnauthorizedException
     */
    public function testException()
    {
        throw new UnauthorizedException();
    }
}