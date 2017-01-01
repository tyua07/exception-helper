<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | UserNotExistsExceptionTest.php: 测试 UserNotExistsException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\UserNotExistsException;

class UserNotExistsExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\UserNotExistsException
     */
    public function testException()
    {
        throw new UserNotExistsException();
    }
}