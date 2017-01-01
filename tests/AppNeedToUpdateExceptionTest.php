<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | AppNeedToUpdateExceptionTest.php: 测试 AppNeedToUpdateException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\AppNeedToUpdateException;

class AppNeedToUpdateExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\AppNeedToUpdateException
     */
    public function testException()
    {
        throw new AppNeedToUpdateException();
    }
}