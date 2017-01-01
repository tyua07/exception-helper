<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | TestForbiddenException.php: 测试 ForbiddenException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\ForbiddenException;

class ForbiddenExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\ForbiddenException
     */
    public function testException()
    {
        throw new ForbiddenException();
    }
}